<?php

use App\Livewire\Events\CreateEvent;
use App\Livewire\Events\ListEvents;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
    Route::livewire('events', ListEvents::class)->name('events.index');
    Route::livewire('events/create', CreateEvent::class)->name('events.create');
});

require __DIR__.'/settings.php';
