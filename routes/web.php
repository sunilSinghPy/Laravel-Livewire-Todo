<?php

use App\Http\Controllers\TodoController;
use App\Http\Controllers\UserController;
use App\Models\Todo;
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
Route::resource('todos', TodoController::class);
Route::put('/todos/{todo}/complete',[TodoController::class,'complete'])->name('todos.complete');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/upload', [UserController::class, 'uploadAvatar']);
