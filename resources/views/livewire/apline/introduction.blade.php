<div>
    <h4>Introduction to Alpine.js</h4>

    {{--  Current Title: <span x-text="$wire.title"></span>
    <input wire:model="title" type="text">  --}}

    <div x-data="title1" class="mb-3 d-grid w-25">
        <button x-on:click="$wire.title1 = ''">Clear Title</button>
        <input wire:model="title1" type="text">
        {{--  <span x-text="$wire.title1"></span>  --}}
    </div>

    <div x-data="title2" class="mb-3 d-grid w-25">
        <h5>Length</h5>
        <input wire:model.live="title2" type="text">
        <span x-text="$wire.title2.length"></span>
    </div>

    <div x-data="title3" class="mb-3 d-grid w-25">
        <h5>To UpperCate</h5>
        <input wire:model.live="title3" type="text">
        <input wire:model.live="content3" type="text">
        <span x-text="$wire.title3.toUpperCase() + $wire.content3"></span>
    </div>
</div>
