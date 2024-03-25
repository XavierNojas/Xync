<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransferController;

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

Route::get('/users', function () {
    return view('users');
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
Route::post('/store', [TransferController::class, 'store'])->name('transfer.store');
Route::get('/edit/{id}', [TransferController::class, 'edit'])->name('transfer.edit');
Route::put('/update', [TransferController::class, 'update'])->name('transfer.update');
Route::get('/delete/{id}', [TransferController::class, 'delete'])->name('transfer.delete');
