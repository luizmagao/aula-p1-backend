<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SeriesController;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(SeriesController::class)
        ->prefix('series')
        ->group(function() {
            Route::get('/', 'index')->name('series.index');
            Route::get('/create', 'create')->name('series.create');
            Route::post('/store', 'store')->name('series.store');
            Route::get('/{id}/edit', 'edit')->name('series.edit');
            Route::put('/{id}', 'update')->name('series.update');
            Route::delete('/{id}', 'destroy')->name('series.destroy');
});
