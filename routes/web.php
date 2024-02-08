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



Route::get('/', [App\Http\Controllers\TravelController::class, 'welcome'])->name('welcome-page');



Route::get('/policy', [App\Http\Controllers\TravelController::class, 'policy'])->name('policy-page');
Route::post('/sujjection/submit', [App\Http\Controllers\TravelController::class, 'sujjectionSubmit'])->name('sujjection-submit');

Route::get('change/lang', [App\Http\Controllers\LanguageController::class, 'switch'])->name('LangChange');


Route::get('/images', [App\Http\Controllers\TravelController::class, 'images'])->name('images-page');