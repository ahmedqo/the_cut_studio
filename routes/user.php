<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/users', [UserController::class, 'index_view'])->name('views.users.index');
Route::get('/users/store', [UserController::class, 'store_view'])->name('views.users.store');
Route::get('/users/{id}/patch', [UserController::class, 'patch_view'])->name('views.users.patch');

Route::post('/users/store', [UserController::class, 'store_action'])->name('actions.users.store');
Route::post('/users/{id}/patch', [UserController::class, 'patch_action'])->name('actions.users.patch');
Route::post('/users/{id}/clear', [UserController::class, 'clear_action'])->name('actions.users.clear');
