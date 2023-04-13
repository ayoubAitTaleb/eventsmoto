<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClubController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\RiderController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\DashboardController;
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
    return redirect('http://127.0.0.1:8000/login');
});
Route::resource('companies', CompanyController::class);
Route::resource('validation', ValidationController::class);
Route::resource('riders', RiderController::class);
Route::resource('medias', MediaController::class);
Route::resource('clubs', ClubController::class);
Route::resource('users', UserController::class);
Route::resource('login', UserController::class);
Route::get('events/myevents', [EventController::class, 'myEvents'])->name('events.myevents');
Route::resource('events', EventController::class);
Route::resource('posts', PostController::class);
Route::resource('dashboard', DashboardController::class);
Route::resource('members', MemberController::class);
Route::resource('messages', MessageController::class);

Route::get('send-mail', [MailController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
