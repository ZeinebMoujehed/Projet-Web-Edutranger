<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AproposController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ActualiteController;
use App\Http\Controllers\AuthController;

/*
|---------------------------------------------------------------------------
| Web Routes
|---------------------------------------------------------------------------
|
| Here is where you can register web routes for your application.
| All of them will be assigned to the "web" middleware group.
| Make something great!
|
*/

Route::get('/', function () {
    return view('accueil');
});
Route::get('/contact', [ContactController::class, 'afficherFormulaire'])->name('contact.form');
Route::post('/contact', [ContactController::class, 'verifier'])->name('contact.verifier');
Route::get('/services', [ServicesController::class, 'service'])->name('services');
Route::get('/apropos', [AproposController::class, 'apropos'])->name('apropos');
Route::get('/actualities', [ActualiteController::class, 'index'])->name('actualities');

Route::resource('actuality', ActualiteController::class)->middleware('auth', 'admin');

Route::get('/actuality/pays/{pays}', [ActualiteController::class, 'filterByCountry'])->name('actuality.pays');

Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login'])->name('login.submit');


Route::post('logout', [AuthController::class, 'logout'])->name('logout');

// Middleware pour vérifier si l'utilisateur est authentifié en tant qu'admin

Route::middleware(['auth', 'admin'])->group(function () {
    Route::resource('actuality', ActualiteController::class)->names([
        'index' => 'actuality.index',  // Page principale des actualités (admin)
    ]);});

