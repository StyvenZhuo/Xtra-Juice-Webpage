<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')

    <title>Menu</title>
</head>
<body class="bg-yellow min-h-screen">
    <!-- nav -->
    <header>
        <x-navbar />
    </header>

    <!-- 1 -->
    <section>
        <div class="flex lg:mx-24">
            <div class="mt-16 ml-16 sm:ml-32 md:ml-48 xl:ml-60">
                <div>
                    <h1 class="text-xl md:text-2xl font-bold text-hijau">Try Our Best Seller</h1>
                    <h1 class="text-xl md:text-2xl font-bold text-hijau">and taste the hype !</h1>
                </div>
                <div class="mt-4">
                    <p class="text-md md:text-xl text-hijau font-semibold">The best one among the menus in the shop !</p>
                    <p class="text-md md:text-xl text-hijau font-semibold">Juiced from the fruit freshly handpicked by the owner himself.</p>
                </div>
                <a href=""></a>
                    <button class="mt-5 border text-md md:text-xl border-b-5 border-r-5 b-600 rounded-full border-4 ring ring-lime-600 bg-lime-600 text-white box-border h-8 w-24 md:h-12 md:w-36">
                        Explore
                    </button>
                </a>
            </div>
            <div class="relative">
            <!-- BUTUH PERBAIKAN -->
                <img src="{{ asset('storage/images/orangejuicemenu.png') }}" alt="" class="size-10/12  mt-2 lg:mt-2 object-cover">
            </div>
        </div>
    </section>

        <!-- Menu -->
        <div class="items-center justify-center ">
            <div class="text-center justify-center text-4xl font-bold text-hijau capitalize -mt-20 sm:-mt-72 md:-mt-80 lg:mt-8">
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