<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Serie;
use DB;

class SeriesController extends Controller
{
    public function index()
    {
        // DB::table('series')->insert(['titulo' => 'A menina que roubava livros']);
        $series = DB::table('series')->get();

        return view('series.index', compact('series'));
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|min:3'
        ], [
            'titulo.required' => 'Preencha o campo abaixo',
            'titulo.min' => 'Preencha com no mínimo 3 caracteres'
        ]);

        DB::table('series')->insert($request->only(['titulo']));
        return redirect('/series');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(int $id)
    {
        $serie = Serie::find($id);
        return view('series.edit', compact('serie'));
    }

    public function update(Request $request, int $id)
    {
       $serie = Serie::find($id);
       $serie->titulo = $request->titulo;
       $serie->save();
       return redirect('/series');
    }

    public function destroy(int $id)
    {
        $serie = Serie::find($id);
        $serie->delete();
        return redirect('/series');
    }
}
