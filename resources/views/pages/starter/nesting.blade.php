@extends('layout')
@section('content')
    @include('includes.sidebar')
    <div class="col py-3">

        <h1>Nesting Page</h1>

        <div class="mt-4">
            <livewire:starter.nesting.nesting />
        </div>

    </div>
@endsection
