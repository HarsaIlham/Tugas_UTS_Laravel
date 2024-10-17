<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@900&family=Satisfy&display=swap" rel="stylesheet" />
    <style>
        html {
            font-family: 'Inter', sans-serif;
        }
    </style>
    <title>@yield('title')</title>
</head>
<body class="bg-gradient-to-b from-fuchsia-800 to-teal-800">
    @include('components.navbar')
    @yield('content')
    
    @include('components.footer')
</body>
</html>