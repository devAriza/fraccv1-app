<?php

use Livewire\Update as LivewireUpdate;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\residentscontroller;
use App\Http\Controllers\logincontroller;
use App\Http\Controllers\visitorscontroller;
use App\Http\Controllers\contractscontroller;
use App\Http\Controllers\housescontroller;



/* Login */
Route::get('login',[logincontroller::class,'login'])->name('login');
Route::POST('validar',[logincontroller::class,'validar'])->name('validar');
Route::get('principal',[logincontroller::class,'principal'])->name('principal');
Route::get('cerrarsesion',[logincontroller::class,'cerrarsesion'])->name('cerrarsesion');

/* Dashboard */
Route::get('dashboard',[residentscontroller::class,'dashboard'])->name('dashboard');

/* Contratos */
Route::get('contratosAdmin',[contractscontroller::class,'contratosAdmin'])->name('contratosAdmin');

/* Residentes */
Route::get('residentesAdmin',[residentscontroller::class,'residentsAdmin'])->name('residentesAdmin');
Route::POST('crearResidentes',[residentscontroller::class,'crearResidentes'])->name('crearResidentes');

Route::get('visitantesAdmin',[visitorscontroller::class,'visitorsAdmin'])->name('visitantesAdmin');
Route::get('visitantesResidentes',[visitorscontroller::class,'visitorsResidentes'])->name('visitantesResidentes');



// Route::get('/', function () {
//     return view('login');
// });
