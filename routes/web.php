<?php

use Illuminate\Support\Facades\Route;

Route::get('/language/{locale}', function ($locale) {
    app()->setlocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
})->name('actions.language.index');

Route::group(['prefix' => '/admin', 'middleware' => ['auth']], function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('views.dashboard.index');

    require __DIR__ . '/profile.php';
    require __DIR__ . '/user.php';
    require __DIR__ . '/type.php';
});

require __DIR__ . '/auth.php';
require __DIR__ . '/guest.php';
require __DIR__ . '/consult.php';
require __DIR__ . '/project.php';
