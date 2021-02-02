<?php

use App\Models\User;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VenueController;
use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PartyController;
use App\Http\Controllers\WhatsappApiController;

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


Route::resource('parties', PartyController::class);

Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::resource('user', UserController::class)->middleware('auth');
Route::resource('venue', VenueController::class)->middleware('auth');
// Route::resource('party', PartyController::class);

Route::get('/test', [WhatsappApiController::class, 'sendMsg'])->name('test');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/profile/{user}', [FrontController::class, 'showInDetailFront'])->name('user.profile');
Route::get('/party/{party}', [App\Http\Controllers\FrontController::class, 'show'])->name('party.details');

require __DIR__ .'/auth.php';
