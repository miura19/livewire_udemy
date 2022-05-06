<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class PostList extends Component
{
    public $word;
    public function render()
    {
        return view('livewire.post-list',[
            'posts' => Post::get(),
        ]);
    }
}
