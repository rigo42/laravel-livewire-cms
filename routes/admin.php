<?php

use App\Http\Controllers\Admin\About\ClientController;
use App\Http\Controllers\Admin\About\TeamController;
use App\Http\Controllers\Admin\Blog\BlogCategoryController;
use App\Http\Controllers\Admin\Blog\BlogController;
use App\Http\Controllers\Admin\Blog\BlogTagController;
use App\Http\Controllers\Admin\Contact\ContactController;
use App\Http\Controllers\Admin\Dashboard\DashboardController;
use App\Http\Controllers\Admin\Portfolio\EvidenceController;
use App\Http\Controllers\Admin\Service\ServiceController;
use Illuminate\Support\Facades\Route;

//Dashboard
Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');

//About
Route::resource('/equipo', TeamController::class)->parameters(['equipo' => 'person'])->names('team');
Route::resource('/clientes', ClientController::class)->parameters(['clientes' => 'client'])->names('client');

//Service
Route::resource('/servicios', ServiceController::class)->parameters(['servicios' => 'service'])->names('service');

//Portfolio
Route::resource('/portafolio', EvidenceController::class)->parameters(['portafolio' => 'evidence'])->names('portfolio');

//Contact
Route::resource('/contacto', ContactController::class)->parameters(['contacto' => 'contact'])->names('contact');

//Blog
Route::resource('/contacto', ContactController::class)->parameters(['contacto' => 'contact'])->names('contact');

//Blog
Route::resource('/blogs', BlogController::class)->parameters(['blogs' => 'blog'])->names('blog');
Route::resource('/blog-categorias', BlogCategoryController::class)->parameters(['blog-categorias' => 'category'])->names('blog-category');
Route::resource('/blog-etiquetas', BlogTagController::class)->parameters(['blog-etiquetas' => 'tag'])->names('blog-tag');

