@extends('layouts.app')

@section('content')
    <h1>Listando Series</h1>
    <a href="/series/create">Adicionar Serie</a>
    <ul>
        @foreach ($series as $serie)
            <li>{{ $serie->titulo }}</li>
        @endforeach
    </ul>
@endsection

