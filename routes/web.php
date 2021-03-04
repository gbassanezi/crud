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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/list', [App\Http\Controllers\ClientController::class, 'list']);
Route::get('/new', [App\Http\Controllers\ClientController::class, 'new']);
Route::post('/add', [App\Http\Controllers\ClientController::class, 'store']);
Route::get('/edit/{client}', [App\Http\Controllers\ClientController::class, 'edit']);
Route::put('update/{client}', [App\Http\Controllers\ClientController::class, 'update']);
Route::delete('delete/{client}', ['as' => 'delete.delete', 'uses' => App\Http\Controllers\ClientController::class, 'delete'])->name('delete.delete');
