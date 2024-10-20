<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Ticketwise Bus</title>
    <!-- Importing Kanit font from Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
        font-family: 'Kanit', sans-serif;
        background-image: url('{{ asset('images/terminal.jpg') }}'); /* Set your background image here */
        background-size: cover; /* Cover the entire viewport */
        background-position: center; /* Center the background image */
        background-repeat: no-repeat; /* Prevent repeating the image */
    }
    </style>
</head>
<body class="bg-gray-100">

    <!-- Login Container -->
    <div class="min-h-screen flex items-center justify-center">
        <div class="bg-white shadow-lg rounded-lg p-8 max-w-sm w-full">
            <!-- Logo and Title -->
            <div class="text-center mb-6">
                <h1 class="text-3xl font-bold text-black">
                    <span class="text-red-600">TICKETWISE</span> BUS
                </h1>
                <p class="mt-2 text-sm text-gray-600">Welcome back! Please login to your account.</p>
            </div>

            <!-- Login Form -->
            <form method="POST">
                @csrf
                <!-- Email Address -->
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-semibold mb-2">Email Address</label>
                    <input id="email" type="email" name="email" class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-500 focus:border-transparent" required autofocus>
                </div>

                <!-- Password -->
                <div class="mb-4">
                    <label for="password" class="block text-gray-700 font-semibold mb-2">Password</label>
                    <input id="password" type="password" name="password" class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-500 focus:border-transparent" required>
                </div>

                <!-- Remember Me -->
                <div class="mb-4 flex items-center">
                    <input type="checkbox" name="remember" id="remember" class="mr-2">
                    <label for="remember" class="text-gray-700">Remember Me</label>
                </div>

                <!-- Login Button -->
                <div>
                    <button type="submit" class="w-full bg-gray-800 text-white py-2 rounded-lg font-semibold hover:bg-black transition duration-300">Login</button>
                </div>

                <!-- Forgot Password Link -->
                <div class="mt-4 text-center">
                    <a class="text-sm text-gray-600 hover:underline">Forgot your password?</a>
                </div>
            </form>
        </div>
    </div>

</body>
</html>
