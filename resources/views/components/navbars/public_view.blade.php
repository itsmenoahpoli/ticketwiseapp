<header class="bg-black text-white py-4">
    <div class="container mx-auto flex items-center justify-between px-6">
        <!-- Logo -->
        <img src="{{ $logoUrl ?? asset('images/TWbus.png') }}" alt="Ticketwise Bus Logo" class="h-12">

        <!-- Left Section: Navigation Buttons -->
        <nav class="flex space-x-6"> <!-- Flex container for buttons -->
            <a href="/home" class="text-white hover:text-gray-300 font-semibold">HOME</a>
            <a href="/how-to-book" class="text-white hover:text-gray-300 font-semibold">HOW TO BOOK</a>
            <a href="/about-us" class="text-white hover:text-gray-300 font-semibold">ABOUT US</a>
            <a href="/bus" class="text-white hover:text-gray-300 font-semibold">BUS</a>
        </nav>

        <!-- Right Section: Register and Login Buttons -->
        <div class="flex space-x-4">
		<a href="{{ route('create-acc') }}" class="text-black bg-white hover:bg-gray-200 font-semibold py-2 px-4 rounded border border-black">Register</a>
		<a href="{{ route('login') }}" class="text-white bg-black hover:bg-gray-800 font-semibold py-2 px-4 rounded border border-white">Login</a>
        </div>
    </div>
</header>
