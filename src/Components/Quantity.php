<?php

namespace LaraZeus\Quantity\Components;

use Filament\Forms\Components\Concerns\HasName;
use Filament\Forms\Components\TextInput;

class Quantity extends TextInput
{
    use HasName;

    public string $actionIcon = 'heroicon-o-qr-code';

    protected string $view = 'zeus-quantity::quantity';

    public function actionIcon(string $icon): static
    {
        $this->actionIcon = $icon;

        return $this;
    }

    public function getActionIcon(): string
    {
        return $this->actionIcon;
    }
}
