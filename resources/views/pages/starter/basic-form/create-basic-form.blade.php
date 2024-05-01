@extends('layout')
@section('content')
    @include('includes.sidebar')
    <div class="col py-3">

        <h1>Create Post</h1> <a class="btn btn-secondary" href="{{ route('starter.basic-form') }}"><- Back</a>

        <div class="mt-4">
            <livewire:starter.basic-form.create-basic-form />
        </div>

    </div>
@endsection
