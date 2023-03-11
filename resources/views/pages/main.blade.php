<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- Script Tailwindcss Untuk Styling Halaman web --}}
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- Font Google untuk mempercantik Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Quicksand', sans-serif;
        }
    </style>
</head>

<body class="bg-slate-200">
    <div class="flex">
        <div class="w-[20%]">
            @include('pages.sidebar')
        </div>
        <div class="container mx-auto w-[80%] p-5">
            @yield('content')
        </div>
    </div>
</body>

</html>
