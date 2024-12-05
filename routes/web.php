<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


/*Route::get('/', function () {
    return view('welcome');
});*/


Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');
