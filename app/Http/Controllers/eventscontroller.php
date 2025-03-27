<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class eventscontroller extends Controller
{
    public function eventsAdmin()
    {
        return view('eventos_admin');
    }
}
