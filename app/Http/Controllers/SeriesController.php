<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Serie;
use App\Http\Requests\StoreSeriesRequest;
use App\Http\Requests\UpdateSeriesRequest;
use DB;

class SeriesController extends Controller
{
    public function index()
    {
        $series = Serie::orderBy('id', 'desc')->paginate();
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

    public function update(UpdateSeriesRequest $request, int $id)
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
