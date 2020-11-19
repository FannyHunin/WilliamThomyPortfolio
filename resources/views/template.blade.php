<!DOCTYPE html>
<html lang="en" style="scroll-behavior: smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- fonts --}}
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Overpass:wght@300;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>@yield('pageTitle')</title>
</head>
<body style="background-color: #1F1F1F; color: white;">
    
    @include('partials.navbar')
    <div class="container text-center">
        @yield('content')  
    </div>
    @include('partials.footer')

    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>