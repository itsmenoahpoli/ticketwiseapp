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
        <x-navbars.navbar role="Admin" imageUrl="{{ asset('images/admin.png') }}" /> <!-- Replace static navbar with reusable component -->

    <!-- Back Button -->
    <div class="flex items-center mb-4 mt-8">
        <button class="bg-black text-white rounded-lg px-4 py-2 shadow hover:bg-red-600 transition ml-4" onclick="window.history.back()">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
            Back
        </button>
    </div>



        <!-- Main Content Layout -->
        <div class="flex container mx-auto mt-4 p-4">
            <!-- Sidebar placeholder for future content -->
            <div class="bg-200 w-1/4 h-screen mt-2">
                <x-sidebars.admin_page.ir-sidebar
                    title="Admin Account"
                    :links="[
                        ['name' => 'Incident Report', 'url' => '#'],
                        ['name' => 'Sales Report', 'url' => '#'],
                        ['name' => 'Ratings and Feedback', 'url' => '#'],
                        ['name' => 'Bus Arrival', 'url' => '#'],
                    ]"
                />
            </div>

            <!-- Main Content Container -->
            <main class="w-4/5 h-full" style="transform: scale(0.85); transform-origin: top;">            <!-- Horizontal Date Picker -->
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

                    <!-- Date Picker and Arrow Buttons aligned with main content -->
                    <div class="flex items-center mt-2 w-full">
                        <!-- Left Arrow Button -->
                        <button id="left-arrow" class="bg-black text-white hover:text-white focus:bg-black focus:text-white transition p-2">
                            <span>&larr;</span>
                        </button>

                        <!-- Date Items Container with fixed width -->
                        <div id="date-container" class="flex overflow-x-auto scrollbar-hide space-x-3 mx-4" style="width: 100%;"> <!-- Adjusted width to 100% of the main content area -->
                            <!-- Date Items -->
                            <button class="border border-gray-400 rounded-lg px-4 py-1 hover:bg-black hover:text-white focus:bg-black focus:text-white transition">10 MAY</button>
                            <button class="border border-gray-400 rounded-lg px-4 py-1 hover:bg-black hover:text-white focus:bg-black focus:text-white transition">11 MAY</button>
                            <button class="border border-gray-400 rounded-lg px-4 py-1 hover:bg-black hover:text-white focus:bg-black focus:text-white transition">12 MAY</button>
                            <button class="border border-gray-400 rounded-lg px-4 py-1 hover:bg-black hover:text-white focus:bg-black focus:text-white transition">13 MAY</button>
                            <button class="bg-black text-white rounded-lg px-4 py-1">14 MAY</button> <!-- Highlighted date -->
                            <button class="border border-gray-400 rounded-lg px-4 py-1 hover:bg-black hover:text-white focus:bg-black focus:text-white transition">15 MAY</button>
                            <button class="border border-gray-400 rounded-lg px-4 py-1 hover:bg-black hover:text-white focus:bg-black focus:text-white transition">16 MAY</button>
                            <button class="border border-gray-400 rounded-lg px-4 py-1 hover:bg-black hover:text-white focus:bg-black focus:text-white transition">17 MAY</button>
                            <button class="border border-gray-400 rounded-lg px-4 py-1 hover:bg-black hover:text-white focus:bg-black focus:text-white transition">18 MAY</button>
                            <button class="border border-gray-400 rounded-lg px-4 py-1 hover:bg-black hover:text-white focus:bg-black focus:text-white transition">19 MAY</button>
                            <button class="border border-gray-400 rounded-lg px-4 py-1 hover:bg-black hover:text-white focus:bg-black focus:text-white transition">20 MAY</button>
                            <button class="border border-gray-400 rounded-lg px-4 py-1 hover:bg-black hover:text-white focus:bg-black focus:text-white transition">21 MAY</button>
                            <button class="border border-gray-400 rounded-lg px-4 py-1 hover:bg-black hover:text-white focus:bg-black focus:text-white transition">22 MAY</button>
                            <button class="border border-gray-400 rounded-lg px-4 py-1 hover:bg-black hover:text-white focus:bg-black focus:text-white transition">23 MAY</button>
                            <button class="border border-gray-400 rounded-lg px-4 py-1 hover:bg-black hover:text-white focus:bg-black focus:text-white transition">18 MAY</button>
                            <button class="border border-gray-400 rounded-lg px-4 py-1 hover:bg-black hover:text-white focus:bg-black focus:text-white transition">19 MAY</button>
                            <button class="border border-gray-400 rounded-lg px-4 py-1 hover:bg-black hover:text-white focus:bg-black focus:text-white transition">20 MAY</button>
                            <button class="border border-gray-400 rounded-lg px-4 py-1 hover:bg-black hover:text-white focus:bg-black focus:text-white transition">21 MAY</button>
                            <button class="border border-gray-400 rounded-lg px-4 py-1 hover:bg-black hover:text-white focus:bg-black focus:text-white transition">22 MAY</button>
                            <button class="border border-gray-400 rounded-lg px-4 py-1 hover:bg-black hover:text-white focus:bg-black focus:text-white transition">23 MAY</button>
                            <button class="border border-gray-400 rounded-lg px-4 py-1 hover:bg-black hover:text-white focus:bg-black focus:text-white transition">18 MAY</button>
                            <button class="border border-gray-400 rounded-lg px-4 py-1 hover:bg-black hover:text-white focus:bg-black focus:text-white transition">19 MAY</button>
                            <button class="border border-gray-400 rounded-lg px-4 py-1 hover:bg-black hover:text-white focus:bg-black focus:text-white transition">20 MAY</button>
                            <button class="border border-gray-400 rounded-lg px-4 py-1 hover:bg-black hover:text-white focus:bg-black focus:text-white transition">21 MAY</button>
                            <button class="border border-gray-400 rounded-lg px-4 py-1 hover:bg-black hover:text-white focus:bg-black focus:text-white transition">22 MAY</button>
                            <button class="border border-gray-400 rounded-lg px-4 py-1 hover:bg-black hover:text-white focus:bg-black focus:text-white transition">23 MAY</button>

                        </div>

                        <!-- Right Arrow Button -->
                        <button id="right-arrow" class="bg-black text-white hover:text-white focus:bg-black focus:text-white transition p-2">
                            <span>&rarr;</span>
                        </button>
                    </div>
                </div>

            <!-- Main Body Content -->
            <div class="bg-white shadow-md rounded-lg p-4 h-10000">
    <!-- First Long Rounded Container -->
    <div class="bg-gray-105 rounded-lg p-6 mb-4 duration-200 flex justify-between items-start relative" style="box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);">
    <div class="w-full flex items-start"> <!-- Flex container for alignment -->
        <!-- Left section -->
        <div class="flex-1 relative">
            <h3 class="font-semibold text-base mb-1 text-gray-800">Manila-Baguio</h3>
            <h3 class="font-semibold text-sm mb-2 text-gray-600">Victory Liner</h3>
            <span class="font-bold text-xs text-gray-800">Mon, May 4</span>

            <!-- Flexbox for time and travel details -->
            <div class="flex items-start mt-1">
                <div class="flex flex-col items-center">
                    <span class="text-xs text-gray-500">9:00&nbsp;&nbsp;Manila</span> <!-- Time and location -->
                    <!-- Vertical line that resembles a path -->
                    <div class="flex-none">
                        <i class="fas fa-bus text-black"></i>
                        <span class="text-xs text-gray-600">6H 59m bus ride with Victory Liner in <strong class="font-bold">Regular AC</strong></span>
                    </div>
                    <span class="text-xs text-gray-500">15:59&nbsp;&nbsp;Baguio</span> <!-- Destination time -->
                    <div class="text-xs text-gray-600 mt-1">Arrives on Tue, Oct 1. Travel time 5h 59m</div>
                </div>
            </div>

            <!-- Proof of Incident Section -->
            <div class="font-bold text-xs text-gray-800 mt-7">Proof of Incident/Accident</div>
            <img src="{{ $imageUrl ?? asset('images/ir.png') }}" alt="" class="h-50 object-cover mt-2">

            <!-- Report of Incident/Accident Section -->
            <div class="font-bold text-xs text-gray-800 mt-2">Report of Incident/Accident</div> <!-- Moved to the left -->
            <div class="mt-2 p-4 bg-gray-200 rounded-lg"> <!-- Adjust the padding, background, and rounded corners as needed -->
        <p class="text-gray-700">A reckless driver overtakes and ends up crashing into one of our buses. Good thing that no one gets hurt and no one dies.</p>
    </div>
        </div>

     <!-- Close button -->
