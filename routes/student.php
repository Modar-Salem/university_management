<?php

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

Route::controller(\App\Http\Controllers\student\AuthController::class)->group(function () {
    Route::get('register', 'create')->name('student.register');

    Route::post('register' , 'register')->name('student.register.save') ;

    Route::get('/' , 'login')->name('student.login');

    Route::post('login', 'loginAction')->name('student.login.action');

    Route::post('logout', 'logout')->name('student.logout')->middleware(['auth:student']);

    Route::get('/dashboard' , 'dashboard')->name('student.dashboard')->middleware(['auth:student']);

});
