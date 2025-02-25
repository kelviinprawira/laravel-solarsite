<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::middleware('auth')->group(function () {
    Route::get('/solar', \App\Livewire\Solar\Index::class)->name('solar');
    Route::get('/profile', \App\Livewire\Auth\Profile::class)->name('profile');
    Route::get('/solar/create', \App\Livewire\Solar\Create::class)->name('solar.create');
    Route::get('/solar/master/edit', \App\Livewire\Master\SolarActions::class)->name('master.edit');
    Route::get('/master/solar', \App\Livewire\Master\SolarIndex::class)->name('master.index');

});


Route::middleware('guest')->group(function () {
    Route::get('/login', \App\Livewire\Auth\Login::class)->name('login');
});
