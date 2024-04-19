<?php

use App\Http\Controllers\MultiplyController;
use Illuminate\Support\Facades\Route;



Route::get ('/',function (){
    return view ('multiply_form');
});

Route::post ('/',function (){
    return view ('multiply_result');
});

Route::get('/multiply', 'App\Http\Controllers\MultiplyController@showForm');
Route::post('/multiply', 'App\Http\Controllers\MultiplyController@multiply');
