<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [App\Http\Controllers\PagesController::class, 'index'])->name('index');
Route::get('aboutUs', [App\Http\Controllers\PagesController::class, 'aboutUs'])->name('aboutUs');
Route::get('causes', [App\Http\Controllers\PagesController::class, 'causes'])->name('causes');
Route::get('becomeAVolunteer', [App\Http\Controllers\PagesController::class, 'becomeAVolunteer'])->name('becomeAVolunteer');
Route::get('contact', [App\Http\Controllers\PagesController::class, 'contact'])->name('contact');
Route::get('donations', [App\Http\Controllers\PagesController::class, 'donations'])->name('donations');
Route::get('payments', [App\Http\Controllers\PagesController::class, 'payments'])->name('payments');
Route::get('cause1', [App\Http\Controllers\PagesController::class, 'cause1'])->name('cause1');
Route::get('cause2', [App\Http\Controllers\PagesController::class, 'cause2'])->name('cause2');
Route::get('cause3', [App\Http\Controllers\PagesController::class, 'cause3'])->name('cause3');
Route::get('cause4', [App\Http\Controllers\PagesController::class, 'cause4'])->name('cause4');
Route::get('cause5', [App\Http\Controllers\PagesController::class, 'cause5'])->name('cause5');
Route::get('cause6', [App\Http\Controllers\PagesController::class, 'cause6'])->name('cause6');
Route::post('volunteer', [App\Http\Controllers\FormsController::class, 'volunteer'])->name('volunteer');
Route::post('donate', [App\Http\Controllers\FormsController::class, 'donate'])->name('donate');
Route::get('error', [App\Http\Controllers\PagesController::class, 'error'])->name('error');
Route::get('paymentSuccessMail', [App\Http\Controllers\PagesController::class, 'paymentSuccessMail'])->name('paymentSuccessMail');



