@extends('layouts.app')

@section('title', 'Cadastrar Aluno')

@section('content')
    <h1>Cadastrar Aluno</h1>
    <form method="POST" action="/alunos-crud">
        @csrf
        <input type="text" name="nome" placeholder="Nome do aluno">
        <input type="text" name="curso" placeholder="Curso do aluno">
        <button type="submit">Salvar</button>
    </form>
@endsection
