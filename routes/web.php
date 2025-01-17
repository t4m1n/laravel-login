<?php

use App\Http\Controllers\DaftarController;
use App\Http\Controllers\UserController;
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
    return view('home', ['title' => 'Home']);
})->name('home');

Route::get('register', [UserController::class, 'register'])->name('register');
Route::post('register', [UserController::class, 'register_action'])->name('register.action');
Route::get('login', [UserController::class, 'login'])->name('login');
Route::post('login', [UserController::class, 'login_action'])->name('login.action');
Route::get('logout', [UserController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth']], function () {
    Route::get('password', [UserController::class, 'password'])->name('password');
    Route::post('password', [UserController::class, 'password_action'])->name('password.action');

    Route::get('daftar', [DaftarController::class, 'index'])->name('daftar');
    Route::get('daftar-add', [DaftarController::class, 'create'])->name('daftar-add');
    Route::post('daftar', [DaftarController::class, 'add'])->name('daftar.save');
    Route::get('daftar-edit/{id}', [DaftarController::class, 'edit'])->name('daftar.edit');
    Route::put('daftar', [DaftarController::class, 'update'])->name('daftar.update');
    Route::delete('daftar-delete', [DaftarController::class, 'delete'])->name('daftar.delete');
    Route::post('print', [DaftarController::class, 'print'])->name('print');
});
