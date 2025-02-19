<x-guest-layout>
    <div class="flex flex-col items-center justify-center bg-gray-50">
        <!-- Login Card -->
        <div class="w-full max-w-md bg-white p-8 shadow-lg rounded-lg">
            <h2 class="text-2xl font-bold text-center text-gray-800">Sign In</h2>
            <form method="POST" action="{{ route('login') }}" class="mt-6">
                @csrf
                <!-- Email -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input id="email" type="email" name="email" required autofocus
                        class="w-full mt-1 p-2 border rounded-lg focus:ring focus:ring-blue-300">
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input id="password" type="password" name="password" required
                        class="w-full mt-1 p-2 border rounded-lg focus:ring focus:ring-blue-300">
                </div>

                <!-- Remember Me -->
                <div class="flex items-center justify-between mt-4">
                    <label class="flex items-center">
                        <input type="checkbox" name="remember" class="text-blue-600 focus:ring">
                        <span class="ml-2 text-sm text-gray-600">Remember me</span>
                    </label>
                    <a href="{{ route('password.request') }}" class="text-sm text-blue-600 hover:underline">Forgot password?</a>
                </div>

                <!-- Submit Button -->
                <div class="mt-6">
                    <button type="submit" class="w-full px-4 py-2 text-white bg-blue-600 rounded-lg hover:bg-blue-700">
                        Login
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
