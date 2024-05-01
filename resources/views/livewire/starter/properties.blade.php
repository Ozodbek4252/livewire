<div>
    <h4>Simple Todo</h4>
    <form wire:submit="add">
        <input type="text" wire:model="todo">

        <button type="submit">Add</button>
    </form>

    <h4 class="mt-3">Live Input</h4>
    <form wire:submit="add">
        <input type="text" wire:model.live="todo">
        <span>Current todo: {{ $todo }}</span>

        <button type="submit">Add</button>
    </form>

    <h4 class="mt-3">Change <em class="text-muted" style="font-size: 12px;">Changes when tab away from input field</em></h4>
    <form wire:submit="add">
        <input type="text" wire:model.change="todo">
        <span>Current todo: {{ $todo }}</span>

        <button type="submit">Add</button>
    </form>

    <ul>
        @foreach ($todos as $todo)
            <li>{{ $todo }}</li>
        @endforeach
    </ul>
</div>
