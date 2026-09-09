<?php

namespace App\Http\Controllers;
use App\Models\Aluno;
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

    public function porCurso($curso)
{
    $alunos = Aluno::where('curso', $curso)->get();
    return $alunos;
}

public function porNome($nome)
{
    $alunos = Aluno::where('nome', 'like', "%$nome%")->get();
    return $alunos;
}

public function recentes()
{
    $alunos = Aluno::orderBy('created_at', 'desc')->take(5)->get();
    return $alunos;
}

public function total()
{
    $total = Aluno::count();
    return "Total de alunos: $total";
}
}