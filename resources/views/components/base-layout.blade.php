<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    @stack('head')
    <title>{{ $title ?? '' }}</title>
</head>

<body>
    <!-- start:main -->
    {{ $slot ?? '' }}
    <!-- end:main -->
    @vite('resources/js/app.js')
    @stack('footer')
</body>

</html>
