<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class visitorscontroller extends Controller
{
    public function visitorsAdmin(){
        return view('visitantes_admin');
    }

    public function visitorsResidents(){
        return view('visitantes_residentes');
    }
}
