<?php

namespace App\Livewire\Posts;

use Livewire\Attribute\Title;
use Livewire\Component;

#[Title('Posts')]
class Index extends Component
{
    #[Title('Posts')]
    #[\Livewire\Attributes\On('postCreated')]
    
    public function updateList($post)
    {
        
    }
    public function render()
    {
        
        return view('livewire.posts.index', [
            'posts' => \App\Models\Post::query()->latest()->get(),
        ]);
    }
}
