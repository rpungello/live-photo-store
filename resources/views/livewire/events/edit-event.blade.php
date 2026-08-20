<div class="space-y-4">
    <flux:breadcrumbs>
        <flux:breadcrumbs.item :href="route('events.index')">{{ __('Events') }}</flux:breadcrumbs.item>
        <flux:breadcrumbs.item>{{ __('Edit') }}</flux:breadcrumbs.item>
    </flux:breadcrumbs>

    <form wire:submit.prevent="submit" class="space-y-4">
        <flux:input wire:model="name" :label="__('Name')" />

        <flux:date-picker wire:model="date" :label="__('Date')" />

        <flux:button variant="primary" type="submit">
            {{ __('Save') }}
        </flux:button>
    </form>
</div>
