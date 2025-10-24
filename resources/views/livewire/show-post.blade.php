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
                <livewire:post-row :$post :key="$post->id" />
            @endforeach
        </tbody>
    </table>
</div>
