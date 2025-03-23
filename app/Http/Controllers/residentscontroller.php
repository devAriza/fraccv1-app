<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resident;

class residentscontroller extends Controller
{
    
    public function reporte()
    {   
        
        return view('index');
       
    }

}
