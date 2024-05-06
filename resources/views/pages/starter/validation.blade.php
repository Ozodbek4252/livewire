@extends('layout')
@section('content')
    @include('includes.sidebar')
    <div class="col py-3">

        <h1>Validation Page</h1>

        <div class="mt-4">
            <livewire:starter.validation />
        </div>

    </div>
@endsection
