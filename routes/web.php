<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('html101');
});

Route::get('/se', function (){ ;
    return view('template.default') ;
});


Route::get('/mycontroller' , [App\Http\Controllers\MyController::class , 'index']);
Route::get('/calculate' , [App\Http\Controllers\MyController::class , 'info']);
Route::post('/calculate' , [App\Http\Controllers\MyController::class , 'calculate']);
Route::post('/submitForm' , [App\Http\Controllers\MyController::class , 'submitForm']);
Route::resource('/flights',App\Http\Controllers\FlightController::class);
Route::resource('/pokedexs', App\Http\Controllers\PokedexController::class);
Route::get('/pokedexs/{id}', [PokedexController::class, 'show']);