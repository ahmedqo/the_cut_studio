<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/profile/patch', [ProfileController::class, 'profile_view'])->name('views.profile.patch');
Route::get('/password/patch', [ProfileController::class, 'password_view'])->name('views.password.patch');

Route::post('/profile/patch', [ProfileController::class, 'profile_action'])->name('actions.profile.patch');
Route::post('/password/patch', [ProfileController::class, 'password_action'])->name('actions.password.patch');
