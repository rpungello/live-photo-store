<?php

namespace App\Livewire\Events;

use App\Models\Event;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Computed;
use Livewire\Component;

class ListEvents extends Component
{
    public function render(): View
    {
        return view('livewire.events.list-events');
    }

    /**
     * @return LengthAwarePaginator<int, Event>
     */
    #[Computed]
    public function events(): LengthAwarePaginator
    {
        return Event::orderByDesc('date')->paginate();
    }
}
