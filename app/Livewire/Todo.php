<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Todo List')]
class Todo extends Component
{
    public $todos = [];

    public $newTodo = '';

    public function mount()
    {
        $this->todos = ['Learn Livewire', 'Build a Todo App'];
    }

    public function updatedNewTodo($value) {
        $this->newTodo = strtoupper($value);
    }

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
