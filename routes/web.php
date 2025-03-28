<?php

use Livewire\Update as LivewireUpdate;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\residentscontroller;
use App\Http\Controllers\logincontroller;
use App\Http\Controllers\visitorscontroller;
use App\Http\Controllers\contractscontroller;
use App\Http\Controllers\housescontroller;
use App\Http\Controllers\incidentscontroller;
use App\Http\Controllers\transactionscontroller;
use App\Http\Controllers\eventscontroller;


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
//Route::get('/residents/{id}/edit', [residentscontroller::class, 'edit'])->name('residents.edit');
Route::get('testQR',[residentscontroller::class,'testQR'])->name('testQR');

/* Visitantes */
Route::get('visitantesAdmin',[visitorscontroller::class,'visitorsAdmin'])->name('visitantesAdmin');
Route::get('visitantesResidentes',[visitorscontroller::class,'visitorsResidentes'])->name('visitantesResidentes');

/* Incidencias */
Route::get('incidenciasAdmin',[incidentscontroller::class,'incidentsAdmin'])->name('incidenciasAdmin');
//Route::get('incidenciasResidentes',[incidentscontroller::class,'incidentsResidentes'])->name('incidenciasResidentes');

/* Transacciones */
Route::get('transaccionesAdmin',[transactionscontroller::class,'transactionsAdmin'])->name('transaccionesAdmin');

/* Eventos */
Route::get('eventosAdmin',[eventscontroller::class,'eventsAdmin'])->name('eventosAdmin');

// Route::get('/', function () {
//     return view('login');
// });
