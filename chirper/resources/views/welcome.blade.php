<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Welcome</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <style>

        </style>
    @endif
</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <div class="min-h-screen flex flex-col items-center justify-center bg-gray-50 dark:bg-black">
        <div class="text-center">
            <h1 class="text-4xl font-bold text-black dark:text-white">Welcome</h1>
            @if (Route::has('login'))
                <div class="mt-6">
                    <a href="{{ route('login') }}"
                        class="inline-block px-6 py-2 text-sm font-semibold text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        Log in
                    </a>
                    <a href="{{ route('register') }}"
                        class="inline-block px-6 py-2 text-sm font-semibold text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        Register
                    </a>
                </div>
            @endif
        </div>
    </div>
</body>

</html>