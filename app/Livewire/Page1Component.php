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
            <div>
                <a href="/" wire:navigate>Page 1</a>
                <a href="/page-2" wire:navigate>Page 2</a>
            </div>
            <p>Welcome to page 1!</p>
            <p>Value: <span x-text="$wire.value"></span></p>
            <livewire:child-component wire:model="value" />
        </div>
        HTML;
    }
}
