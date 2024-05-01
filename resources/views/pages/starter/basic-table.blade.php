@extends('layout')
@section('content')
    @include('includes.sidebar')
    <div class="col py-3">

        <h1>Basic Table Page</h1>

        <div class="mt-4">
            <livewire:starter.basic-table />
        </div>

    </div>
@endsection
