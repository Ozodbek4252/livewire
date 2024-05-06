<div>
    <form wire:submit="add" class="d-flex flex-column w-25">
        <input type="text" wire:model="name" class="py-1 px-3 mt-2" placeholder="Enter name...">
        @error('name')
            <span class="text-danger text-xs">{{ $message }}</span>
        @enderror

        <input type="text" wire:model="email" class="py-1 px-3 mt-2" placeholder="Enter email...">
        @error('email')
            <span class="text-danger text-xs">{{ $message }}</span>
        @enderror

        <input type="password" wire:model="password" class="py-1 px-3 mt-2" placeholder="Enter password...">
        @error('password')
            <span class="text-danger text-xs">{{ $message }}</span>
        @enderror

        <button type="submit" class="w-25 mt-2">Add</button>
    </form>

    <hr>

    @foreach ($users as $user)
        <h3>{{ $user->name }}</h3>
    @endforeach
</div>
