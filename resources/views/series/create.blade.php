@extends('layouts.default')

@section('content')
    <h1>Criando uma serie</h1>
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <form action="/series/store" method="post">
        @csrf
        <input type="text" name="titulo">
        <button type="submit">Enviar</button>
    </form>
@endsection
