<?php

use Livewire\Update as LivewireUpdate;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\residentscontroller;
use App\Http\Controllers\logincontroller;
use App\Http\Controllers\visitorscontroller;
use App\Http\Controllers\contractscontroller;


Route::get('login',[logincontroller::class,'login'])->name('login');
Route::POST('validar',[logincontroller::class,'validar'])->name('validar');
Route::get('principal',[logincontroller::class,'principal'])->name('principal');
Route::get('cerrarsesion',[logincontroller::class,'cerrarsesion'])->name('cerrarsesion');

Route::get('contratosAdmin',[contractscontroller::class,'contratosAdmin'])->name('contratosAdmin');
//Route::get('contratosResidentes',[contractscontroller::class,'contratosAdmin'])->name('contratosResidentes');


Route::get('reporteResidentes',[residentscontroller::class,'reporte'])->name('reporteResidentes');

Route::get('visitantesAdmin',[visitorscontroller::class,'visitorsAdmin'])->name('visitantesAdmin');
Route::get('visitantesResidentes',[visitorscontroller::class,'visitorsResidentes'])->name('visitantesResidentes');



// Route::get('/', function () {
//     return view('login');
// });
