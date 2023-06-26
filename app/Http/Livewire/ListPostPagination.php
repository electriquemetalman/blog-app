<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Post;

class ListPostPagination extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.list-post-pagination', [
            'posts' => Post::orderBy('created_at', 'desc')->paginate(6)
        ]);
    }
}
