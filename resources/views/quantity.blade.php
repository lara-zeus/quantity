@php
    $getHeading = $getHeading();
    $getStatePath = $getStatePath();

    $hasInlineLabel = $hasInlineLabel();
    $extraAlpineAttributes = $getExtraAlpineAttributes();
    $id = $getId();
    $isDisabled = $isDisabled();
@endphp
<x-dynamic-component
        :component="$getFieldWrapperView()"
        :field="$field"
        :has-inline-label="$hasInlineLabel"
        ax-load-src="{{ \Filament\Support\Facades\FilamentAsset::getAlpineComponentSrc('quantity','lara-zeus/quantity') }}"
        ax-load
        x-data="quantityPlugin({
            state: '{{ $getStatePath }}',
        })"
>
    <x-slot
            name="label"
            @class([
                'sm:pt-1.5' => $hasInlineLabel,
            ])
    >
        {{ $getLabel() }}
    </x-slot>

    <div x-data="{ state: $wire.$entangle('{{ $getStatePath }}') }">
        <div
                {{ $attributes
                    ->class([
                        '  fi-input-wrp flex rounded-lg shadow-sm transition duration-75
                        ring-1 ring-gray-950/10 dark:ring-white/20 [&:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-600 dark:[&:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-500
                        bg-white dark:bg-white/5 [&:not(:has(.fi-ac-action:focus))]:focus-within:ring-2
                        bg-white border-0 border-gray-200 dark:border-gray-700',
                    ]) }}
                data-hs-input-number
        >
            <div class="w-full flex justify-between items-center gap-x-5">
                <div class="grow">
                    @if($getHeading !== null)
                        <label for="{{ $id }}" class="pt-2 px-2.5 block text-xs text-gray-500 dark:text-gray-400">
                            {{ $getHeading }}
                        </label>
                    @endif
                    <x-filament::input
                            :attributes="
                            \Filament\Support\prepare_inherited_attributes($getExtraInputAttributeBag())
                                ->merge($extraAlpineAttributes, escape: false)
                                ->merge([
                                    'disabled' => $isDisabled,
                                    'id' => $id,
                                    'max' => $getMaxValue(),
                                    'min' => $getMinValue(),
                                    'readonly' => $isReadOnly(),
                                    'required' => $isRequired(),
                                    'type' => 'text',
                                    'data-hs-input-number-input' => '',
                                    $applyStateBindingModifiers('wire:model') => $getStatePath,
                                ], escape: false)
                        "
                    />
                </div>

                @if($isStacked())
                    <div class="flex flex-col -gap-y-px divide-y divide-gray-200 border-s border-gray-200 dark:divide-gray-700 dark:border-gray-700 ">
                        <button type="button" class="w-7 h-8 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-se-lg bg-gray-50 text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:bg-gray-800 dark:text-white dark:hover:bg-gray-700 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" data-hs-input-number-decrement>
                            <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                        </button>
                        <button type="button" class="w-7 h-8 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-ee-lg bg-gray-50 text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:bg-gray-800 dark:text-white dark:hover:bg-gray-700 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" data-hs-input-number-increment>
                            <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="M12 5v14"/></svg>
                        </button>
                    </div>
                @else
                    <div class="px-2 flex justify-end items-center gap-x-1.5">
                        <button type="button" class="w-6 h-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-full border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-gray-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" data-hs-input-number-decrement>
                            <svg class="flex-shrink-0 w-3.5 h-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                        </button>
                        <button type="button" class="w-6 h-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-full border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-gray-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" data-hs-input-number-increment>
                            <svg class="flex-shrink-0 w-3.5 h-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="M12 5v14"/></svg>
                        </button>
                    </div>
                @endif

            </div>
        </div>
    </div>
</x-dynamic-component>
