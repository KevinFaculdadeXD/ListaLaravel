@extends('layouts.app')

@section('title', 'Detalhes do Aluno')

@section('content')
    <h1>Detalhes do Aluno</h1>

    @if(isset($aluno))
        <p>Nome: {{ $aluno->nome }}</p>
        <p>Curso: {{ $aluno->curso }}</p>
    @else
        <p>Aluno não encontrado.</p>
    @endif
@endsection
