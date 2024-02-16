<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\PublisherController;

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

Route::get('/', [BookController::class, 'ViewAllBook']);

Route::get('/add/book', [BookController::class, 'AddBook']);

Route::post('/store/book', [BookController::class, 'StoreBook']);

Route::get('/book/{id}', [BookController::class, 'ViewBook']);

Route::get('/edit/book/{id}', [BookController::class, 'editBook']);

Route::patch('/update/book/{id}', [BookController::class, 'updateBook']);

Route::delete('/delete/book/{id}', [BookController::class, 'deleteBook']);

Route::get('/add/publisher', [PublisherController::class, 'viewAddPublisher']);

Route::post('/store/publisher', [PublisherController::class, 'storePublisher']);

Route::get('/show/publisher', [PublisherController::class, 'viewPublisher']);

Route::get('/detail/publisher/{id}', [PublisherController::class, 'detail']);

Route::delete('/delete/publisher/{id}', [PublisherController::class, 'delete']);

Route::get('/edit/publisher/{id}', [PublisherController::class, 'viewUpdate']);

Route::patch('/update/publisher/{id}', [PublisherController::class, 'update']);