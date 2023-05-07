<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/ecr', function () {
    return view('ecr');
});
Route::get('/adviser', function () {
    return view('adviser');
});
Route::get('/sf1', function () {
    return view('sf1');
});
Route::get('/sf9', function () {
    return view('sf9');
});
Route::get('/sf10', function () {
    return view('sf10');
});
Route::get('/subject', function () {
    return view('subject');
});
Route::get('/conso', function () {
    return view('conso');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/adviser',function(){
    return view('adviser');
})->name('adviser')->middleware('adviser');

Route::get('/teacher',function(){
    return view('teacher');
})->name('teacher')->middleware('teacher');

Route::get('/principal',function(){
    return view('principal');
})->name('principal')->middleware('principal');

Route::get('/chairman',function(){
    return view('chairman');
})->name('chairman')->middleware('chairman');

