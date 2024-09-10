<?php

namespace App\Livewire\Posts;

use Livewire\Attribute\Title;
use Livewire\Component;

#[Title('Posts')]
class Index extends Component
{
    public function render()
    {
        
        return view('livewire.posts.index');
    }
}
