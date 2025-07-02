<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="icon" href="{{ asset('images/logo/logo-bbn.webp') }}" type="image/x-icon">
    <title>{{ $title ?? 'BIMA BAHAMA NUSANTARA' }}</title>
    <script src="https://kit.fontawesome.com/d8c46daaeb.js" crossorigin="anonymous"></script>
</head>

<body class="font-bbn">
    {{ $slot }}

    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>

</html>
