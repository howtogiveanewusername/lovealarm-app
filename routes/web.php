<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomePageController;

require __DIR__.'/auth.php';

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//start page 127.8.8.1:8000
Route::get('/', function () {
    return view('welcome');
});

//second start page
Route::get('/dashboard', function () {
    return redirect('/home');
})->name('dashboard');

Route::get('/start',function(){
    return view('dashboard.welcome.index');
})->name('welcomePage');

//home

Route::get('/home',[HomePageController::class,'home'])->name('home');
Route::get('/HomePage',[HomePageController::class,'homePage'])->name('home#page');

//games
Route::get('/game', [GameController::class, 'gamePage'])->name('games');
Route::get('/game/1', [GameController::class, 'gameOne'])->name('games#1');
Route::get('/game/2', [GameController::class, 'gameTwo'])->name('games#2');

// profile
