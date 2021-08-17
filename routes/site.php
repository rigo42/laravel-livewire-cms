<?php

use App\Http\Controllers\Site\Welcome\WelcomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [WelcomeController::class, 'index'])->name('admin.site.welcome');