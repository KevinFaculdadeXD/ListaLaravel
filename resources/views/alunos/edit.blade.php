@extends('layouts.app')

@section('title', 'Editar Aluno')

@section('content')
    <h1>Editar Aluno</h1>
    <form method="POST" action="/alunos-crud/{{ $aluno->id }}">
        @csrf
        @method('PUT')
        <input type="text" name="nome" value="{{ $aluno->nome }}">
        <input type="text" name="curso" value="{{ $aluno->curso }}">
        <button type="submit">Atualizar</button>
    </form>
    <form method="POST" action="/alunos-crud/{{ $aluno->id }}">
        @csrf
        @method('DELETE')
        <button type="submit">Excluir</button>
    </form>
@endsection
