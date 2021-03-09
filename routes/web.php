<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\MessageController;

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

App::setLocale('es');

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');

Route::resource('projects', ProjectController::class)->names('projects')->parameters(['project' => 'project']);

Route::view('/contact', 'contact')->name('contact');
Route::post('contact', [MessageController::class, 'store'])->name('messages.store');
Auth::routes();