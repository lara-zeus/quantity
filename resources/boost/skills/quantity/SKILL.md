---
name: zeus-quantity
description: Use when adding a numeric quantity input with increment and decrement buttons in Filament forms using lara-zeus/quantity.
---

# Lara Zeus Quantity

## Overview & Requirements
`lara-zeus/quantity` provides the `Quantity` form input component, extending Filament's `TextInput` (`->numeric()`) with inline or stacked `+` / `-` buttons.
- **PHP**: `^8.2`
- **Filament**: `^5.0`
- **Package Name**: `lara-zeus/quantity` (Service Provider: `LaraZeus\Quantity\QuantityServiceProvider`)

## Installation
```bash
composer require lara-zeus/quantity
```

## Configuration & Migrations
No migrations or config files are required.

Add the package view path to your Filament custom theme CSS so Tailwind compiles the button utilities:
```css
@source '../../../../vendor/lara-zeus/quantity/resources/views/**/*.blade.php';
```

## Filament Panel Registration
No panel plugin registration is required. Use `LaraZeus\Quantity\Components\Quantity` directly in your Filament form schema.

## Core Usage & Examples
```php
use LaraZeus\Quantity\Components\Quantity;

Quantity::make('amount_number')
    ->heading('Select quantity') // optional inner heading inside the input box
    ->default(3)
    ->minValue(2)
    ->maxValue(10)
    ->steps(2) // increment/decrement step (default: 1)
    ->stacked() // vertical + / - buttons on the right (default: horizontal round buttons)
    ->label('Quantity')
    ->required()
    ->helperText('Between 2 and 10');
```

Because `Quantity` extends `Filament\Forms\Components\TextInput`, standard methods like `->live(debounce: 500)`, `->prefix()`, `->suffix()`, `->inlineLabel()`, `->disabled()`, and `->readOnly()` work as expected.

## Common Pitfalls / Anti-Patterns
- **Calling `->step()` instead of `->steps()`**: The package's Alpine increment/decrement logic uses `steps(int|float|Closure $interval)`; `->step()` only sets the HTML attribute on the underlying input.
- **Negative values without `->minValue()`**: The Blade view defaults Alpine's `minValue` to `0` (`{{ $getMinValue ?? 0 }}`) and `maxValue` to `1000000`, so decrementing below `0` is blocked unless `->minValue(...)` is explicitly set to a negative value.
- **Heading vs Label**: `->heading(...)` renders a secondary `<label>` inside the input wrapper above the number; `->label(...)` controls the outer Filament field label.
