<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <title>{{ $title }}</title>
</head>

<body>

    @include('partials.navbar')

    <div class="container">
        @yield('container')
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <script src="{{ asset('js/bootstrap.min.js') }}"></script>    

</body>

</html>
