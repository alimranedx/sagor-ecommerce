<?php

use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminRegisterController;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




Route::get('/new', function(){
    return "hello new";
});
Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.welcome');
    });
    Route::get('/register', [AdminRegisterController::class, 'register'])->name('admin.register');
    Route::get('/login', [AdminRegisterController::class, 'login'])->name('admin.login');
    Route::get('/home', [AdminHomeController::class, 'index'])->name('admin.home');
});
