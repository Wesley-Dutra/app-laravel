<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome2', function () {
    return '<h1>Bem vindo 2</h1>';
});

Route::view('/produtos', 'produtos', ['name' => 'Meu produto']);

Route::redirect('/welcome2', '/');