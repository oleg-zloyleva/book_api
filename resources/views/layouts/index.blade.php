<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Card holder</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>

    <div id="app">
        @yield('content')
    </div>

    </body>

    <script src="{{ asset('js/app.js') }}"></script>
    {{--<script src="{{ asset('js/jquery.min.js') }}"></script>--}}
    {{--<script src="{{ asset('js/cleave.min.js') }}"></script>--}}
    {{--<script src="{{ asset('js/common.js') }}"></script>--}}
</html>