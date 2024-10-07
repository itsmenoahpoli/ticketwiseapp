<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Ticketwise Bus</title>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Kanit', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-100">

    <div class="flex h-screen">
        <!-- Sidebar -->
        <div class="bg-gray-800 text-white w-64 p-4">
            <h1 class="text-2xl font-bold mb-6">TICKETWISE BUS</h1>
            <div class="mb-6">
                <p class="text-sm">Admin Account</p>
                <ul class="mt-2">
                    <li class="py-2 hover:bg-gray-700 rounded"><a href="#">Incident Report</a></li>
                    <li class="py-2 hover:bg-gray-700 rounded"><a href="#">Sales Report</a></li>
                    <li class="py-2 hover:bg-gray-700 rounded"><a href="#">Ratings and Feedback</a></li>
                    <li class="py-2 hover:bg-gray-700 rounded"><a href="#">Bus Arrival</a></li>
                </ul>
            </div>
        </div>

        <!-- Main Content -->
        <div class="flex-1 p-6">
            <div class="flex justify-between items-center mb-6">
                <div class="flex items-center">
                    <button class="p-2 bg-gray-800 text-white rounded-full">
                        <i class="fas fa-home"></i> <!-- Add your icon here -->
                    </button>
                    <button class="p-2 ml-4 bg-gray-800 text-white rounded-full">
                        <i class="fas fa-camera"></i> <!-- Add your icon here -->
                    </button>
                    <span class="ml-4 text-lg font-bold">Dashboard</span>
                </div>
                <div class="flex items-center">
                    <span class="text-gray-700">Admin</span>
                    <div class="ml-2 w-8 h-8 rounded-full bg-red-500 flex items-center justify-center">
                        <span class="text-white">A</span> <!-- Admin Icon -->
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div class="bg-white shadow-lg rounded-lg p-6">
                    <h2 class="text-lg font-bold">Incident Report</h2>
                </div>
                <div class="bg-white shadow-lg rounded-lg p-6">
                    <h2 class="text-lg font-bold">Sales Report</h2>
                </div>
                <div class="bg-white shadow-lg rounded-lg p-6">
                    <h2 class="text-lg font-bold">Ratings and Feedback</h2>
                </div>
                <div class="bg-white shadow-lg rounded-lg p-6">
                    <h2 class="text-lg font-bold">Bus Arrival</h2>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
