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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');

Route::get('/users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');
Route::get('/users/tambah', [\App\Http\Controllers\UserController::class, 'create'])->name('users.create');
Route::post('/users', [\App\Http\Controllers\UserController::class, 'store'])->name('users.store');
Route::get('/users/edit/{id}', [\App\Http\Controllers\UserController::class, 'edit'])->name('users.edit');
Route::put('/users/{id}', [\App\Http\Controllers\UserController::class, 'update'])->name('users.update');
Route::delete('/users/{id}', [\App\Http\Controllers\UserController::class, 'destroy'])->name('users.destroy');

Route::get('/dashboard', [\App\Http\Controllers\DashboardController::class, 'index']);
Route::get('/profile', [\App\Http\Controllers\DashboardController::class, 'create']);
Route::get('/table', [\App\Http\Controllers\DashboardController::class, 'table']);
Route::get('/calender', [\App\Http\Controllers\DashboardController::class, 'calender']);
Route::get('/more', [\App\Http\Controllers\DashboardController::class, 'more']);
Route::get('/mailbox', [\App\Http\Controllers\DashboardController::class, 'mailbox']);
Route::get('/inbox', [\App\Http\Controllers\DashboardController::class, 'inbox']);