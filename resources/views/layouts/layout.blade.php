<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>Eka Bachrudin</title>
    @yield('style')
</head>

<body>
        <div class="container h-screen mx-auto lg:px-[100px] px-4">
            @include('layouts.navbar')
            @yield('content')
        </div>
        <script
            src="https://code.jquery.com/jquery-3.6.3.min.js"
            integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU="
            crossorigin="anonymous"></script>
        @yield('javascript')

</body>

</html>
