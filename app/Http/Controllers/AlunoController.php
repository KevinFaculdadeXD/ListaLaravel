<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function index()
    {
        $alunos = Aluno::all();
        return view('alunos.index', compact('alunos'));
    }

    public function show($id)
    {
        $aluno = Aluno::findOrFail($id);
        return view('alunos.show', compact('aluno'));
    }

    public function create()
    {
        return view('alunos.create');
    }

    public function store(Request $request)
    {
        Aluno::create([
            'nome' => $request->nome,
            'curso' => $request->curso,
        ]);

        return redirect('/alunos-crud')->with('sucesso', 'Aluno cadastrado com sucesso!');
    }

    public function edit($id)
    {
        $aluno = Aluno::findOrFail($id);
        return view('alunos.edit', compact('aluno'));
    }

    public function update(Request $request, $id)
    {
        $aluno = Aluno::findOrFail($id);
        $aluno->update([
            'nome' => $request->nome,
            'curso' => $request->curso,
        ]);

        return redirect('/alunos-crud')->with('sucesso', 'Aluno atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $aluno = Aluno::findOrFail($id);
        $aluno->delete();

        return redirect('/alunos-crud')->with('sucesso', 'Aluno removido com sucesso!');
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
