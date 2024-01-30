---
title: Installation
weight: 3
---

## Installation

Install @zeus Quantity by running the following commands in your Laravel project directory.

```bash
composer require lara-zeus/quantity
```

## Usage:

use it in your resource

```php
\LaraZeus\Quantity\Components\Quantity::make('amount_number')
    ->heading('select quantity')
    ->default(3)
    ->maxValue(10)
    ->minValue(2)
    ->stacked()
    
    ->label('select quantity')
    ->required()
    ->inlineLabel()
    ->disabled()
    ->hiddenLabel()
    ->helperText('between 2 and 10')
    ->columnSpan(1)
    ,
```

