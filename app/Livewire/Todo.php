<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Todo List')]
class Todo extends Component
{
    public $todos = [
        'Take out the trash',
        'Walk the dog',
        'Finish the project',
    ];

    public $newTodo = '';

    public function addTodo()
    {
        $this->todos[] = $this->newTodo;
        $this->reset('newTodo');
    }

    public function render()
    {
        return view('livewire.todo');
    }
}
