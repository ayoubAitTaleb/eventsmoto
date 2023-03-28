<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClubController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\RiderController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ValidationController;

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
Route::resource('companies', CompanyController::class);
Route::resource('validation', ValidationController::class);
Route::resource('riders', RiderController::class);
Route::resource('medias', MediaController::class);
Route::resource('clubs', ClubController::class);
Route::resource('users', UserController::class);
Route::resource('login', UserController::class);
Route::resource('events', EventController::class);
Route::resource('posts', PostController::class);
Route::get('login', [LoginController::class, 'authenticate']);
Route::get('send-mail', [MailController::class, 'index']);
