<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/events', [App\Http\Controllers\EventController::class , 'index']);
Route::get('/events/{id}', [App\Http\Controllers\EventController::class , 'show']);
Route::resource('/events', 'App\Http\Controllers\EventController')->only([
    'create', 'store','destroy', 'edit', 'update'
])->middleware('auth');

Route::get('/categories', [App\Http\Controllers\CategoryController::class, 'index']);
Route::resource('/categories', 'App\Http\Controllers\CategoryController')->only([
    'store' , 'destroy', 'edit', 'update'
])->middleware('auth'); 

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



