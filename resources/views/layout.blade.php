<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        
        <title>@yield('title')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->
        <link href="{{ url('css/style.css') }}" rel="stylesheet">
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <div class="relative">
            <nav class="bg-gray-800 p-4">
                <div class="container mx-auto flex justify-center">
                    <a href="/" class="hover:text-gray-400">Home</a>
                    <a href="/about" class="hover:text-gray-400">About</a>
                    <a href="/contact" class="hover:text-gray-400">Contact</a>
                    <a href="/computers" class="hover:text-gray-400">Computers</a>
                </div>
            </nav>
        </div>
        <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">

            <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
                <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                    <header class="grid grid-cols-1 items-center gap-2 py-10 text-center">
                        <h1 class="text-sm">Abdulrhman Aliyan</h1>
                    </header>

                    <main class="mt-6 text-center">
                        @yield('content')
                    </main>

                    <footer class="py-16 text-center text-sm text-black dark:text-white/70">
                        © Abdulrhman_Aliyan
                    </footer>
                </div>
            </div>
        </div>
    </body>
</html>
