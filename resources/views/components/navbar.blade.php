<!-- resources/views/components/header.blade.php -->
<header class="bg-black text-white py-2">
    <div class="container mx-auto flex justify-between items-center px-4">
        <h1 class="text-xl font-bold">
            <span class="text-red-600">TICKETWISE</span>
            <span class="text-white">BUS</span>
        </h1>
        <div class="flex items-center">
            <span class="mr-2 text-sm">{{ $role ?? 'Admin' }}</span> <!-- Dynamic role -->
            <div class="bg-gray-1 rounded-full h-8 w-8 overflow-hidden">
                <img src="{{ $imageUrl ?? asset('images/admin.png') }}" alt="" class="h-full w-full object-cover">
            </div>
        </div>
    </div>
</header>
<div class="h-0.5 bg-red-600"></div>
