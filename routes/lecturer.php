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

Route::controller(\App\Http\Controllers\lecturer\AuthController::class)->group(function () {
    Route::get('register', 'create')->name('lecturer.register');

    Route::post('register' , 'register')->name('lecturer.register.save') ;

    Route::get('/' , 'login')->name('lecturer.login');

    Route::post('login', 'loginAction')->name('lecturer.login.action');

    Route::post('logout', 'logout')->name('lecturer.logout')->middleware(['auth:lecturer']);

    Route::get('/dashboard' , 'dashboard')->name('lecturer.dashboard')->middleware(['auth:lecturer']);

});

Route::controller(\App\Http\Controllers\lecturer\LibraryController::class)->prefix('library')->middleware('auth:lecturer')->group(function () {
    Route::get('index' , 'index')->name('lecturer.library.index') ;
    Route::get('create' , 'create')->name('lecturer.library.create') ;
    Route::post('store' , 'store')->name('lecturer.library.store') ;
    Route::get('show/{id}' , 'show')->name('lecturer.library.show') ;
});


Route::controller(\App\Http\Controllers\lecturer\MailController::class)->prefix('mail')->middleware('auth:lecturer')->group(function () {
    Route::get('index' , 'index')->name('lecturer.mail.index') ;
    Route::get('index_sent' , 'indexSent')->name('lecturer.mail.index_sent') ;
    Route::get('create' , 'create')->name('lecturer.mail.create') ;
    Route::post('store' , 'store')->name('lecturer.mail.store') ;
    Route::get('show/{id}' , 'show')->name('lecturer.mail.show') ;
});

Route::controller(\App\Http\Controllers\lecturer\ProjectController::class)->prefix('project')->middleware('auth:lecturer')->group(function () {
    Route::get('index' , 'index')->name('lecturer.project.index') ;
    Route::get('index_approved' , 'index_approved')->name('lecturer.project.index_approved') ;
    Route::post('update/{project_id}' , 'update')->name('lecturer.project.update') ;
});

