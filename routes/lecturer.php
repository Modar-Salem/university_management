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

    Route::get('logout', 'logout')->name('lecturer.logout')->middleware(['auth:lecturer']);

    Route::get('/dashboard' , 'dashboard')->name('lecturer.dashboard')->middleware(['auth:lecturer']);
    Route::get('profile' , 'profile')->name('lecturer.profile')->middleware(['auth:lecturer']) ;
    Route::post('profile' , 'updateProfile')->name('lecturer.profile.update')->middleware(['auth:lecturer']) ;

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


Route::controller(\App\Http\Controllers\lecturer\SubjectController::class)->prefix('subject')->middleware('auth:lecturer')->group(function () {
    Route::get('index' , 'index')->name('lecturer.subject.index') ;
    Route::get('index_details/{id}' , 'index_details')->name('lecturer.subject.index_details') ;
    Route::get('subject_lecture/{id}' , 'lectures')->name('lecturer.subject.lectures') ;
    Route::get('subject_categories/{id}' , 'categories')->name('lecturer.subject.categories') ;


}) ;

Route::controller(\App\Http\Controllers\lecturer\ProgramController::class)->prefix('program')->middleware('auth:lecturer')->group(function () {
    Route::get('index' , 'index')->name('lecturer.program.index') ;
});

Route::controller(\App\Http\Controllers\lecturer\MarkController::class)->prefix('mark')->middleware('auth:lecturer')->group(function () {
    Route::get('index' , 'index')->name('lecturer.mark.index') ;
    Route::get('theoretical_index/{subject_id}' , 'theoretical_index')->name('lecturer.mark.theoretical_index') ;
    Route::get('practical_index/{subject_id}' , 'practical_index')->name('lecturer.mark.practical_index') ;
    Route::post('store',  'store')->name('lecturer.mark.store');

});


Route::controller(\App\Http\Controllers\lecturer\QuizController::class)->prefix('quiz')->middleware('auth:lecturer')->group(function () {
    Route::get('index' , 'index')->name('lecturer.quiz.index') ;
    Route::get('create' , 'create')->name('lecturer.quiz.create') ;
    Route::post('store',  'store')->name('lecturer.quiz.store');

    Route::get('delete/{id}' , 'delete')->name('lecturer.quiz.delete') ;

});


Route::controller(\App\Http\Controllers\lecturer\QuizQuestionController::class)->prefix('quiz_question')->middleware('auth:lecturer')->group(function () {
    Route::post('store/{quiz_id}',  'store')->name('lecturer.quiz_question.store');
});
