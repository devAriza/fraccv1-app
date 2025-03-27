<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class incidentscontroller extends Controller
{
    
    public function incidentsAdmin()
    {
        return view('incidencias');
    }

    // public function incidentsResidentes()
    // {
    //     return view('incidentsResidentes');
    // }


}
