<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class transactionscontroller extends Controller
{
    public function transactionsAdmin()
    {
        return view('transacciones');
    }
}
