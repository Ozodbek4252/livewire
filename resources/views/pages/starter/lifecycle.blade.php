@extends('layout')
@section('content')
    @include('includes.sidebar')
    <div class="col py-3">

        <h1>Lifecycle Page</h1>

        <div class="mt-4">
            <livewire:starter.lifecycle />
        </div>

    </div>
@endsection
