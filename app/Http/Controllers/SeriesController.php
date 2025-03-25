<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SeriesController extends Controller
{
    public function index()
    {
        DB::insert(
            'insert into series (id, titulo)
            values (?, ?)',
            [1, 'Dayle']
        );
        return view('series.index');
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
