<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\residentscontroller;
use App\Http\Controllers\logincontroller;
use App\Http\Controllers\visitorscontroller;


Route::get('login',[logincontroller::class,'login'])->name('login');
Route::POST('validar',[logincontroller::class,'validar'])->name('validar');


Route::get('reporteResidentes',[residentscontroller::class,'reporte'])->name('reporteResidentes');

Route::get('dashboard',[visitorscontroller::class,'visitorsAdmin'])->name('dashboard');
Route::get('visitantesResidentes',[visitorscontroller::class,'visitorsAdmin'])->name('visitantesResidentes');



// Route::get('/', function () {
//     return view('login');
// });
