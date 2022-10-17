<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HotelController;


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

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/', [HotelController::class, 'index']);
Route::get('/mainpage', [HotelController::class, 'mainpage'])->name('mainpage');
Route::get('/about', [HotelController::class, 'about'])->name('about');
Route::get('/create', [HotelController::class, 'create'])->name('create');
Route::post('/store', [HotelController::class, 'store'])->name('store');
Route::get('/{hotel}', [HotelController::class, 'hotel'])->name('hotel');
Route::get('/{hotel}/edit', [HotelController::class, 'edit'])->name('edit');
Route::post('/{hotel}/edit/save', [HotelController::class, 'editSave'])->name('edit.save');
Route::get('/{hotel}/delete', [HotelController::class, 'delete'])->name('delete');




