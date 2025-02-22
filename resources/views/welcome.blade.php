<!DOCTYPE html>
<html lang="en">
    <x-guest-layout>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Main Page</title>
        @vite(['resources/css/app.css', 'resources/js/app.js']) <!-- Load Tailwind -->
    </head>
    <body class="bg-gray-100 flex items-center justify-center h-screen">
        <div class="text-center">
            <h1 class="text-5xl font-bold text-gray-900">Selamat Datang!</h1>
            <p class="text-lg text-gray-600 mt-4">Silahkan LogIn sebagai Admin atau CS</p>
            <div class="mt-6">
                <a href="{{ route('login') }}" class="px-6 py-2 bg-amber-600 text-white rounded-lg shadow-md hover:bg-amber-700 transition">Login</a>
            </div>
        </div>
        </x-guest-layout>
    </body>
</html>
