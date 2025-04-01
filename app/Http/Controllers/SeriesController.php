<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Serie;
use App\Http\Requests\StoreSeriesRequest;
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

    public function store(StoreSeriesRequest $request)
    {
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

    public function update(StoreSeriesRequest $request, int $id)
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
