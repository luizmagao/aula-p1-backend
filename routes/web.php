<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SeriesController;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(SeriesController::class)
        ->prefix('series')
        ->group(function() {
            Route::get('/', 'index');
            Route::get('/create', 'create');
            Route::post('/store', 'store');
            Route::get('/{id}/edit', 'edit');
            Route::put('/{id}', 'update');
            Route::post('/delete', 'delete');
});
