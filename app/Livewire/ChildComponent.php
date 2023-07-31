<?php

namespace App\Livewire;

use Livewire\Attributes\Modelable;
use Livewire\Component;

class ChildComponent extends Component
{
    #[Modelable]
    public string $value;

    public function render()
    {
        return <<<'HTML'
        <div>
            <input type="text" wire:model="value">
        </div>
        HTML;
    }
}
