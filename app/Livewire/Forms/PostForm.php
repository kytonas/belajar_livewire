<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Attributes\Rule;
use App\Models\User;
use Livewire\Form;

class PostForm extends Form
{
    #[Rule(['required'])]
    public string $title = '';
    #[Rule(['required'])]
    public string $body = '';

     public function store()
    {
        $user = User::find(10);


        $user->posts()->create(
            $this->validate()
        );

        $this->reset();
    }
}
