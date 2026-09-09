<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sobre', function () {
    return 'Esta é a página sobre.';
});

Route::get('/alunos', function () {
    return 'Esta é a página de alunos.';
});

Route::get('/contato', function () {
    return 'Esta é a página de contato.';
});

Route::get('/produto/{id}', function ($id) {
    return "Produto número: $id";
});

Route::get('/categoria/{id}', function ($id) {
    return "Categoria número: $id";
});

Route::get('/usuario/{id}', function ($id) {
    return "Usuário número: $id";
});

Route::get('/alunos-crud', [AlunoController::class, 'index']);
Route::get('/alunos-crud/create', [AlunoController::class, 'create']);
Route::get('/alunos-crud/{id}', [AlunoController::class, 'show']);
Route::get('/alunos-crud/{id}/edit', [AlunoController::class, 'edit']);
Route::post('/alunos-crud', [AlunoController::class, 'store']);
Route::put('/alunos-crud/{id}', [AlunoController::class, 'update']);
Route::delete('/alunos-crud/{id}', [AlunoController::class, 'destroy']);

Route::get('/alunos/curso/{curso}', [AlunoController::class, 'porCurso']);
Route::get('/alunos/busca/{nome}', [AlunoController::class, 'porNome']);
Route::get('/alunos/recentes', [AlunoController::class, 'recentes']);
Route::get('/alunos/total', [AlunoController::class, 'total']);
