<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::middleware('auth')->group(function () {
    Route::view('settings', 'settings')->name('settings');
    Route::get('usuarios', \App\Livewire\Usuarios\Index::class)->name('usuarios.index');
    Route::get('inventario', \App\Livewire\Inventario\Index::class)->name('inventario.index');
    Route::get('inventario/create', \App\Livewire\Inventario\Create::class)->name('inventario.create');
    Route::get('inventario/show/{computador}', \App\Livewire\Inventario\Show::class)->name('inventario.show');
    Route::get('inventario/edit/{computador}', \App\Livewire\Inventario\Edit::class)->name('inventario.edit');
});

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
