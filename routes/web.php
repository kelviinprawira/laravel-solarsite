<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::middleware('auth')->group(function () {
    Route::get('/home', \App\Livewire\Home::class)->name('home');
    Route::get('/profile', \App\Livewire\Auth\Profile::class)->name('profile');
    Route::get('/solar', \App\Livewire\Solar\Index::class)->name('solar');
    Route::get('/solar/create', \App\Livewire\Solar\Create::class)->name('solar.create');

});


Route::middleware('guest')->group(function () {
    Route::get('/login', \App\Livewire\Auth\Login::class)->name('login');
    Route::get('/register', \App\Livewire\Auth\Register::class)->name('register');
});
