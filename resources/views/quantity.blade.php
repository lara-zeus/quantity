<div
        class="flex flex-col gap-2 items-center justify-center"
        x-ignore
        ax-load-src="{{ \Filament\Support\Facades\FilamentAsset::getAlpineComponentSrc('quantity','lara-zeus/quantity') }}"
        ax-load
        x-data="quantityPlugin({
        state: '{{ $statePath }}',
    })"
>
    Quantity
</div>
