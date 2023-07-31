<?php

namespace App\Livewire;

use Livewire\Component;

class Nav extends Component
{
    public function render()
    {
        return <<<'HTML'
        <div>
           <a href="/" wire:navigate>Page 1</a>
           <a href="/page-2" wire:navigate>Page 2</a>
        </div>
        HTML;
    }
}
