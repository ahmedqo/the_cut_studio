<?php

use Illuminate\Support\Facades\Route;
use App\Models\Type;

Route::get('/', function () {
    $types = Type::orderBy('id', 'DESC')->get();
    return view('guest.index', compact('types'));
})->name('views.guest.index');

Route::get('/consulting', function () {
    $types = Type::orderBy('id', 'DESC')->get();
    return view('guest.consult', compact('types'));
})->name('views.guest.consult');