<button class="absolute top-2 right-2 text-gray-600 hover:text-gray-900 focus:outline-none" onclick="window.history.back()">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
    </svg>
</button>


        <!-- Incident/Accident Section -->
        <div class="flex flex-col items-start ml-4 relative"> <!-- Aligned items to the start (left) -->
            <!-- Left shadow border -->
            <div class="absolute left-0 top-0 h-full w-px bg-black"></div> <!-- Shadow border -->

            <div class="text-left ml-4 mr-10"><strong>Type of Incident/Accident</strong><br> Crashed</div> <!-- Added ml-4 for spacing -->
            <div class="text-left ml-4 mt-2 mr-10"><strong>Location of Incident/ Accident</strong><br> Brgy. 143, Calamba, Laguna</div> <!-- Added ml-4 for spacing -->
            <div class="text-left ml-4 mt-2 mr-10"><strong>Time Reported</strong><br> 15:00</div> <!-- Added ml-4 for spacing -->
        </div>
    </div>
</div>




<!-- Second Long Rounded Container -->


<div class="bg-gray-105 rounded-lg p-4 mb-4 duration-200 flex justify-between items-center" style="box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);">
    <div>
    <h3 class="font-semibold text-sm mb-1 text-gray-800">Turbina-Bicol</h3>
    <h3 class="font-semibold text-xs mb-2 text-gray-600">DLTB</h3>
    </div>
    <button class="text-black-500 underline hover:text-red-600">View</button>
</div>
    </div>







            </main>

        </div>

        <script>
            // JavaScript function to handle scrolling
            document.getElementById('left-arrow').addEventListener('click', function() {
                const dateContainer = document.getElementById('date-container');
                dateContainer.scrollBy({ left: -200, behavior: 'smooth' });
            });

            document.getElementById('right-arrow').addEventListener('click', function() {
                const dateContainer = document.getElementById('date-container');
                dateContainer.scrollBy({ left: 200, behavior: 'smooth' });
            });
        </script>
    </body>
    </html>