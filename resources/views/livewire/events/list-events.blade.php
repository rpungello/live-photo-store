<div class="space-y-4">
    <flux:breadcrumbs>
        <flux:breadcrumbs.item>{{ __('Events') }}</flux:breadcrumbs.item>
    </flux:breadcrumbs>

    <flux:table :paginate="$this->events">
        <flux:table.columns>
            <flux:table.column>{{ __('Name') }}</flux:table.column>
            <flux:table.column>{{ __('Date') }}</flux:table.column>
        </flux:table.columns>
        <flux:table.rows>
            @foreach($this->events as $event)
                <flux:table.row>
                    <flux:table.cell>{{ $event->name }}</flux:table.cell>
                    <flux:table.cell>{{ $event->date->format('F j, Y') }}</flux:table.cell>
                </flux:table.row>
            @endforeach
        </flux:table.rows>
    </flux:table>

    <flux:button variant="primary" :href="route('events.create')">
        {{ __('Create Event') }}
    </flux:button>
</div>
