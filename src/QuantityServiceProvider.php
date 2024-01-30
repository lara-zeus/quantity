<?php

namespace LaraZeus\Quantity;

use Filament\Support\Assets\AlpineComponent;
use Filament\Support\Facades\FilamentAsset;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class QuantityServiceProvider extends PackageServiceProvider
{
    public static string $name = 'zeus-quantity';

    public function configurePackage(Package $package): void
    {
        $package
            ->name(static::$name)
            ->hasViews();
    }

    /*public function packageBooted(): void
    {
        FilamentAsset::register([
            AlpineComponent::make('quantity', __DIR__ . '/../resources/dist/quantity.js'),
        ], 'lara-zeus/quantity');
    }*/
}
