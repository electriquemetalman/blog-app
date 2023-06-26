<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post as Posts;

class PostList extends Component
{
    public $posts;
    public function render()
    {
        $this->posts = Posts::all();
        return view('livewire.post-list');
    }
}
