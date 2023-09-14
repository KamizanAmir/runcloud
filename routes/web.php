<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

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
    return redirect('/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\TodoController::class, 'create']);
Route::get('/create', [App\Http\Controllers\TodoController::class, 'create']);
Route::get('/create/task', [App\Http\Controllers\TaskController::class, 'create']);
Route::post('/upload', [App\Http\Controllers\TodoController::class, 'upload']);

Route::middleware(['auth'])->group(function(){
    Route::get('/home', [App\Http\Controllers\TodoController::class, 'create']);
    Route::get('/create', [App\Http\Controllers\TodoController::class, 'create']);
    Route::get('/create/task', [App\Http\Controllers\TaskController::class, 'create']);
    Route::post('/upload', [App\Http\Controllers\TodoController::class, 'upload']);
});