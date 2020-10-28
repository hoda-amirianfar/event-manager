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


/* Route::resource('/events', 'App\Http\Controllers\EventController')->only([
    'index'
]); */
/* Route::resource('/categories', 'App\Http\Controllers\CategoryController')->only([
    'index' , 'store' , 'destroy', 'update'
]); */

Route::get('/categories', [App\Http\Controllers\CategoryController::class, 'index']);
Route::post('/categories', [App\Http\Controllers\CategoryController::class, 'store']);
Route::delete('/categories/{id}', [App\Http\Controllers\CategoryController::class, 'destroy']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



