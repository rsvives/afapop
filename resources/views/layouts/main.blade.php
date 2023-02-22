<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Afapop 📦</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://unpkg.com/phosphor-icons"></script>
</head>
<body>
    @include('components.header')
    {{-- <p>esto es una prueba</p> --}}

    <div class="content">
        @yield('content')
 
    </div>
    
    @include('components.footer')
</body>
</html>