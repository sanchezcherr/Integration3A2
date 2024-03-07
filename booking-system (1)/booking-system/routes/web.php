<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageContoller;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\LoginController;
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
    return view('index');
})->name('home');
Route::get('/about', [PageContoller::class,'about'])->name('about');
Route::get('/available', [PageContoller::class,'available'])->name('available');
Route::get('/blog', [PageContoller::class,'blog'])->name('blog');
Route::get('/contact', [PageContoller::class,'contact'])->name('contact');
Route::get('/gallery', [PageContoller::class,'gallery'])->name('gallery');
Route::get('/room', [PageContoller::class,'room'])->name('room');
Route::get('/bookingform', [BookingController::class,'index'])->name('bookingform');

Route::resource('user', UserController::class);
Route::resource('client', LoginController::class);
Route::resource('booking', BookingController::class);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
