@props([
    'form',
    'width' => 'sm',
])

<div
    x-data
    {{ $attributes->class(['relative inline-block filament-tables-filters']) }}
>
    <x-tables::filters.trigger />

    <div
        x-ref="panel"
        x-cloak
        x-float.placement.bottom-end.flip.offset="{ offset: 8 }"
        x-transition:enter="ease duration-300"
        x-transition:enter-start="opacity-0 -translate-y-2"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="ease duration-300"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 translate-y-2"
        @class([
            'absolute hidden z-10 w-screen pl-12 top-full transition rtl:pl-0 rtl:pr-12',
            match ($width) {
                'xs' => 'max-w-xs',
                'md' => 'max-w-md',
                'lg' => 'max-w-lg',
                'xl' => 'max-w-xl',
                '2xl' => 'max-w-2xl',
                '3xl' => 'max-w-3xl',
                '4xl' => 'max-w-4xl',
                '5xl' => 'max-w-5xl',
                '6xl' => 'max-w-6xl',
                '7xl' => 'max-w-7xl',
                default => 'max-w-sm',
            },
        ])
    >
        <div @class([
            'px-6 py-4 bg-white border border-gray-300 space-y-6 shadow-xl rounded-xl',
            'dark:bg-gray-800 dark:border-gray-700' => config('tables.dark_mode'),
        ])>
            <x-tables::icon-button
                icon="heroicon-o-x"
                x-on:click="$refs.panel.close"
                :label=" __('tables::table.filters.buttons.close.label')"
                color="secondary"
                {{ $attributes->class(['absolute top-3 right-3 rtl:right-auto rtl:left-3']) }}
            />

            <x-tables::filters :form="$form" />
        </div>
    </div>
</div>
