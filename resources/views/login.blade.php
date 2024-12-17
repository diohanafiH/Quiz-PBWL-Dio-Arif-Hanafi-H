<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-pink-100 flex items-center justify-center h-screen">
    <div class="w-full max-w-md">
        <div class="bg-white border-2 border-pink-300 shadow-lg rounded-lg px-8 py-10">
            <h2 class="text-3xl font-bold text-center mb-6 text-pink-600">Login</h2>

            @if($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                    {{ $errors->first() }}
                </div>
            @endif

            <form action="{{ route('login') }}" method="POST">
                @csrf

                <!-- Email -->
                <div class="mb-4">
                    <label class="block text-pink-600 text-sm font-semibold mb-2" for="email">
                        Email
                    </label>
                    <input type="email" name="email" id="email" placeholder="Masukkan Email Anda"
                           class="border border-pink-300 rounded-lg w-full py-2 px-3 text-pink-800 focus:outline-none focus:ring-2 focus:ring-pink-400 focus:border-transparent"
                           required>
                </div>

                <!-- Password -->
                <div class="mb-6">
                    <label class="block text-pink-600 text-sm font-semibold mb-2" for="password">
                        Password
                    </label>
                    <input type="password" name="password" id="password" placeholder="Masukkan Password Anda"
                           class="border border-pink-300 rounded-lg w-full py-2 px-3 text-pink-800 focus:outline-none focus:ring-2 focus:ring-pink-400 focus:border-transparent"
                           required>
                </div>

                <!-- Tombol Login -->
                <div class="flex items-center justify-center">
                    <button type="submit"
                            class="bg-pink-500 hover:bg-pink-600 text-white font-bold py-2 px-4 rounded-lg shadow-md transition-transform transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-pink-500">
                        Login
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
