<?php

namespace LaraZeus\Quantity\Components;

use Closure;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Concerns\HasName;

class Quantity extends TextInput
{
    use HasName;

    protected int | float | Closure $steps = 1;

    public ?string $heading = null;

    public bool $stacked = false;

    protected string $view = 'zeus-quantity::quantity';

    protected function setUp(): void
    {
        parent::setUp();

        $this->numeric();
    }

    public function heading(?string $heading): static
    {
        $this->heading = $heading;

        return $this;
    }

    public function getHeading(): ?string
    {
        return $this->heading;
    }

    public function stacked(bool $stacked = true): static
    {
        $this->stacked = $stacked;

        return $this;
    }

    public function isStacked(): bool
    {
        return $this->stacked;
    }

    public function steps(int | float | Closure $interval): static
    {
        $this->steps = $interval;

        return $this;
    }

    public function getSteps(): int | float | Closure
    {
        return $this->evaluate($this->steps);
    }
}
