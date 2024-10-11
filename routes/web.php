<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EdulevelController;

Route::get('/', function () {
    return view('welcome',['title'=>'TutorIN - Online Learning Web']);
});

Route::get('home', function () {
    return view('home');
});

Route::get('edulevels', [EdulevelController::class, 'data']);
Route::get('edulevels/add', [EdulevelController::class, 'add']);
Route::post('edulevels', [EdulevelController::class, 'addProcess']);