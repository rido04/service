<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome | My App</title>
    @vite(['resources/css/app.css', 'resources/js/app.js']) <!-- Load Tailwind -->
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="text-center">
        <h1 class="text-5xl font-bold text-gray-900">Welcome to My App</h1>
        <p class="text-lg text-gray-600 mt-4">Manage your data with ease.</p>
        <div class="mt-6">
            <a href="{{ route('login') }}" class="px-6 py-2 bg-blue-600 text-white rounded-lg shadow-md hover:bg-blue-700 transition">Login</a>
            <a href="{{ route('register') }}" class="px-6 py-2 bg-gray-300 text-gray-900 rounded-lg shadow-md hover:bg-gray-400 transition">Register</a>
        </div>
    </div>
</body>
</html>
