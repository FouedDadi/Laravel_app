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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get('/apnee', [App\Http\Controllers\API\AthleteController::class, 'Apnee'])->name('apnee');
    Route::get('/add_apnee', [App\Http\Controllers\API\AthleteController::class, 'create'])->name('apnee.create');
    Route::post('/add_apnee', [App\Http\Controllers\API\AthleteController::class, 'store'])->name('apnee.store');


    Route::get('/equipe', [App\Http\Controllers\API\AthleteController::class, 'Equipe'])->name('equipe');
    Route::get('/add_equipe', [App\Http\Controllers\API\AthleteController::class, 'createEquipe'])->name('equipe.create');
    Route::post('/add_equipe', [App\Http\Controllers\API\AthleteController::class, 'storeEquipe'])->name('equipe.store');
    Route::get('/equipe/{nr_equipe}/edit', [App\Http\Controllers\API\AthleteController::class, 'editEquipe'])->name('equipe.edit');
    Route::put('/equipe/{nr_equipe}', [App\Http\Controllers\API\AthleteController::class, 'updateEquipe'])->name('equipe.update');
    Route::delete('/equipe/{nr_equipe}', [App\Http\Controllers\API\AthleteController::class, 'destroyEquipe'])->name('equipe.destroy');
});