<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FormulirController;

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
Route::get('/catchAPI', [HomeController::class, 'catch'])->name('catch');
Route::post('/catchAPI', [HomeController::class, 'catchRequest'])->name('catch');
Auth::routes();

Route::group(['middleware' => ['auth', 'role:1']], function() {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::resource('KelolaAkun', UserController::class);
});

Route::group(['middleware' => ['auth', 'role:1,2']], function() {
    Route::get('/user', [HomeController::class, 'user'])->name('user');
    Route::resource('Formulir', FormulirController::class);
});
