<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProfileController;


/*Route::get('/', function () {
    return view('welcome');
});*/

//1º
Auth::routes(['verify' => true]);


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');
Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
Route::post('/profile/change-password', [ProfileController::class, 'changePassword'])->name('profile.changePassword');
Route::post('/profile/change-email', [ProfileController::class, 'changeEmail'])->name('profile.changeEmail');
Route::post('/profile/change-username', [ProfileController::class, 'changeUsername'])->name('profile.changeUsername');