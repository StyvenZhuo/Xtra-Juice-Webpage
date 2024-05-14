<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')

    <title>Document</title>
</head>
<body class="bg-yellow">
<x-navbar />
    <div>
        <div>
            <div class="flex flex-col items-left ml-24 sm:ml-28 lg:ml-48 mt-12 sm:mt-16 lg:mt-24">
                <div class="flex flex-col items-left">
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-hijau">Try Our Best Seller</h1>
                    <p class="text-4xl sm:text-5xl lg:text-6xl mt-2 font-bold text-hijau">and taste the hype !</p>
                </div>
                <div class="mt-5 text-hijau font-semibold text-base text-xl sm:text-2xl md:text-2xl lg:text-3xl">
                    <p>The best one among the menus in the shop ! </p>
                    <p>Juiced from the fruit freshly handpicked by</p>
                    <p>the owner himself.</p>
                </div>
            </div>
            <div class="flex">
                <a href="">
                    <button class="ml-20 sm:ml-48 lg:ml-55 mt-7 border text-xl border-b-5 border-r-5 b-600 rounded-full border-4 ring ring-hijau bg-hijau text-white font-semibold box-border h-12 w-36 items-left lg:ml-48">
                        Buy now
                    </button>
                </a>
                <img src="{{ asset('storage/images/orangejuicemenu.png') }}" alt="ellipse" class="size-fit lg:size-10/12 -mt-80 sm:-mt-96 md:-mt-auto lg:-mt-auto -ml-8 lg:ml-36 px-4 py-2 hover:underline mb-30"/>
            </div>
        </div>
        <!-- Menu -->
        <div class="items-center justify-center">
            <div class="text-center justify-center text-4xl font-bold text-hijau capitalize -mt-20 sm:-mt-72 md:-mt-80 lg:-mt-96">
                Menu
            </div>
                <div class="flex gap-9 md:gap-36 lg:gap-16 items-center justify-center mt-20">
                    <img src="{{ asset('storage/images/orangejuice.png') }}" alt="ellipse" class="size-60 sm:size-60 md:size-72 lg:size-64 lg:px-4 lg:py-2 hover:underline"/>
                    <img src="{{ asset('storage/images/avocadojuice.png') }}" alt="ellipse" class="size-60 sm:size-60 md:size-72 lg:size-64 lg:px-4 lg:py-2 hover:underline"/>
                    <img src="{{ asset('storage/images/guavajuice.png') }}" alt="ellipse" class="size-60 sm:size-60 md:size-72 lg:size-64 lg:px-4 lg:py-2 hover:underline"/>
                    <img src="{{ asset('storage/images/guavajuice.png') }}" alt="ellipse" class="size-60 sm:size-60 md:size-72 lg:size-64 lg:px-4 lg:py-2 hover:underline"/>
                </div>
                <form method="POST" action="/">
                    @csrf
                    <div class="">
                        <ul class="flex justify-center gap-24 sm:gap-44 md:gap-80 lg:gap-44">
                            <li class="text-hijau text-2xl font-bold">Orange Juice</li>
                            <li class="text-hijau text-2xl font-bold">Avocado Juice</li>
                            <li class="text-hijau text-2xl font-bold">Apple Juice</li>
                            <li class="text-hijau text-2xl font-bold">Name Juice</li>
                        </ul>
                        <ul class="flex justify-center gap-24 sm:gap-44 md:gap-80 lg:gap-44">
                            <li class="text-hijau text-2xl font-base">Rp 10.000,-</li>
                            <li class="text-hijau text-2xl font-base">Rp 10.000,-</li>
                            <li class="text-hijau text-2xl font-base">Rp 7.000,-</li>
                            <li class="text-hijau text-2xl font-base">Rp 15.000,-</li>
                        </ul>
                    </div>
                <div class="flex gap-9 md:gap-36 lg:gap-10 items-center justify-center lg:mt-12">
                    <img src="{{ asset('storage/images/orangejuice.png') }}" alt="ellipse" class="size-60 sm:size-60 md:size-72 lg:size-64 lg:px-4 lg:py-2 hover:underline"/>
                    <img src="{{ asset('storage/images/avocadojuice.png') }}" alt="ellipse" class="size-60 sm:size-60 md:size-72 lg:size-64 lg:px-4 lg:py-2 hover:underline"/>
                    <img src="{{ asset('storage/images/guavajuice.png') }}" alt="ellipse" class="size-60 sm:size-60 md:size-72 lg:size-64 lg:px-4 lg:py-2 hover:underline"/>
                    <img src="{{ asset('storage/images/guavajuice.png') }}" alt="ellipse" class="size-60 sm:size-60 md:size-72 lg:size-64 lg:px-4 lg:py-2 hover:underline"/>
                </div>
                <div class="">
                    <ul class="flex justify-center gap-24 sm:gap-44 md:gap-80 lg:gap-44">
                        <li class="text-hijau text-2xl font-bold">Name Juice</li>
                        <li class="text-hijau text-2xl font-bold">Name Juice</li>
                        <li class="text-hijau text-2xl font-bold">Name Juice</li>
                        <li class="text-hijau text-2xl font-bold">Name Juice</li>
                    </ul>
                    <ul class="flex justify-center gap-24 sm:gap-44 md:gap-80 lg:gap-44">
                        <li class="text-hijau text-2xl font-base">Rp 10.000,-</li>
                        <li class="text-hijau text-2xl font-base">Rp 10.000,-</li>
                        <li class="text-hijau text-2xl font-base">Rp 7.000,-</li>
                        <li class="text-hijau text-2xl font-base">Rp 15.000,-</li>
                    </ul>
                </div>
            </form>
        </div>
        <!-- Additional Menu -->
        <div class="items-center justify-center">
            <div class="text-center justify-center text-4xl font-bold text-hijau capitalize -mt-20 sm:-mt-72 md:-mt-80 lg:mt-64">
                Additional Menu
            </div>
                <div class="flex gap-9 md:gap-36 lg:gap-16 items-center justify-center mt-20">
                    <img src="{{ asset('storage/images/orangejuice.png') }}" alt="ellipse" class="size-60 sm:size-60 md:size-72 lg:size-64 lg:px-4 lg:py-2 hover:underline"/>
                    <img src="{{ asset('storage/images/avocadojuice.png') }}" alt="ellipse" class="size-60 sm:size-60 md:size-72 lg:size-64 lg:px-4 lg:py-2 hover:underline"/>
                    <img src="{{ asset('storage/images/guavajuice.png') }}" alt="ellipse" class="size-60 sm:size-60 md:size-72 lg:size-64 lg:px-4 lg:py-2 hover:underline"/>
                    <img src="{{ asset('storage/images/guavajuice.png') }}" alt="ellipse" class="size-60 sm:size-60 md:size-72 lg:size-64 lg:px-4 lg:py-2 hover:underline"/>
                </div>
                <form method="POST" action="/">
                    @csrf
                    <div class="">
                        <ul class="flex justify-center gap-24 sm:gap-44 md:gap-80 lg:gap-44">
                            <li class="text-hijau text-2xl font-bold">Orange Juice</li>
                            <li class="text-hijau text-2xl font-bold">Avocado Juice</li>
                            <li class="text-hijau text-2xl font-bold">Apple Juice</li>
                            <li class="text-hijau text-2xl font-bold">Name Juice</li>
                        </ul>
                        <ul class="flex justify-center gap-24 sm:gap-44 md:gap-80 lg:gap-48">
                            <li class="text-hijau text-2xl font-base">Rp 10.000,-</li>
                            <li class="text-hijau text-2xl font-base">Rp 10.000,-</li>
                            <li class="text-hijau text-2xl font-base">Rp 7.000,-</li>
                            <li class="text-hijau text-2xl font-base">Rp 15.000,-</li>
                        </ul>
                    </div>
                <div class="flex gap-9 md:gap-36 lg:gap-10 items-center justify-center lg:mt-12">
                    <img src="{{ asset('storage/images/orangejuice.png') }}" alt="ellipse" class="size-60 sm:size-60 md:size-72 lg:size-64 lg:px-4 lg:py-2 hover:underline"/>
                    <img src="{{ asset('storage/images/avocadojuice.png') }}" alt="ellipse" class="size-60 sm:size-60 md:size-72 lg:size-64 lg:px-4 lg:py-2 hover:underline"/>
                    <img src="{{ asset('storage/images/guavajuice.png') }}" alt="ellipse" class="size-60 sm:size-60 md:size-72 lg:size-64 lg:px-4 lg:py-2 hover:underline"/>
                    <img src="{{ asset('storage/images/guavajuice.png') }}" alt="ellipse" class="size-60 sm:size-60 md:size-72 lg:size-64 lg:px-4 lg:py-2 hover:underline"/>
                </div>
                <div class="">
                    <ul class="flex justify-center gap-24 sm:gap-44 md:gap-80 lg:gap-44">
                        <li class="text-hijau text-2xl font-bold">Name Juice</li>
                        <li class="text-hijau text-2xl font-bold">Name Juice</li>
                        <li class="text-hijau text-2xl font-bold">Name Juice</li>
                        <li class="text-hijau text-2xl font-bold">Name Juice</li>
                    </ul>
                    <ul class="flex justify-center gap-24 sm:gap-44 md:gap-80 lg:gap-48">
                        <li class="text-hijau text-2xl font-base">Rp 10.000,-</li>
                        <li class="text-hijau text-2xl font-base">Rp 10.000,-</li>
                        <li class="text-hijau text-2xl font-base">Rp 7.000,-</li>
                        <li class="text-hijau text-2xl font-base">Rp 15.000,-</li>
                    </ul>
                </div>
            </form>
        </div>
        
        
    </div>


</body>
</html>
<x-footer />