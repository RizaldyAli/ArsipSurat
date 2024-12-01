<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" href="{{ asset('img/logoarsip.png') }}" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    @vite('resources/css/app.css') <!-- Pastikan Vite digunakan -->
</head>

<body class="flex items-center justify-center min-h-screen bg-blue-50">

    <div class="w-full max-w-md p-8 bg-white rounded-lg shadow-lg">
        <h2 class="text-3xl font-bold text-center text-blue-700 flex items-center justify-center">
            <img src="img/logoarsip.png" alt="Logo" class="w-12 h-12"> <!-- Ganti dengan path logo Anda -->
            <span>Login</span>
        </h2>
        <form action="{{ route('authenticate') }}" method="POST" class="mt-6">
            @csrf
            @method('POST')
            <div class="mb-6">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" id="email"
                    class="w-full px-4 py-3 mt-2 border rounded-md focus:ring-2 focus:ring-blue-600 focus:outline-none"
                    required>
            </div>
            <div class="mb-6">
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" name="password" id="password"
                    class="w-full px-4 py-3 mt-2 border rounded-md focus:ring-2 focus:ring-blue-600 focus:outline-none"
                    required>
            </div>
            @if ($errors->any())
                <div class="mb-6 text-sm text-red-600">
                    {{ $errors->first() }}
                </div>
            @endif
            <button type="submit"
                class="w-full px-4 py-3 text-white bg-blue-600 rounded-md hover:bg-blue-700 transition duration-300">
                Login
            </button>
        </form>
    </div>

</body>

</html>
