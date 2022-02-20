<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Todocontroller;
use App\Models\Todo;

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

Route::get('/', [Todocontroller::class, 'index'])->name('todo.index');
Route::post('todo//create', [Todocontroller::class, 'create'])->name('todo.create');
Route::post('todo/delete', [Todocontroller::class, 'delete'])->name('todo.delete');
Route::post('todo/update', [Todocontroller::class, 'update'])->name('todo.update');