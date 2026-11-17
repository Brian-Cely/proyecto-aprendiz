<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('principal');
});

Route::view('/iniciar-sesion', 'iniciarsesion')->name('iniciar.sesion');