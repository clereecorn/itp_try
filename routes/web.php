<?php

use Illuminate\Support\Facades\Route;

// doesn't work?
//use App\Http\Controllers\RegFormsController;

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

// main             ------------------------------------------------------------------
Route::get('/', function () {
    return view('welcome');
});

// used Laravel's default Log-In
Route::get('/login',function(){
    return view('auth.login');
});

Route::get('/enrollment',function(){
    return view('enrollment');
});

// registration       ------------------------------------------------------------------
//Route::get('registration/0','RegFormsController@getInstructions');
Route::get('registration/0',[App\Http\Controllers\RegFormsController::class,'getInstructions'])->name('regInstructions');

//Route::get('registration/1','RegFormsController@getPersonal');
//Route::post('registration/1','RegFormsController@postPersonal');
Route::get('registration/1',[App\Http\Controllers\RegFormsController::class,'getPersonal'])->name('getRegPers');
Route::post('registration/1',[App\Http\Controllers\RegFormsController::class,'postPersonal'])->name('postRegPers');

//Route::get('registration/2','RegFormsController@getDocuments');
//Route::post('registration/2','RegFormsController@postDocuments');
Route::get('registration/2',[App\Http\Controllers\RegFormsController::class,'getDocuments'])->name('getRegDocs');
Route::post('registration/2',[App\Http\Controllers\RegFormsController::class,'postDocuments'])->name('postRegDocs');

//Route::get('registration/3','RegFormsController@getConfirmation');
//Route::post('registration/submit','RegFormsController@postConfirmation');
Route::get('registration/3',[App\Http\Controllers\RegFormsController::class,'getConfirmation'])->name('getRegConf');
Route::post('registration/submit',[App\Http\Controllers\RegFormsController::class,'postConfirmation'])->name('postRegConf');

// student account  ------------------------------------------------------------------

Route::get('/student/change_pass', function () {
    return view('stdAccount.stdChangePass');
});

// Auth/Students            --------------------------------------------------------------------
Auth::routes();

Route::get('/regTemp',function(){
    return view('auth.register');
})->name('regTemp');

Route::get('/student', [App\Http\Controllers\StudentPagesController::class, 'index']);

Route::get('/student/documents', [App\Http\Controllers\StudentPagesController::class, 'documents'])->name('stDocs');

Route::get('/student/enrollment', [App\Http\Controllers\StudentPagesController::class, 'enrollment'])->name('stEnroll');