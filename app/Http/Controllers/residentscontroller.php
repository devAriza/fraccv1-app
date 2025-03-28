<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resident;
use App\Models\ResidentsType;
use Illuminate\Support\Facades\Hash;
use App\Models\House;
use App\Models\HouseResident;
use Illuminate\Support\Facades\DB;



use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Barryvdh\DomPDF\Facade\Pdf;

class residentscontroller extends Controller
{

    public function dashboard()
    {
        return view('index');
    }

    public function residentsAdmin()
    {


        $customResidents = DB::table('house_residents as hr')
        ->select(
            'hr.resident_id',
            'r.name',
            'r.email',
            'r.phone',
            'rt.name as type_name',
            'h.address',
            'r.qr_code',
            'h.house_id',
            'rt.type_id'
        )
        ->join('residents as r', 'r.resident_id', '=', 'hr.resident_id')
        ->join('houses as h', 'h.house_id', '=', 'hr.house_id')
        ->join('residents_type as rt', 'rt.type_id', '=', 'r.type_resident_id')
        ->where('hr.resident_id', '<>', 3)
        ->orderBy('r.name')
        ->get();

        $houses = DB::table('houses as h')
            ->select('h.house_id', 'h.address')
            ->leftJoin('house_residents as hr', 'h.house_id', '=', 'hr.house_id')
            ->whereNull('hr.house_id')
            ->where('h.status', '<>', 'HABITADA')
            ->orderBy('h.address')
            ->get();

        $housesAll = House::all();

        $residentTypes = ResidentsType::all();

        return view('residentes', compact('customResidents', 'houses', 'residentTypes', 'housesAll'));
    }

    public function crearResidentes(Request $request)
    {
        // Validación
        $validated = $request->validate([
            'type_resident_id' => 'required|exists:residents_type,type_id',
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:residents,email',
            'phone' => 'nullable|string|max:20',
            'house_id' => 'required|exists:houses,house_id',
        ]);
        
        // Crear residente
        $resident = Resident::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'password' => Hash::make('password_temporal'),
            'type_resident_id' => $validated['type_resident_id'],
            'qr_code' => \Illuminate\Support\Str::uuid(),
            'registration_date' => now()
        ]);


        $roleMap = [
            1 => 'Administrador',
            2 => 'Propietario',
            3 => 'Inquilino'
        ];
        
        $resident->houses()->attach($validated['house_id'], [
            'role' => $roleMap[$validated['type_resident_id']],
            'start_date' => now(),
            'end_date' => null
        ]);

        return redirect()->route('residentesAdmin')
            ->with('success', 'Residente creado exitosamente');
    }

    public function testQR($format = 'pdf')
    {
        // // Obtener el texto desde la BD
        // $data = Campaign::findOrFail($id); // Ajusta tu modelo y campo
        $qrText = "KLASPOJGAGJPOSEGJPOSEGSJPO";

        // Generar QR como base64 para PDF
        $qrCode = QrCode::size(300)->format('png')->generate($qrText);
        $base64QR = base64_encode($qrCode);

        // Descargar según formato solicitado
        if ($format === 'jpg' || $format === 'png') {
            return response($qrCode)
                ->header('Content-Type', 'image/png');
        }

        // Generar PDF
        $pdf = Pdf::loadView('qr-pdf', compact('base64QR'));
        $pdf->setOption('enable_remote', true);
        return $pdf->download("qr-1.pdf");
    }

    public function deleteResident($id)
    {
        $resident = Resident::findOrFail($id);
        $resident->delete();

        return redirect()->route('residentesAdmin')
            ->with('success', 'Residente eliminado exitosamente');
    }
}
