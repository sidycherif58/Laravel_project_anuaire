<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.boxicons.com/3.0.8/fonts/basic/boxicons.min.css" rel="stylesheet">
    <title>@yield('title')</title>
</head>
<body class="bg-blue-400">
    <nav class="flex justify-between space-x-4 p-4 bg-black text-white border-b-[4px]">
        <ul class="flex justify-center gap-4">
            <li><a href="{{ route ('index')}}">Accueil</a></li>
            <li><a href="{{ route ('create')}}">Ajouter</a></li>
        </ul>
    </nav>

    <div class="max-w-3xl mx-auto px-4">
        @if (session('success'))
            <div class="mt-4 p-3 bg-green-600 text-white rounded-md shadow-md">{{ session('success') }}</div>
        @endif
        @yield('content')
    </div>
</body>
