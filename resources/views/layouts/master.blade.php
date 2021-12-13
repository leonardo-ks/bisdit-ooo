<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Oasis Oleh-Oleh</title>
    <link rel="icon" href="https://cdn.discordapp.com/attachments/906163180328325130/919144472237977640/Trinity.png"
        style="filter: invert(55%) sepia(91%) saturate(399%) hue-rotate(193deg) brightness(96%) contrast(100%);"
        type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="{{ url('css/sheetstyle.css') }}" rel="stylesheet" type="text/css">
    @livewireStyles
</head>

<body class="d-flex flex-column h-100">
    @include('layouts.navigation.navbar')
    <div class="content-wrapper mb-5">
        @yield('content')
    </div>
    @livewireScripts
    @include('layouts.navigation.footer')
</body>

</html>
