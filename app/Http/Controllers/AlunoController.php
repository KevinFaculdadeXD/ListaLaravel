<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function index()
    {
        return 'Lista de todos os alunos';
    }

    public function show($id)
    {
        return "Mostrando aluno de id: $id";
    }

    public function create()
    {
        return 'Formulário de criação de aluno';
    }

    public function store(Request $request)
    {
        return 'Aluno salvo com sucesso';
    }

    public function edit($id)
    {
        return "Formulário de edição do aluno $id";
    }

    public function update(Request $request, $id)
    {
        return "Aluno $id atualizado";
    }

    public function destroy($id)
    {
        return "Aluno $id removido";
    }
}