<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PontoTuristicoController;	

	Route::resource('pontosTuristicos', PontoTuristicoController::class);

Route::get('/', function () {
    return view('welcome');
});
