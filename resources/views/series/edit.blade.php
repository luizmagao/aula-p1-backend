@extends('layouts.default')

@section('content')
    <h1>Editando uma serie</h1>
    <form action="/series/{{ $serie->id }}" method="POST">
        @method('PUT')
        @csrf
        <input class="form-control" type="text" name="titulo" value="{{ $serie->titulo }}">
        <button class="btn btn-primary" type="submit">Editar</button>
    </form>
@endsection
