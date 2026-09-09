@extends('layouts.app')

@section('title', 'Cadastrar Aluno')

@section('content')
    <h1>Cadastrar Aluno</h1>

    @if($errors->any())
        <ul>
            @foreach($errors->all() as $erro)
                <li>{{ $erro }}</li>
            @endforeach
        </ul>
    @endif

    <form method="POST" action="/alunos-crud">
        @csrf
        <input type="text" name="nome" placeholder="Nome do aluno" value="{{ old('nome') }}">
        <input type="text" name="curso" placeholder="Curso do aluno" value="{{ old('curso') }}">
        <button type="submit">Salvar</button>
    </form>
@endsection
