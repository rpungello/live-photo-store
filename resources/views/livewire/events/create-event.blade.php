<div class="space-y-4">
    <flux:breadcrumbs>
        <flux:breadcrumbs.item>{{ __('Events') }}</flux:breadcrumbs.item>
        <flux:breadcrumbs.item>{{ __('Create New') }}</flux:breadcrumbs.item>
    </flux:breadcrumbs>

    <form wire:submit.prevent="submit" class="space-y-4">
        <flux:input wire:model="name" :label="__('Name')" />

        <flux:date-picker wire:model="date" :label="__('Date')" />

        <flux:button variant="primary" type="submit">
            {{ __('Create') }}
        </flux:button>
    </form>
</div>
