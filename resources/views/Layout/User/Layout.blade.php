<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | SMDC Condominium | SMDC Condo</title>

    @include('Layout/User/Header')

    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
    <!-- Navigation Bar -->
    @include('Layout/User/Navbar');
    <!-- Navigation ends here -->
    
    @section('main')
        @yield('content')
    @show

    <!-- Footer -->
    @include('Layout/User/Footer')

    <!-- Scripts -->
    @section('scripts')
        @include('Layout/User/Script')

        <script src="{{ asset('js/User/Scripts.js') }}"></script>
    @show
</body>

</html>