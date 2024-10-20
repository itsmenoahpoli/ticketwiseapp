<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account - Ticketwise Bus</title>
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

    <!-- Create Account Container -->
    <div class="min-h-screen flex items-center justify-center">
        <div class="bg-white shadow-lg rounded-lg p-8 max-w-sm w-full">
            <!-- Logo and Title -->
            <div class="text-center mb-6">
                <h1 class="text-3xl font-bold text-black">
                    <span class="text-red-600">TICKETWISE</span> BUS
                </h1>
                <p class="mt-2 text-sm text-gray-600">Create your account to get started.</p>
            </div>

            <!-- Create Account Form -->
            <form method="POST">
                @csrf
                <!-- Full Name -->
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-semibold mb-2">Full Name</label>
                    <input id="name" type="text" name="name" class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-500 focus:border-transparent" required autofocus>
                </div>

                <!-- Email Address -->
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-semibold mb-2">Email Address</label>
                    <input id="email" type="email" name="email" class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-500 focus:border-transparent" required>
                </div>

                <!-- Password -->
                <div class="mb-4">
                    <label for="password" class="block text-gray-700 font-semibold mb-2">Password</label>
                    <input id="password" type="password" name="password" class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-500 focus:border-transparent" required>
                </div>

                <!-- Confirm Password -->
                <div class="mb-4">
                    <label for="password_confirmation" class="block text-gray-700 font-semibold mb-2">Confirm Password</label>
                    <input id="password_confirmation" type="password" name="password_confirmation" class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-500 focus:border-transparent" required>
                </div>

                <!-- Create Account Button -->
                <div>
                    <button type="submit" class="w-full bg-gray-800 text-white py-2 rounded-lg font-semibold hover:bg-black transition duration-300">Create Account</button>
                </div>

                <!-- Login Link -->
                <div class="mt-4 text-center">
                    <p class="text-sm text-gray-600">Already have an account? <a  class="text-gray-800 hover:underline">Login here</a></p>
                </div>
            </form>
        </div>
    </div>

</body>
</html>
