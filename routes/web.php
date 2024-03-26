<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransferController;
use App\Http\Controllers\UserController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/branch', function () {
    return view('branch');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');

});


Route::get('/transfer', [TransferController::class, 'index'])->name('transfer.index');
Route::post('/transfer/store', [TransferController::class, 'store'])->name('transfer.store');
Route::get('/transfer/edit/{id}', [TransferController::class, 'edit'])->name('transfer.edit');
Route::put('/transfer/update', [TransferController::class, 'update'])->name('transfer.update');
Route::get('/transfer/delete/{id}', [TransferController::class, 'delete'])->name('transfer.delete');

Route::get('/user', [UserController::class, 'index'])->name('user.index');
Route::post('/user/store', [UserController::class, 'store'])->name('user.store');
Route::get('/user/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
Route::put('/user/update', [UserController::class, 'update'])->name('user.update');
Route::get('/user/delete/{id}', [UserController::class, 'delete'])->name('user.delete');
