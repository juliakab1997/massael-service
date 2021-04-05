<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\TodoListController;

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


Route::get('/', [ServicesController::class, 'index'])->name('services');

// Route::post('todos', [TodoListController::class, 'store'])->name('todo.store');

// Route::get('services', [ServicesController::class, 'index'])->name('services.index');

// Route::get('todos/{id}', [TodoListController::class, 'destroy'])->name('todo.destroy');
