<div>
    <h1 class="text-xl mb-4 font-bold">Posts:</h1>

    <table class="w-[60%]">
        <thead>
            <tr class="border-b">
                <th>Title</th>
                <th>Content</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr wire:key="{{ $post->id }}" class="border-b">
                    <td>{{ $post->title }}</td>
                    <td>{{ str($post->content)->limit(45) }}</td>
                    <td>
                        <button type="button" class="btn !bg-red-500" wire:click="deletePost({{ $post->id }})"
                            wire:confirm="Are you sure you want to delete this post?">
                            Delete
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
