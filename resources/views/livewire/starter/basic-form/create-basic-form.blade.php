<div>
    <form wire:submit="save" class="d-flex flex-column w-50">
        <div class="mb-2" style="display: grid;">
            <lable>Title</lable>
            <input wire:model="title" type="text">
            @error('title')
                <em class="text-danger">{{ $message }}</em>
            @enderror
        </div>
        <div class="mb-2" style="display: grid;">
            <lable>Content</lable>
            <textarea wire:model="content"></textarea>
            @error('content')
                <em class="text-danger">{{ $message }}</em>
            @enderror
        </div>
        <button type="submit" class="w-25">Save</button>
    </form>

</div>
