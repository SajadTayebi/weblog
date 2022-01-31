<?php

use Illuminate\Support\Facades\Route;
use \Illuminate\Support\Facades\Auth;

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

// Route For User
Route::get('/', [\App\Http\Controllers\front\HomeController::class, 'home'])->name('home');

Route::get('/profile/{user}', [\App\Http\Controllers\front\ProfileController::class, 'profile'])->name('user.profile');
Route::post('profile/update/{user}', [\App\Http\Controllers\front\ProfileController::class, 'update'])->name('submit_profile');



// Route For Admin
Route::prefix('/admin')->middleware(['checkRole', 'auth'])->group(function (){
    Route::get('/panel', [\App\Http\Controllers\back\adminController::class, 'index'])->name('admin.panel');
});
