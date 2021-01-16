<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodosController;

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
    return view('home');
})->name('home');


Route::get('/home', 'HomeController@index')->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/newtodo', [TodosController::class, 'index'])->name('newtodo');
    Route::get('/todos', [TodosController::class, 'todos'])->name('todos');
    Route::post('/newtodo', [TodosController::class, 'newtodo'])->name('newtodo');
    Route::get('/toggle', [TodosController::class, 'toggle'])->name('toggle');
    Route::get('/del', [TodosController::class, 'delTodo'])->name('delTodo');
    Route::get('/todo', [TodosController::class, 'todo'])->name('todo');
    Route::get('/edit', [TodosController::class, 'showTodo'])->name('edit');
    Route::post('/edited', [TodosController::class, 'update'])->name('edited');
});

Auth::routes();