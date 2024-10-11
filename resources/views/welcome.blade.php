<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticketwise Bus</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Custom scrollbar styling for horizontal scrolling */
        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }
        .scrollbar-hide {
            -ms-overflow-style: none;  /* IE and Edge */
            scrollbar-width: none;  /* Firefox */
        }
    </style>
</head>
<body class="bg-gray-100">

    <!-- Navbar -->
    <x-navbar role="Admin" imageUrl="{{ asset('images/admin.png') }}" /> <!-- Replace static navbar with reusable component -->




    <!-- Main Content Layout -->
    <div class="flex container mx-auto mt-4 p-4">

        <!-- Sidebar placeholder for future content -->
        <div class="bg-gray-200 w-1/4 h-screen mt-2"> <!-- Changed width from w-1/5 to w-1/6 -->            <x-sidebar
                title="Admin Account"
                :links="[
                    ['name' => 'Incident Report', 'url' => '#'],
                    ['name' => 'Sales Report', 'url' => '#'],
                    ['name' => 'Ratings and Feedback', 'url' => '#'],
                    ['name' => 'Bus Arrival', 'url' => '#'],
                ]"
            />
        </div>
        <!-- Main Content -->
        <main class="w-3/4">
            <!-- Horizontal Date Picker -->
            <div class="flex flex-col items-end mb-4">
                <div class="flex items-center space-x-2">
                    <span class="text-gray-600">Sort by:</span>
                    <select class="border border-gray-300 rounded px-2 py-1">
                        <option>Day</option>
                        <option>Week</option>
                        <option>Month</option>
                    </select>
                </div>
                <div class="flex overflow-x-auto scrollbar-hide mt-2 space-x-4">
                    <!-- Arrow buttons -->
                    <button class="bg-gray-300 p-2 rounded-l">
                        <span>&larr;</span>
                    </button>

                    <!-- Date items -->
                    <div class="flex space-x-4">
                    <button class="border border-gray-300 px-4 py-2 rounded-lg">12 MAY</button>
                    <button class="border border-gray-300 px-4 py-2 rounded-lg">12 MAY</button>
                    <button class="border border-gray-300 px-4 py-2 rounded-lg">12 MAY</button>

                        <button class="border border-gray-300 px-4 py-2 rounded-lg">10 MAY</button>
                        <button class="border border-gray-300 px-4 py-2 rounded-lg">11 MAY</button>
                        <button class="border border-gray-300 px-4 py-2 rounded-lg">12 MAY</button>
                        <button class="border border-gray-300 px-4 py-2 rounded-lg">13 MAY</button>
                        <button class="bg-gray-600 text-white px-4 py-2 rounded-lg">14 MAY</button> <!-- Highlighted date -->
                        <button class="border border-gray-300 px-4 py-2 rounded-lg">15 MAY</button>
                        <button class="border border-gray-300 px-4 py-2 rounded-lg">16 MAY</button>
                        <button class="border border-gray-300 px-4 py-2 rounded-lg">17 MAY</button>
                    </div>

                    <!-- Arrow buttons -->
                    <button class="bg-gray-300 p-2 rounded-r">
                        <span>&rarr;</span>
                    </button>
                </div>
            </div>

            <!-- Main Body Content -->
            <div class="bg-white shadow-md rounded-lg p-4">
                <h2 class="text-xl font-bold mb-4">Main Content Area</h2>
                <p>Add your content here. This area can be used to display bus schedules, reports, or any other content you want below the date picker.</p>
            </div>
        </main>
    </div>

</body>
</html>
