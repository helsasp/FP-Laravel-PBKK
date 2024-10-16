<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EdulevelController;
use App\Http\Controllers\ProgramController;

Route::get('/', function () {
    return view('welcome',['title'=>'TutorIN: Unlock Your Coding Potential']);
});

Route::get('home', function () {
    return view('home');
});

Route::get('edulevels', [EdulevelController::class, 'data']);
Route::get('edulevels/add', [EdulevelController::class, 'add']);
Route::post('edulevels', [EdulevelController::class, 'addProcess']);
Route::get('edulevels/edit/{id}', [EdulevelController::class, 'edit']);
Route::patch('edulevels/{id}', [EdulevelController::class, 'editProcess']);
Route::delete('edulevels/{id}', [EdulevelController::class, 'delete']);

Route::resource('programs', ProgramController::class);
