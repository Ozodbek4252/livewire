<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Livewire basics</title>
    @include('includes.styles')
</head>

<body>
    <div class="">
        @include('includes.navbar')

        <div class="container-fluid">
            <div class="row flex-nowrap">
                @yield('content')
            </div>
        </div>
    </div>

    @include('includes.scripts')
</body>

</html>
