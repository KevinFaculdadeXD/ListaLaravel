@extends('layouts.app')

@section('title', 'Lista de Alunos')

@section('content')
    <h1>Lista de Alunos</h1>

    @if(session('sucesso'))
        <p>{{ session('sucesso') }}</p>
    @endif

    <a href="/alunos-crud/create">Cadastrar novo aluno</a>

    @if($alunos->count() > 0)
        <ul>
            @foreach($alunos as $aluno)
                <li>
                    {{ $aluno->nome }} - {{ $aluno->curso }}
                    <a href="/alunos-crud/{{ $aluno->id }}">Ver</a>
                    <a href="/alunos-crud/{{ $aluno->id }}/edit">Editar</a>
                </li>
            @endforeach
        </ul>
    @else
        <p>Nenhum aluno cadastrado ainda.</p>
    @endif
@endsection
