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
    return view('welcome');
});

Auth::routes();


Route::middleware(['auth'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::resource('invoices', 'App\Http\Controllers\InvoiceController');

    Route::resource('tasks', 'App\Http\Controllers\TaskController');

    Route::resource('logs', 'App\Http\Controllers\LogController');

    Route::get('/desafio2', function () {
        return view('desafio2');
    })->name('desafio2');

    Route::get('/desafio4', function () {
        return view('desafio4');
    })->name('desafio4');
    
});

Route::resource('users', 'App\Http\Controllers\UsersController');
