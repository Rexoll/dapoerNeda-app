<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ResepController;
use App\Http\Controllers\User\ResepController as UserResepController;
use App\Http\Controllers\User\RegisterController;

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

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::view('/', 'admin.dashboard')->name('admin.dashboard');
    Route::group(['prefix' => 'resep'], function () {
        Route::get('/', [ResepController::class, 'index'])->name('admin.resep');
        Route::get('/create', [ResepController::class, 'create'])->name('admin.resep.create');
        Route::post('/store', [ResepController::class, 'store'])->name('admin.resep.store');
        Route::get('/edit/{id}', [ResepController::class, 'edit'])->name('admin.resep.edit');
        Route::put('/update/{id}', [ResepController::class, 'update'])->name('admin.resep.update');
        Route::delete('/destroy/{id}', [ResepController::class, 'destroy'])->name('admin.resep.destroy');
    });
});

Route::view('/', 'user.user-dashboard')->name('user.dashboard');
Route::group(['prefix' => 'home', 'middleware' => ['auth']], function () {
    Route::get('/create', [UserResepController::class, 'create'])->name('user.resep.create');
    Route::post('/store', [UserResepController::class, 'store'])->name('user.resep.store');
    // Route::group(['prefix' => 'user'], function () {
    //     Route::post('/login', [RegisterController::class, 'login'])->name('user.login');
    // });
});


// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
