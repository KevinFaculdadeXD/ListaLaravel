<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');

  Route::get('/sobre', function () {
    return 'Esta é a página sobre.';
});

Route::get('/alunos', function () {
    return 'Esta é a página de alunos.';
});

Route::get('/contato', function () {
    return 'Esta é a página de contato.';
});
  
});
