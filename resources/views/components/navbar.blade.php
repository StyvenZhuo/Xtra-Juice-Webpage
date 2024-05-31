<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- TailwindCSS -->
    @vite('resources/css/app.css')
    <!-- AlpineJS -->
    <script src="//unpkg.com/alpinejs" defer></script>
    <title>Xtra-Juice</title>
</head>
<body>
    <nav class="py-9 px-4 bg-yellow right-0 left-0 justify-between" x-data="{navOpen : true}">
        <div class="container mx-auto mt-auto items-center">
            <div class="flex gap-36 sm:gap-4 md:gap-8 lg:gap-36 justify-center">
                <img src="{{ asset('storage/images/Logonew.png') }}" alt="Logo" class="h-36 mt-5 order-1 " />
                <div class="lg:hidden">
                    <button @click="navOpen = ! navOpen" class="text-green flex justify-center flex-col size-24 ml-8">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>
                <div class="order-2 hidden sm:block justify">
                    <ul class="flex sm:gap-4 md:gap-20 lg:gap-44 mt-12 mx-12 lg:mt-12">
                        <li><button class="mt-5 border text-md md:text-xl border-b-5 border-r-5 b-600 rounded-full border-4 bg-hijau text-white box-border h-8 w-24 md:h-12 md:w-36">
                            <a href="/">Home </a>
                            </button>
                        </li>
                        <li><button class="mt-5 border text-md md:text-xl border-b-5 border-r-5 b-600 rounded-full border-4 bg-hijau text-white box-border h-8 w-24 md:h-12 md:w-36">
                            <a href="/menu">Menu </a>
                            </button>
                        </li>
                        <li><button class="mt-5 border text-md md:text-xl border-b-5 border-r-5 b-600 rounded-full border-4 bg-hijau text-white box-border h-8 w-24 md:h-12 md:w-36">
                            <a href="/contact">Contact </a>
                            </button>
                        </li>
                        <li>
                            <a href="{{ route('login') }}"><img src="{{ asset('storage/images/Logoadmin.png') }}" alt="Logo" class="md:h-24 h-16 order-4 sm:-mt-4 md:-mt-6"/></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div x-show="navOpen" x-data="{open : false}" class="fixed bottom-0 right-0 left-0 bg-white p-4 border lg:hidden"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 scale-90"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-300"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-90"
            >
            <ul class="flex justify-between">
                <li>
                    <button class="text-green flex justify-center flex-col items-center text-base gap-1 text-bold">
                        <ion-icon name="home-outline" class="text-2xl"></ion-icon>
                        <span class="text-base font-bold">Home</span>
                </li>
                <li>
                    <button class="text-green flex justify-center flex-col items-center text-base gap-1 text-bold">
                        <ion-icon name="grid-outline"></ion-icon>
                        <span class="text-base font-bold">Menu</span>
                </li>
                <li>
                    <button class="text-green flex justify-center flex-col items-center text-base gap-1 text-bold">
                        <ion-icon name="call-outline"></ion-icon>
                        <span class="text-base font-bold">Contact</span>
                </li>
                <li>
                    <button @click="open = !open" class="text-green flex justify-center flex-col items-center text-base gap-1 text-bold">
                        <ion-icon name="menu-outline"></ion-icon>
                        <span class="text-base font-bold">More</span>
                </li>
            </ul>
            <div 
            x-show="open" 
            class="absolute bottom-24 left-1/2 -translate-x-1/2 flex gap-4 w-3/4"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 scale-90"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-300"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-90">
                <button class="grow bg-white px-8 font-bold text-green rounded-full text-sm">Login</button>
                <button class="grow bg-green px-8 font-bold text-white rounded-full text-sm">Sign Up</button>
            </div>
        </div>
    </nav>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
</body>
</html>