<tr @class(['archived' => $post->is_archived])>
    <td>{{ $post->title }}</td>
    <td>{{ str($post->content)->limit(45) }}</td>
    <td>
        <div class="flex gap-2 w-[170px] items-center justify-center">
            @if ($post->is_archived)
                <button type="button" wire:click="unarchive" class="btn"
                    wire:confirm="Are you sure you want to unarchive this post?">
                    Unarchive
                </button>
            @else
                <button type="button" wire:click="archive" class="btn"
                    wire:confirm="Are you sure you want to archive this post?">
                    Archive
                </button>
            @endif
            <button type="button" class="btn !bg-red-500" wire:click="$parent.delete({{ $post->id }})"
                wire:confirm="Are you sure you want to delete this post?">
                Delete
            </button>
        </div>
    </td>
</tr@class>
