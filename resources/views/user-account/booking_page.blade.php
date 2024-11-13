{{-- resources/views/page-with-header.blade.php --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <header class="bg-cover bg-center text-white py-20" style="font-family: 'Kanit', sans-serif; background-image: url('{{ asset('images/NEW.png') }}'); background-size: 1920px 1080px; background-position: center;">
        <div class="container mx-auto flex items-start -mt-10"> <!-- Negative top margin to move everything upwards -->
            <div class="flex flex-col items-start"> <!-- Flex container for vertical alignment and left alignment -->

                <!-- Logo -->
                <img src="{{ asset('images/TWbus.png') }}" alt="Logo" class="shadow-lg" style="width: 140px; height: auto; margin-top: -30px; margin-bottom: 20px; margin-left: -10px;">

                <div class="flex flex-col items-start mb-4"> <!-- Added mb-4 for margin-bottom -->
                    <h1 class="text-3xl font-bold text-left" style="color: white; text-shadow: 3px 3px 8px rgba(0, 0, 0, 0.6);">Manila to Baguio</h1>
                    <h1 class="text-xs font text-left" style="color: white; text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.6);">113 trips (700php - 15,000 php)</h1>
                </div>

                <div class="flex">
                    <!-- First text field with placeholder -->
                    <div class="relative mt-4" style="width: 90%; border-radius: 0;">
    <input type="text" placeholder="Manila" class="bg-white text-black py-2 px-10 pl-2 pr-8"
        style="font-family: 'Kanit', sans-serif; border-radius: 0; box-shadow: 4px 4px 20px rgba(0, 0, 0, 0.4); color: black; width: 100%;" />
    <img src="{{ asset('images/switch.png') }}" alt="icon" class="w-6 h-6 absolute right-2 top-1/2 transform -translate-y-1/2" />
</div>


                    <!-- Second text field (disabled) -->
                    <input type="text" class="bg-white text-black py-2 px-10 mt-4" style="font-family: 'Kanit', sans-serif; width: 45%; border-radius: 0; box-shadow: 4px 4px 20px rgba(0, 0, 0, 0.4);" disabled />

                    <!-- Third text field with added margin-right for horizontal spacing -->
                    <input type="date" class="bg-white text-black py-2 px-10 mt-4 ml-4" style="font-family: 'Kanit', sans-serif; width: 30%; border-radius: 0; box-shadow: 4px 4px 20px rgba(0, 0, 0, 0.4);" />

                    <!-- Text field with image on the left side -->
                    <div class="relative flex items-center mt-4 ml-4" style="width: 40%;">
                        <input type="text" class="bg-white text-black py-2 px-4" style="font-family: 'Kanit', sans-serif; width: 200px; border-radius: 0; box-shadow: 4px 4px 20px rgba(0, 0, 0, 0.4); background-image: url('{{ asset('images/boy.png') }}'); background-repeat: no-repeat; background-position: left 10px center; background-size: 20px 20px; padding-left: 30px; text-align: center;" placeholder="1 passenger" />
                        <button class="bg-black text-white py-2 px-6 ml-4 rounded-md hover:bg-white hover:text-black transition-colors duration-300" style="font-family: 'Kanit', sans-serif; height: 100%" id="updateBtn">Update</button>
                        <button class="bg-red-800 text-white py-2 px-6 ml-4 rounded-md hover:bg-white hover:text-black transition-colors duration-300" style="font-family: 'Kanit', sans-serif; height: 100%" id="refundBtn">Refund</button>
                    </div>

                    <script>
                        const updateBtn = document.getElementById('updateBtn');
                        const refundBtn = document.getElementById('refundBtn');

                        updateBtn.addEventListener('mouseenter', () => {
                            refundBtn.classList.add('hover:bg-black');
                        });

                        refundBtn.addEventListener('mouseenter', () => {
                            refundBtn.classList.remove('hover:bg-red-800');
                            refundBtn.classList.add('hover:bg-black');
                        });

                        updateBtn.addEventListener('mouseleave', () => {
                            refundBtn.classList.remove('hover:bg-black');
                            refundBtn.classList.add('hover:bg-red-800');
                        });
                    </script>
                </div>
            </div>
        </div>
    </header>

    <main class="container mx-auto py-12">
    <h2 class="text-4xl font-bold text-left">Recent Searches</h2>

    <!-- First Container with Image -->
    <div class="relative mt-6 w-full max-w-lg">
        <img src="{{ $imageUrl ?? asset('images/clear.png') }}" alt="Image description" class="rounded-md w-full">

        <div class="absolute top-4 left-4 text-white text-2xl p-2 rounded-md" style="font-family: 'Kanit'; text-shadow: 4px 4px 10px rgba(0, 0, 0, 0.8);">
            MANILA - BAGUIO
        </div>

        <!-- Date text below the image -->
        <div class="absolute bottom-4 left-4 text-white text-sm" style="font-family: 'Kanit'; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.8);">
            Oct 1
        </div>
    </div>

    <!-- Full-width Horizontal Divider -->
    <hr class="my-8 border-t-3 border-gray-300 w-full mx-0" style="box-shadow: 0 0 3px rgba(0, 0, 0, 0.2);">
    <h2 class="text-4xl font-bold text-left">Popular Routes in Philippines</h2>
    <hr class="mt-4 border-t-3 border-solid border-black w-full mx-0">

    <p class="mt-8">Manila > Baguio</p>
    <p class="mt-4">Nuvali (Sta. Rosa, Laguna) .> Makati (Glorietta 5) </p>
    <p class="mt-4">Nuvali.> BGC (Bonifacio Global City)</p>



</main>
<footer class="bg-black text-white py-6 mt-12">
    <div class="container mx-auto text-center">
        <p class="text-sm">&copy; Copyright 2024. All rights reserved.</p>
    </div>
</footer>

<!-- Floating Chat Head and Text -->
<div id="chat-head" class="fixed bottom-10 right-6 flex items-center bg-black text-white  rounded-full shadow-lg cursor-pointer hover:bg-black-600 transition-colors duration-300">
    <!-- Tooltip Text -->
    <div id="chat-tooltip" class="hidden ml-4 bg-black text-white text-xs rounded-lg py-2 px-4 transition-opacity duration-300">
        Hi! If you have any concerns, don’t hesitate to talk to us!
    </div>

    <!-- Chat Head Icon Image -->
    <div class="relative w-25 h-25"> <!-- Smaller size for the chat head -->
        <img src="{{ asset('images/chatH.png') }}" alt="Chat Icon" class="w-full h-full object-cover rounded-full">
    </div>
</div>

<script>
    const chatHead = document.getElementById('chat-head');
    const tooltip = document.getElementById('chat-tooltip');

    // Show the tooltip when hovering over the chat head
    chatHead.addEventListener('mouseenter', () => {
        tooltip.classList.remove('hidden');  // Make the tooltip visible
    });

    // Hide the tooltip when mouse leaves the chat head
    chatHead.addEventListener('mouseleave', () => {
        tooltip.classList.add('hidden');  // Hide the tooltip
    });
</script>





</body>

</html>
