<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;




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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/page1', function(){
//     return view('page1');
// });

Route::group(['middleware' => ['guest']], function() {
    Route::get('/', [AuthController::class, 'login'])->name('login');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'postlogin'])->name('postlogin');
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'new'])->name('new');
    Route::get('/forgot-password', [AuthController::class, 'forgot-password'])->name('forgot-password');
});

Route::group(['middleware' => ['auth']], function() {
    Route::get('/home', [HomeController::class, 'home'])->name('home');
    Route::get('/akun', [HomeController::class, 'akun'])->name('akun');
    Route::get('/approvement', [HomeController::class, 'approvement'])->name('approvement');
    Route::get('/request', [HomeController::class, 'request'])->name('request');
    Route::get('/payment', [HomeController::class, 'payment'])->name('payment');
    Route::get('/report', [HomeController::class, 'report'])->name('report');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/create', [HomeController::class, 'create']);
    Route::get('/mitra', [HomeController::class, 'mitra'])->name('mitra');
    Route::get('/customer', [HomeController::class, 'customer'])->name('customer');
    Route::post('/store', [UserController::class, 'store']);
    Route::get('/show/{id}', [UserController::class, 'show'])->name('akun.show');
    Route::get('/delete/{id}', [UserController::class, 'delete'])->name('akun.delete');
    Route::post('/update/{id}', [UserController::class, 'update']);
    Route::get('/detail/{id}', [UserController::class, 'detail'])->name('detail');
    Route::get('/upload', [UploadsController::class, 'upload'])->name('upload');
    Route::post('/save', [uploadsController::class, 'save'])->name('save');
    Route::get('/gallery', [UserController::class, 'gallery'])->name('gallery');
});
           
