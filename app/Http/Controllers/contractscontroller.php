<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resident;
use App\Models\Contract;

class contractscontroller extends Controller
{
    
    public function contratosAdmin(){
        return view('contratos');
    }

    public function contratosResidentes(){
        return view('contratos_residentes');
    }
}
