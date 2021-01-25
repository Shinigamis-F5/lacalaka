<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PartyController;

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


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/venue-profile', function () {
    return view('dashboard-venue-profile');
})->middleware(['auth'])->name('venue.profile');

Route::get('/party/{party}', [App\Http\Controllers\FrontController::class, 'show'])->name('party.details');

require __DIR__ .'/auth.php';
