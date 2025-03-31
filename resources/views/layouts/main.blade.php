<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
    @vite('resources/css/app.css')
</head>
<body class="flex flex-col min-h-screen w-full bg-zinc-100 antialiased">
    <header class="border-b-zinc-200 bg-white mb-4">
        <nav class="container mx-auto">
            <div class="flex justify-between items-center py-4">
                <a href="/" class="text-2xl font-bold">Simple Laravel</a>
                <ul class="flex space-x-4">
                    <li><a href="/" class="text-gray-500 hover:text-gray-700">Home</a></li>
                    <li><a href="/" class="text-gray-500 hover:text-gray-700">About</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <main class="flex flex-col flex-1">
        @yield('content')
    </main>

    <footer>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
