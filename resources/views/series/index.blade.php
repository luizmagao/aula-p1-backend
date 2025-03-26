@extends('layouts.default')

@section('title', 'Listando series')

@section('content')
    <h1>Listando Series</h1>
    <a href="/series/create" class="btn btn-primary">Adicionar Serie</a>
    <ul class="list-group mt-2">
        @foreach ($series as $serie)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $serie->titulo }}
                <button class="btn btn-warning btn-sm">E</button>
            </li>
        @endforeach
    </ul>
@endsection
