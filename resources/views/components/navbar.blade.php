<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <!-- TailwindCSS -->
    @vite('resources/css/app.css')
    <!-- AlpineJS -->
    <script src="//unpkg.com/alpinejs" defer></script>
    <title>Xtra-Juice</title>
</head>
<body>
    <nav class="container py-2 md:py-5 px-5 bg-yellow right-0 left-0 justify-between justify-center items-center mx-auto max-w-screen-2xl" x-data="{navOpen : true}">
        <div class="container mx-auto mt-auto">
            <div class="flex justify-between items-center sm:justify-start sm:gap-24 md:gap-36 lg:gap-72 xl:gap-60 2xl:gap-80 justify-center">
                <img src="{{ asset('storage/images/Logonew.png') }}" alt="Logo" class="h-16 sm:h-20 md:h-36 mt-5 sm:mt-12 md:mt-5 xl:ml-24 order-1 " />
                <div class="sm:hidden">
                    <button @click="navOpen = ! navOpen" class="text-green flex justify-center flex-col size-36 -mt-4">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>
                <div class="order-2 hidden sm:block">
                    <ul class="flex sm:gap-20 md:gap-20 lg:gap-36 xl:gap-44 2xl:gap-80 mt-12 lg:mt-12">
                        <li><button class="mt-5 border text-md md:text-md font-bold tracking-wider border-b-5 border-r-5 b-600 rounded-full border-4 bg-hijau text-white box-border h-8 w-20 sm:h-12 sm:w-28 md:h-12 md:w-28 border-transparent animate-border text-blue-500 font-semibold rounded-full hover:bg-blue-100 transition duration-500">
                            <a href="/">Home </a>
                            </button>
                        </li>
                        <li><button class="mt-5 border text-sm md:text-md font-bold tracking-wider border-b-5 border-r-5 b-600 rounded-full border-4 bg-hijau text-white box-border h-8 w-20 sm:h-12 sm:w-28 md:h-12 md:w-28 border-transparent animate-border text-blue-500 font-semibold rounded-full hover:bg-blue-100 transition duration-500">
                            <a href="/menu">Menu </a>
                            </button>
                        </li>
                        <li><button class="mt-5 border text-sm md:text-md font-bold tracking-wider border-b-5 border-r-5 b-600 rounded-full border-4 bg-hijau text-white box-border h-8 w-20 sm:h-12 sm:w-28 md:h-12 md:w-28 border-transparent animate-border text-blue-500 font-semibold rounded-full hover:bg-blue-100 transition duration-500">
                            <a href="/contact">Contact </a>
                            </button>
                        </li>
                        <li>
                            <a href="{{ route('login') }}"><img src="{{ asset('storage/images/Logoadmin.png') }}" alt="Logo" class="h-16 order-4 sm:-mt-1 md:-mt-0 xl:mr-24"/></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div x-show="navOpen" x-data="{open : false}" class="fixed bottom-0 right-0 left-0 bg-white px-0 py-2 rounded-full border sm:hidden"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 scale-90"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-300"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-90"
            >
            <ul class="flex justify-between mx-4">
                <li>
                    <button class="text-green flex justify-center flex-col items-center text-base gap-1 text-bold">
                        <ion-icon name="home-outline" class="text-xl"></ion-icon>
                        <span class="text-base font-bold tracking-wider"><a href="/">Home </a></span>
                </li>
                <li>
                    <button class="text-green flex justify-center flex-col items-center text-base gap-1 text-bold">
                        <ion-icon name="grid-outline"></ion-icon>
                        <span class="text-base font-bold tracking-wider"><a href="/menu">Menu </a></span>
                </li>
                <li>
                    <button class="text-green flex justify-center flex-col items-center text-base gap-1 text-bold">
                        <ion-icon name="call-outline"></ion-icon>
                        <span class="text-base font-bold tracking-wider"><a href="/contact">Contact </a></span>
                </li>
                <li>
                    <button @click="open = !open" class="text-green flex justify-center flex-col items-center text-base gap-1 text-bold">
                        <ion-icon name="menu-outline"></ion-icon>
                        <span class="text-base font-bold tracking-wider">Admin Page</span>
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
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>