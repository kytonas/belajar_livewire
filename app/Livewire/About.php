<?php

namespace App\Livewire;

use Livewire\Attribute\Title;
use Livewire\Component;

// #[Title('About')]
class About extends Component
{
    public function render()
    {
        
        return view('livewire.about')->title('About');
    }
}
