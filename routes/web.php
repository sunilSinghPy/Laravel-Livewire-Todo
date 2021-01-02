<?php

use App\Http\Controllers\TodoController;
use App\Http\Controllers\UserController;
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
    return view('welcome');
});
Route::get('/users', [UserController::class, 'index']);

Route::get('/todos', [TodoController::class,'index']);
Route::get('/todos/create', [TodoController::class,'create']);
Route::post('/todos/store', [TodoController::class,'store'])->name('store');
Route::put('/todos/{todo}', [TodoController::class,'update']);
Route::put('/todos/{todo}/complete', [TodoController::class,'complete']);
Route::post('/todos/{todo}/edit', [TodoController::class,'edit']);

Route::delete('/todos/{todo}', [TodoController::class,'destroy']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/upload', [UserController::class, 'uploadAvatar']);
