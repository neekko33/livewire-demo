<div>
    <form wire:submit="addTodo">
        <input type="text" wire:model="newTodo" />
        <button type="submit">Add Todo</button>
    </form>

    <ul>
        @foreach ($todos as $todo)
            <li>{{ $todo }}</li>
        @endforeach
    </ul>
</div>
