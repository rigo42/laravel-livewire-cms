<?php


use App\Http\Controllers\Site\About\AboutInfoController;
use App\Http\Controllers\Site\Welcome\WelcomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

//Welcome
Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

//About
Route::prefix('about')->group(function () {
    Route::get('/', [AboutInfoController::class, 'index'])->name('about-info.index');
});

