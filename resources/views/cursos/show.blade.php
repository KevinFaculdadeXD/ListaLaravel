@extends('layouts.app')

@section('title', 'Alunos do Curso')

@section('content')
    <h1>Curso: {{ $curso->nome }}</h1>

    <h2>Alunos matriculados:</h2>
    @if($curso->alunos->count() > 0)
        <ul>
            @foreach($curso->alunos as $aluno)
                <li>{{ $aluno->nome }}</li>
            @endforeach
        </ul>
    @else
        <p>Nenhum aluno matriculado neste curso.</p>
    @endif
@endsection
