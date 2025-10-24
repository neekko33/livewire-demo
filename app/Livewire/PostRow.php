<?php

namespace App\Livewire;

use Livewire\Component;

class PostRow extends Component
{
    public $post;

    public function archive()
    {
        $this->post->archive();
    }

    public function unarchive()
    {
        $this->post->unarchive();
    }
}
