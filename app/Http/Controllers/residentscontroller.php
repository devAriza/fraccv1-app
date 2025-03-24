<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resident;
use App\Models\ResidentsType;
use Illuminate\Support\Facades\Hash;
use App\Models\House;


class residentscontroller extends Controller
{
    
    public function dashboard()
    {           
        return view('index');
    }

    public function residentsAdmin()
    {
        $residentTypes = ResidentsType::all();
        $houses = House::all();
        $residents = Resident::with(['residents_type', 'houses'])->get();
        
        return view('residentes', compact('residents', 'houses', 'residentTypes'));
    }

    public function crearResidentes(Request $request)
    {
        // Validación
        $validated = $request->validate([
            'type_resident_id' => 'required|exists:residents_type,type_id',
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:residents,email',
            'phone' => 'nullable|string|max:20',
            'houses' => 'required|array',
            'houses.*' => 'exists:houses,house_id'
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

        // Asignar casas con datos del pivote
        if ($request->has('houses')) {
            foreach ($request->houses as $houseId) {
                $resident->houses()->attach($houseId, [
                    'role' => 'propietario', 
                    'start_date' => now(),
                    'end_date' => null
                ]);
            }
        }

        return redirect()->route('residentesAdmin')
            ->with('success', 'Residente creado exitosamente');
    }

}
