# Lara Zeus Quantity (`lara-zeus/quantity`)

FilamentPHP numeric input component with user-friendly Alpine increment/decrement controls.

## Key Classes
- **Form Component**: `LaraZeus\Quantity\Components\Quantity` (extends `Filament\Forms\Components\TextInput`)
- **Facade**: `LaraZeus\Quantity\Facades\Quantity`
- **Service Provider**: `LaraZeus\Quantity\QuantityServiceProvider` (`$name = 'zeus-quantity'`)

## Rules & Anti-Patterns
- **No Filament Panel Plugin**: Do not register a panel plugin; use `LaraZeus\Quantity\Components\Quantity` directly in Filament form schemas.
- **Use `->steps()`, not `->step()`**: The Alpine increment/decrement buttons read `$getSteps()` configured via `->steps(int|float|Closure $interval)` (default `1`).
- **Default bounds in Alpine**: If `->minValue()` or `->maxValue()` is omitted, the frontend stepper defaults `minValue` to `0` and `maxValue` to `1000000`. Set `->minValue(...)` explicitly if negative numbers are allowed.
- **Theme CSS**: Add `@source '../../../../vendor/lara-zeus/quantity/resources/views/**/*.blade.php';` to your Filament custom theme CSS so button styles compile cleanly.
