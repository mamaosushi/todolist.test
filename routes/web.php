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
Route::post('/add', [Todocontroller::class, 'add'])->name('todo.add');
Route::post('/delete', [Todocontroller::class, 'delete'])->name('todo.delete');

