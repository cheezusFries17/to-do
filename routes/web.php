<?php

use Illuminate\Support\Facades\Route;

// Import Todos Controller
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
    return redirect()->route('todo.index');
});

// Group by controller. Expansion ready.
Route::controller(TodoController::class)->group(function () {
    Route::prefix('/')->group(function () {
        // a list of routes
        Route::get('/', 'index')->name('todo.index');

        // Create To Do List
        Route::get('create', 'create')->name('todo.create');
        Route::post('add', 'add')->name('todo.add');

        // Edit To Do List
        Route::get('edit/{todo}', 'edit')->name('todo.edit');
        Route::post('update/{todo}', 'update')->name('todo.update');

        // Delete To Do List
        Route::get('delete/{todo}', 'delete')->name('todo.delete');

        //View details of To Do List
        Route::get('details/{todo}', 'details')->name('todo.details');
    });

    // Route::get('name of link', 'name of function')
});
