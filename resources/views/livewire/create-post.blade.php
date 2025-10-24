<div>
    <h2 class="text-xl mb-4 font-bold">Create Post:</h2>

    <form class="flex flex-col space-y-4 w-[400px]" wire:submit="save">
        <label class="flex flex-col space-y-1">
            <span>Title</span>
            <input type="text" class="input" wire:model="title" />
            @error('title')
                <em class="text-red-500">{{ $message }}</em>
            @enderror
        </label>

        <label class="flex flex-col space-y-1">
            <span>Content</span>
            <textarea class="input" rows="5" wire:model="content"></textarea>
            <small>Words: <span x-text="$wire.content.split(' ').filter(word => word.length > 0).length"></span></small>
            @error('content')
                <em class="text-red-500">{{ $message }}</em>
            @enderror
        </label>

        <button type="submit" class="btn mt-4">Save</button>
    </form>
</div>
