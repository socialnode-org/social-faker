<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ elixir('css/app.css') }}"/>
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
        window.socialnode = {!! json_encode([
            'api' => [
                'appName' => config('app.name'),
                'baseUrl' => config('app.url'),
            ],
            'user' => Auth::user(),
        ]) !!}
    </script>
</head>
<body>
@include('layouts.partial.nav')
@yield('content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
<script src="{{ elixir('js/app.js') }}""></script>
<script type="text/javascript">
        $(document).ready(function() { $('.ui.dropdown').dropdown(); });
</script>
@stack('scripts')
</body>
</html>
