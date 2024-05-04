<tr @class(['bg-secondary' => $post->is_archived])>
    <td>{{ $post->title }}</td>
    <td>{{ str($post->content)->words(8) }}</td>
    <td>
        <button
            type="button"
            wire:confirm="Are you sure you want to archive this post?"
            @if($post->is_archived)
                wire:click="unarchive"
                class="btn btn-light"
            @else
                wire:click="archive"
                class="btn btn-secondary"
            @endif
            >
            @if($post->is_archived)
                Unarchive
            @else
                Archive
            @endif
        </button>
        <button type="button" wire:click="$parent.delete({{ $post->id }})"
            wire:confirm="Are you sure you want to delete this post?" class="btn btn-danger">
            Delete
        </button>
    </td>
</tr>
