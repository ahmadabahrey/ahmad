<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\VisitorController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('main-page');
});

Route::resource('visitor', VisitorController::class);
Route::resource('comment', CommentController::class);
Route::resource('article', ArticleController::class);
Route::get('/articldel/{id}',[ArticleController::class,"destroy"]);
Route::get('/commentdel/{id}',[CommentController::class,"destroy"]);

Route::get('/visitorshow/{id}',[VisitorController::class,"show"]);
Route::get('/commentshow/{id}',[CommentController::class,"show"]);
Route::get('/articlshow/{id}',[ArticleController::class,"show"]);
Route::get('/createcomment',[CommentController::class,"create"]);
Route::post('/storecomment',[CommentController::class,"store"]);








