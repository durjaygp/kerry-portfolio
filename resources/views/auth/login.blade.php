
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-100 dark:bg-gray-900">

<div class="w-full max-w-md p-6 bg-white rounded-lg shadow-md dark:bg-gray-800">
    <!-- Session Status -->
    <div class="mb-4 text-sm text-green-600" id="session-status">
        <!-- Session status will be displayed here -->
    </div>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Email</label>
            <input id="email" class="block w-full mt-1 p-2 border rounded-md dark:bg-gray-700 dark:border-gray-600 dark:text-white" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username">
            <p class="mt-2 text-sm text-red-500">@error('email') {{ $message }} @enderror</p>
        </div>

        <!-- Password -->
        <div class="mt-4">
            <label for="password" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Password</label>
            <input id="password" class="block w-full mt-1 p-2 border rounded-md dark:bg-gray-700 dark:border-gray-600 dark:text-white" type="password" name="password" required autocomplete="current-password">
            <p class="mt-2 text-sm text-red-500">@error('password') {{ $message }} @enderror</p>
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="text-indigo-600 border-gray-300 rounded dark:bg-gray-900 dark:border-gray-700 focus:ring-indigo-500" name="remember">
                <span class="text-sm text-gray-600 ms-2 dark:text-gray-400">Remember me</span>
            </label>
        </div>

        <div class="flex items-center justify-between mt-4">
            @if (Route::has('password.request'))
                <a class="text-sm text-indigo-600 hover:underline dark:text-indigo-400" href="{{ route('password.request') }}">
                    Forgot your password?
                </a>
            @endif

            <button type="submit" class="px-4 py-2 text-white bg-indigo-600 rounded-md hover:bg-indigo-700 dark:bg-indigo-500 dark:hover:bg-indigo-600">
                Log in
            </button>
        </div>
    </form>
</div>

</body>
</html>

