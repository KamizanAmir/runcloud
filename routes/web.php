<?php

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
    return redirect('/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/workspace', [App\Http\Controllers\WorkspaceController::class, 'index'])->name('workspace');
Route::get('/todolist', [App\Http\Controllers\TodoListController::class, 'index'])->name('todolist');
Route::get('/edit', [App\Http\Controllers\HomeController::class, 'index'])->name('edit');
