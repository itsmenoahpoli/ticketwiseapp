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

<!-- Contact Number -->
<div class="mb-4">
    <label for="contact_number" class="block text-gray-700 font-semibold mb-2">Contact Number</label>
    <input id="contact_number" type="text" name="contact_number" class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-500 focus:border-transparent" required>
</div>

<!-- Gender -->
<div class="mb-4">
    <label for="gender" class="block text-gray-700 font-semibold mb-2">Gender</label>
    <select id="gender" name="gender" class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-500 focus:border-transparent" required>
        <option value="" disabled selected>Select Gender</option>
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="other">Other</option>
    </select>
</div>

<!-- Date of Birth -->
<div class="mb-4">
    <label for="dob" class="block text-gray-700 font-semibold mb-2">Date of Birth</label>
    <input id="dob" type="date" name="dob" class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-500 focus:border-transparent" required>
</div>

                <!-- Create Account Button -->


				<button id="createAccountButton" class="w-full bg-gray-800 text-white py-2 rounded-lg font-semibold hover:bg-black transition duration-300">
        Create Account
    </button>

    <!-- Modal -->
    <div id="successModal" class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center z-50 hidden">
        <div class="bg-white p-6 rounded-lg w-96">
            <!-- Checkmark Icon -->
            <div class="flex justify-center">
                <svg class="w-12 h-12 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
            </div>
            <!-- Modal Content -->
            <div class="text-center mt-4">
                <h2 class="text-xl font-semibold">Account Registered Successfully</h2>
                <p class="text-gray-500">Your account has been successfully created!</p>
            </div>
            <!-- Close Button -->
            <div class="mt-4 text-center">
            <button id="closeModalButton" class="bg-gray-800 text-white py-2 px-4 rounded">
                    Close
                </button>
            </div>
        </div>
    </div>

    <script>
        // Get references to the modal and button
        const createAccountButton = document.getElementById('createAccountButton');
        const successModal = document.getElementById('successModal');
        const closeModalButton = document.getElementById('closeModalButton');

        // Show the modal when the Create Account button is clicked
        createAccountButton.addEventListener('click', function () {
            successModal.classList.remove('hidden'); // Show modal
        });

       // Close the modal and navigate to "publicview" route when the Close button is clicked
	   closeModalButton.addEventListener('click', function () {
            successModal.classList.add('hidden'); // Hide modal
            window.location.href = '/'; // Navigate to publicview route
        });
    </script>

                <!-- Login Link -->
                <div class="mt-4 text-center">
                    <p class="text-sm text-gray-600">Already have an account? <a  class="text-gray-800 hover:underline">Login here</a></p>
                </div>
        </div>
    </div>

</body>
</html>
