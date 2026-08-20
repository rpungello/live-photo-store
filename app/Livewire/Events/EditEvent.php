<?php

namespace App\Livewire\Events;

use App\Models\Event;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Validate;
use Livewire\Component;

class EditEvent extends Component
{
    public Event $event;

    #[Validate(['required', 'string'])]
    public string $name = '';

    #[Validate(['required', 'date'])]
    public string $date = '';

    public function mount(Event $event): void
    {
        $this->event = $event;
        $this->name = $event->name;
        $this->date = $event->date->toDateString();
    }

    public function render(): View
    {
        return view('livewire.events.edit-event');
    }

    public function submit(): void
    {
        $this->authorize('update', $this->event);
        $this->event->update($this->validate());
        $this->redirectRoute('events.index');
    }
}
