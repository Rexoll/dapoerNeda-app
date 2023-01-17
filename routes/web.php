<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ResepController;

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

Route::group(['prefix' => 'admin'], function () {
    Route::view('/', 'admin.dashboard')->name('admin.dashboard');

    Route::group(['prefix'=>'resep'],function(){
        Route::get('/',[ResepController::class,'index'])->name('admin.resep');
        Route::get('/create',[ResepController::class,'create'])->name('admin.resep.create');
        Route::post('/store',[ResepController::class,'store'])->name('admin.resep.store');
    });
});

// Route::get('/', function () {
//     return view('welcome');
// });
