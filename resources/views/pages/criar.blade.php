@extends('layout')
@section('cabecalho')
    Criar Estudante
@endsection

@section('title')
    Criar Estudante
@endsection
@section('corpo')

    <div class="container">
        <form method="post" action="{{route('estudante.store')}}">
            @csrf
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" placeholder="Nome">

            <label for="sobrenome">Sobrenome:</label>
            <input type="text" id="sobrenome" name="sobrenome" placeholder="Sobrenome">

            <button type="submit">Salvar</button>
        </form>
    </div>
@endsection
