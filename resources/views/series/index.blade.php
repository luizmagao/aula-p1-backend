@extends('layouts.default')

@section('title', 'Listando series')

@section('content')
    <h1>Listando Series</h1>
    <a href="/series/create" class="btn btn-primary">Adicionar Serie</a>
    <ul class="list-group mt-2">
        @foreach ($series as $serie)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $serie->titulo }}
                <div class="d-flex gap-1">
                    <a href="{{ route('series.edit', $serie->id) }}" class="btn btn-warning btn-sm">E</a>
                    <form action="{{ route('series.destroy', $serie->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger" type="submit">D</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>

    {{-- {{ $series->links() }} --}}
@endsection
