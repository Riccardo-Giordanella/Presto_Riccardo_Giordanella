<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;

// Homepage
Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

// Creazione articolo
Route::get('/create/article', [ArticleController::class, 'create'])->name('create.article');

// Article index
Route::get('/article/index', [ArticleController::class, 'index'])->name('article.index');

// Rotta parametrica article
Route::get('/show/article/{article}', [ArticleController::class, 'show'])->name('article.show');

// Rotta parametrica category
Route::get('/category/{category}', [ArticleController::class, 'byCategory'])->name('byCategory');