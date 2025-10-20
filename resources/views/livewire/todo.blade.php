<div>
    <form wire:submit="addTodo" class="mb-4">
        <input type="text" wire:model="newTodo" class="input" />
        <button type="submit" class="btn">Add Todo</button>
    </form>

    <ul class="pl-4">
        @foreach ($todos as $todo)
            <li class="py-2 text-lg list-disc">{{ $todo }}</li>
        @endforeach
    </ul>
</div>
