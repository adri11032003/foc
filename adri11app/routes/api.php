<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\participante_controller;

Route::get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/curso', function (Request $request) {
    return $request->user();
});

Route::get('/participante',[participante_controller::class, 'index']);


Route::get('/tests', 'curso_controller@index');
