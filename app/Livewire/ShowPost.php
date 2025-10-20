<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Show Posts')]
class ShowPost extends Component
{
    public function deletePost(Post $post)
    {
        $post->delete();
    }

    public function render()
    {
        return view('livewire.show-post', [
            'posts' => Post::all(),
        ]);
    }
}
