@extends('layouts.default')

@section('content')
    <h1>Criando uma serie</h1>
    <form action="{{ route('series.store') }}" method="post">
        @csrf
        <input class="form-control" type="text" name="titulo">
        <button class="btn btn-primary" type="submit">Enviar</button>
    </form>
@endsection
