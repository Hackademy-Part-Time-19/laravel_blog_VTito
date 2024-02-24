<?php

use PhpParser\Node\Stmt\Catch_;
use Illuminate\Auth\Events\Verified;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Middleware\ArticlePermissions;

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

Route::get('/', [PageController::class, 'homepage'])->name('homepage');

Route::get('/contatti', [PageController::class, 'contacts', 'category'])->name('contacts');

Route::get('/articoli/filter/{category}', [ArticleController::class, 'byCategory'])->name('article.byCategory');

Route::post('/contatti/invio', [MailController::class, 'sendContact'])->name('contact.send');





Route::middleware('auth','verified')->group(function(){

 /*  Route::get('/create/article', [ArticleController::class, 'create'])->name('article.create');

  Route::post('/article/store', [ArticleController::class, 'store'])->name('article.store'); */

  Route::resource('articles', ArticleController::class)-> except(['index','show']);
  
  Route::get('user/profile', function () {
  
    return view('user.settings');
  
  })->name('settings');

});

Route::resource('articles', ArticleController::class)->only(['edit', 'update'])->middleware(ArticlePermissions::class);

Route::resource('articles', ArticleController::class)->only(['index','show']);

Route::resource('category', CategoryController::class);

Route::get('user/articles', [ArticleController::class, 'showUser'])->name('user.articles');

