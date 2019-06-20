<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }} {{ isset($title) ? $title : '' }}</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css' />
	<link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/app.css" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('assets/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.easing.1.3.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/sweetalert2/sweetalert2.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/DataTables/js/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/DataTables/js/dataTables.bootstrap.min.js') }}"></script>
</head>
<body>
        @include('partials._navbar')
            @yield('content')
        @include('partials._footer')
</body>
</html>
