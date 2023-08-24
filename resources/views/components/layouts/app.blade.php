<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Todo Native</title>

    @vite('resources/css/app.css')

</head>
<body class="antialiased bg-gray-900 text-gray-100 p-6">
{{ $slot }}
</body>
</html>
