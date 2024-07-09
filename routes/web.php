<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [App\Http\Controllers\PagesController::class, 'index'])->name('index');
Route::get('aboutUs', [App\Http\Controllers\PagesController::class, 'aboutUs'])->name('aboutUs');
Route::get('causes', [App\Http\Controllers\PagesController::class, 'causes'])->name('causes');
Route::get('cause1', [App\Http\Controllers\PagesController::class, 'cause1'])->name('cause1');
Route::get('volunteer', [App\Http\Controllers\PagesController::class, 'volunteer'])->name('volunteer');
Route::get('becomeAVolunteer', [App\Http\Controllers\PagesController::class, 'becomeAVolunteer'])->name('becomeAVolunteer');
Route::get('faq', [App\Http\Controllers\PagesController::class, 'faq'])->name('faq');
Route::get('contact', [App\Http\Controllers\PagesController::class, 'contact'])->name('contact');
Route::get('donations', [App\Http\Controllers\PagesController::class, 'donations'])->name('donations');
Route::get('payments', [App\Http\Controllers\PagesController::class, 'payments'])->name('payments');
Route::post('donate', [App\Http\Controllers\FormsController::class, 'donate'])->name('donate');



