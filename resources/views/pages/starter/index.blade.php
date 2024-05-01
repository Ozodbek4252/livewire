@extends('layout')
@section('content')
    @include('includes.sidebar')
    <div class="col py-3">

        <h1>Properties Page</h1>

        <div class="mt-4">
            <livewire:starter.properties />
        </div>

    </div>
@endsection
