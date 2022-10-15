<?php

use Illuminate\Support\Facades\Route;

Route::view('/','home')->name('home');
Route::view('/perfil','perfil')->name('perfil');
Route::view('/piezas','piezas')->name('piezas');
Route::view('/taller','taller')->name('taller');
Route::view('/contactar','contactar')->name('contactar');
Route::view('/resevervaya','resevervaya')->name('resevervaya');


