<?php

namespace App\Livewire;

use Livewire\Component;

class Page2Component extends Component
{
    public function render()
    {
        return <<<'HTML'
        <div>
            <div>
                <a href="/" wire:navigate>Page 1</a>
                <a href="/page-2" wire:navigate>Page 2</a>
            </div>
            <p>Welcome to page 2!</p>
        </div>
        HTML;
    }
}
