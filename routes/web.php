<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('html101');
});

Route ::get('/se', function(){
    return view('template.default');
});

Route::get('/mycontroller', [App\Http\Controllers\MyController::class,'index']);
Route::get('/calcilate' , [App\Http\Controllers\MyController::class,'info']);
Route::post('/calcilate' , [App\Http\Controllers\MyController::class,'calculate']);
Route::post('/submitForm' , [App\Http\Controllers\MyController::class,'submitForm']);
Route::resource('/flights', App\Http\Controller\FlightController::class);
