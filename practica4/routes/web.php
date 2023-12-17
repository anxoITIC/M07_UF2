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

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\SignController;

// Rutes per a les accions relacionades amb usuari
Route::prefix('usuari')->group(function () {

    Route::get('/signin', [SignController::class, 'showSignIn'])->name('signin');
    Route::get('/signup', [SignController::class, 'showSignUp'])->name('signup');
});