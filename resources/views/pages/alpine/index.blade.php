@extends('layout')
@section('content')
    @include('includes.sidebar')
    <div class="col py-3">

        <h1>Alpine Page</h1>

        <div class="mt-4">
            <livewire:alpine.introduction />
        </div>

    </div>
@endsection
