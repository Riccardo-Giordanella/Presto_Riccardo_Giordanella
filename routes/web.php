<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;

// Homepage
Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

// Creazione articolo
Route::get('/create/article', [ArticleController::class, 'create'])->name('create.article');