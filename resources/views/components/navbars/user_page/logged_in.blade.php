<header class="bg-black text-white py-4">
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">

    <div class="container mx-auto flex items-center justify-between px-6">
        <!-- Logo -->
        <img src="{{ $logoUrl ?? asset('images/TWbus.png') }}" alt="Ticketwise Bus Logo" class="h-12">

        <!-- Left Section: Navigation Buttons -->
        <nav class="flex space-x-10 relative"> <!-- Flex container for buttons -->
            <a href="/" class="text-white hover:text-gray-300 font-normal" style="font-family: 'Kanit', sans-serif;">HOME</a>
			<a href="/howtobook#booking-steps" class="text-white hover:text-gray-300 font-normal" style="font-family: 'Kanit', sans-serif;">HOW TO BOOK</a>
            <a href="/aboutus#about-us" class="text-white hover:text-gray-300 font-normal" style="font-family: 'Kanit', sans-serif;">ABOUT US</a>

            <!-- Dropdown with down.png arrow -->
            <div class="relative">
                <button id="busButton" class="text-white hover:text-gray-300 font-normal focus:outline-none flex items-center space-x-2"
                    style="font-family: 'Kanit', sans-serif;">
                    <span>BUS</span>
                    <!-- Down Arrow Image -->
                    <img src="{{ asset('images/down.png') }}" alt="Down Arrow" class="w-4 h-4 ml-2"/>
                </button>

                <!-- Dropdown menu -->
                <div id="dropdownMenu" class="absolute mt-2 w-48 bg-white rounded shadow-lg z-10 hidden">
                    <a href="/dltb_bus" class="block px-4 py-2 text-black hover:bg-gray-200">DLTB</a>
                    <a href="/jam_bus" class="block px-4 py-2 text-black hover:bg-gray-200">JAM Liner</a>
                    <a href="/victory_bus" class="block px-4 py-2 text-black hover:bg-gray-200">Victory Liner</a>
                </div>
            </div>
        </nav>

        <!-- Right Section: Register and Login Buttons -->
        <div class="flex space-x-4">
		<div class="text-left mr-4 -mt-2"> <!-- Added negative margin-top -->
                <span class="text-xs">Passenger</span> <!-- Passenger text -->
                <span class="block text-base">{{  'Juan Dela Cruz' }}</span> <!-- Increased font size and margin -->
            </div>
            <div class="rounded-full h-10 w-10 overflow-hidden"> <!-- Increased size of image container -->
				<img src="{{ asset('images/passenger.png') }}" alt="user" class="h-full w-full object-cover">

            </div>
        </div>
    </div>

</header>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
        // Smooth scrolling when clicking the "How to Book" link
        $('#howToBook').on('click', function(e) {
    // Prevent the default anchor link behavior
    e.preventDefault();

    // Redirect to /howtobook page first
    window.location.href = '/howtobook';

    // Scroll to the element with the ID booking-steps after a short delay
    setTimeout(function() {
        var offset = 100; // Adjust this value to scroll further down (positive value)

        // Scroll with offset
        $('html, body').animate({
            scrollTop: $('#booking-steps').offset().top - offset
        }, 1000); // Adjust the scroll duration here if needed
    }, 500); // Adjust the delay if necessary
});


        // Dropdown menu toggle behavior
        $('#busButton').click(function() {
            $('#dropdownMenu').toggleClass('hidden');
        });

        // Close dropdown if clicked outside
        $(document).click(function(event) {
            if (!$(event.target).closest('#busButton, #dropdownMenu').length) {
                $('#dropdownMenu').addClass('hidden');
            }
        });
    });
</script>
