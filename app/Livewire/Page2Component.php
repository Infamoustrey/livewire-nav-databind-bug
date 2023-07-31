<?php

namespace App\Livewire;

use Livewire\Component;

class Page2Component extends Component
{
    public function render()
    {
        return <<<'HTML'
        <div>
            <livewire:nav />
            <p>Welcome to page 2!</p>
        </div>
        HTML;
    }
}
