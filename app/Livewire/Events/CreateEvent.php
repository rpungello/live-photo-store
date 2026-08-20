<?php

namespace App\Livewire\Events;

use App\Models\Event;
use Carbon\CarbonInterface;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CreateEvent extends Component
{
    #[Validate(['required', 'string'])]
    public string $name = '';

    #[Validate(['required', 'after:today'])]
    public CarbonInterface $date;

    public function mount(): void
    {
        $this->date = now();
    }

    public function render(): View
    {
        return view('livewire.events.create-event');
    }

    public function submit(): void
    {
        $this->authorize('create', Event::class);
        Event::create($this->validate());
        $this->redirectRoute('events.index');
    }
}
