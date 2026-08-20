<?php

use App\Livewire\Events\CreateEvent;
use App\Livewire\Events\EditEvent;
use App\Livewire\Events\ListEvents;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
    Route::livewire('events', ListEvents::class)->name('events.index');
    Route::livewire('events/create', CreateEvent::class)->name('events.create');
    Route::livewire('events/{event}/edit', EditEvent::class)->name('events.edit');
});

require __DIR__.'/settings.php';
