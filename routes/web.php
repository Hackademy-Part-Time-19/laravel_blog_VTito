<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ArticleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PageController::class,'homepage'])->name('homepage');

Route::get('/articoli',[ArticleController::class,'index','category'] )->name('articoli.index');

Route::get('/articolo/{id}',[ArticleController::class,'show','category'] )->name('articoli.show');

Route::get('/contatti',[PageController::class,'contacts','category'])->name('contacts');

Route::get('/articoli/{categoria}',[ArticleController::class,'category'])->name('articoli.category');

Route::post('/contatti/invio',[MailController::class,'sendContact'])->name('contact.send');



Route::get('/create/article',[ArticleController::class,'create'])->name('article.create');

Route::post('/article/store',[ArticleController::class,'store'])->name('article.store');