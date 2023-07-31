<?php

namespace App\Livewire;

use Livewire\Component;

class Page1Component extends Component
{
    public $value = '';

    public function render()
    {
        return <<<'HTML'
        <div>
            <livewire:nav />
            <p>Welcome to page 1!</p>
            <p>Value: <span x-text="$wire.value"></span></p>
            <livewire:child-component wire:model="value" />
        </div>
        HTML;
    }
}
