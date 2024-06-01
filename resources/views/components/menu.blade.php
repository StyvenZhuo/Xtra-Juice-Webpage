<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')

    <title>Menu</title>
</head>
<body class="bg-yellow w-full max-w-screen-lg mx-auto">
    <!-- nav -->
    <header>
        <x-navbar />
    </header>

    <!-- 1 -->
    <section>
        <div class="container flex mx-16">
            <div class="mt-16">
                <div class="text-2xl sm:text-3xl font-bold text-hijau tracking-wider">
                    <h1 class="">Try Our Best Seller</h1>
                    <h1 class="">and taste the hype !</h1>
                </div>
                <div class="mt-4">
                    <p class="text-md md:text-xl text-hijau font-semibold">The best one among the menus in the shop !</p>
                    <p class="text-md md:text-xl text-hijau font-semibold">Juiced from the fruit freshly handpicked by the owner himself.</p>
                </div>
                <a href=""></a>
                    <button class="mt-5 text-md md:text-xl border-b-5 border-r-5 b-600 rounded-full border-4 ring ring-lime-600 bg-lime-600 text-white box-border h-8 w-24 md:h-12 md:w-28">
                        Explore
                    </button>
                </a>
            </div>
            <div class="relative">
            <!-- BUTUH PERBAIKAN -->
                <!-- <img src="{{ asset('storage/images/orangejuicemenu.png') }}" alt="" class="size-10/12  mt-2 lg:mt-2 object-cover"> -->
            </div>
        </div>
    </section>

        <!-- Menu -->
        <div class="text-center justify-center mt-60 text-4xl font-bold text-hijau tracking-widen">
                <h1 class="">Menu</h1>
            </div>
            <div class="">
                <div class="flex justify-center gap-12 mt-16">
                    <img src="{{ asset('storage/images/orangejuice.png') }}" alt="ellipse" class="h-32 sm:h-40 md:h-52 xl:h-52 lg:px-4 lg:py-2 hover:underline"/>
                    <img src="{{ asset('storage/images/avocadojuice.png') }}" alt="ellipse" class="h-32 sm:h-40 md:h-52 xl:h-52 lg:px-4 lg:py-2 hover:underline"/>
                    <img src="{{ asset('storage/images/guavajuice.png') }}" alt="ellipse" class="h-32 sm:h-40 md:h-52 xl:h-52 lg:px-4 lg:py-2 hover:underline"/>
                    <img src="{{ asset('storage/images/guavajuice.png') }}" alt="ellipse" class="h-32 sm:h-40 md:h-52 xl:h-52 lg:px-4 lg:py-2 hover:underline"/>
                </div>
                <div class="mx-auto">
                        <ul class="flex justify-center text-hijau text-md font-bold flex justify-center justify-between mx-16 sm:mx-20 md:mx-24">
                            <li class="">Orange Juice</li>
                            <li class="">Avocado Juice</li>
                            <li class="">Apple Juice</li>
                            <li class="">Name Juice</li>
                        </ul>
                        <ul class="flex justify-center gap-16 sm:gap-16 md:gap-16 lg:gap-16 text-hijau text-md font-base">
                            <li class="">Rp 10.000,-</li>
                            <li class="">Rp 10.000,-</li>
                            <li class="">Rp 7.000,-</li>
                            <li class="">Rp 15.000,-</li>
                        </ul>
                </div>
                <div class="flex justify-center gap-12 mt-16">
                    <img src="{{ asset('storage/images/orangejuice.png') }}" alt="ellipse" class="h-32 sm:h-40 md:h-52 xl:h-52 hover:underline"/>
                    <img src="{{ asset('storage/images/avocadojuice.png') }}" alt="ellipse" class="h-32 sm:h-40 md:h-52 xl:h-52 hover:underline"/>
                    <img src="{{ asset('storage/images/guavajuice.png') }}" alt="ellipse" class="h-32 sm:h-40 md:h-52 xl:h-52 hover:underline"/>
                    <img src="{{ asset('storage/images/guavajuice.png') }}" alt="ellipse" class="h-32 sm:h-40 md:h-52 xl:h-52 hover:underline"/>
                </div>
                <div class="mx-auto">
                        <ul class="flex justify-center gap-8 sm:gap-12 md:gap-12 lg:gap-12 text-hijau text-md font-bold">
                            <li class="">Orange Juice</li>
                            <li class="">Avocado Juice</li>
                            <li class="">Apple Juice</li>
                            <li class="">Name Juice</li>
                        </ul>
                        <ul class="flex justify-center gap-16 sm:gap-16 md:gap-16 lg:gap-16 text-hijau text-md font-base">
                            <li class="">Rp 10.000,-</li>
                            <li class="">Rp 10.000,-</li>
                            <li class="">Rp 7.000,-</li>
                            <li class="">Rp 15.000,-</li>
                        </ul>
                </div>
            </div>
        
        <!-- Additional Menu -->
        <div class="text-center justify-center mt-60 text-4xl font-bold text-hijau tracking-widen">
                <h1 class="">Additional Menu</h1>
        </div>
            <div class="">
                <div class="flex justify-center justify-between mx-16 mt-16">
                    <img src="{{ asset('storage/images/orangejuice.png') }}" alt="ellipse" class="h-32 sm:h-40 md:h-52 xl:h-52 lg:px-4 lg:py-2 hover:underline"/>
                    <img src="{{ asset('storage/images/avocadojuice.png') }}" alt="ellipse" class="h-32 sm:h-40 md:h-52 xl:h-52 lg:px-4 lg:py-2 hover:underline"/>
                    <img src="{{ asset('storage/images/guavajuice.png') }}" alt="ellipse" class="h-32 sm:h-40 md:h-52 xl:h-52 lg:px-4 lg:py-2 hover:underline"/>
                    <img src="{{ asset('storage/images/guavajuice.png') }}" alt="ellipse" class="h-32 sm:h-40 md:h-52 xl:h-52 lg:px-4 lg:py-2 hover:underline"/>
                </div>
                <div class="mx-auto">
                        <ul class="flex justify-center gap-12 sm:gap-44 md:gap-80 lg:gap-44 text-hijau text-md font-bold">
                            <li class="">Orange Juice</li>
                            <li class="">Avocado Juice</li>
                            <li class="">Apple Juice</li>
                            <li class="">Name Juice</li>
                        </ul>
                        <ul class="flex justify-center gap-16 sm:gap-44 md:gap-80 lg:gap-44 text-hijau text-md font-base">
                            <li class="">Rp 10.000,-</li>
                            <li class="">Rp 10.000,-</li>
                            <li class="">Rp 7.000,-</li>
                            <li class="">Rp 15.000,-</li>
                        </ul>
                </div>
                <div class="flex justify-center justify-between mx-16 mt-16">
                    <img src="{{ asset('storage/images/orangejuice.png') }}" alt="ellipse" class="h-32 sm:h-40 md:h-52 xl:h-52 lg:px-4 lg:py-2 hover:underline"/>
                    <img src="{{ asset('storage/images/avocadojuice.png') }}" alt="ellipse" class="h-32 sm:h-40 md:h-52 xl:h-52 lg:px-4 lg:py-2 hover:underline"/>
                    <img src="{{ asset('storage/images/guavajuice.png') }}" alt="ellipse" class="h-32 sm:h-40 md:h-52 xl:h-52 lg:px-4 lg:py-2 hover:underline"/>
                    <img src="{{ asset('storage/images/guavajuice.png') }}" alt="ellipse" class="h-32 sm:h-40 md:h-52 xl:h-52 lg:px-4 lg:py-2 hover:underline"/>
                </div>
                <div class="mx-auto">
                        <ul class="flex justify-center gap-12 sm:gap-44 md:gap-80 lg:gap-44 text-hijau text-md font-bold">
                            <li class="">Orange Juice</li>
                            <li class="">Avocado Juice</li>
                            <li class="">Apple Juice</li>
                            <li class="">Name Juice</li>
                        </ul>
                        <ul class="flex justify-center gap-16 sm:gap-44 md:gap-80 lg:gap-44 text-hijau text-md font-base">
                            <li class="">Rp 10.000,-</li>
                            <li class="">Rp 10.000,-</li>
                            <li class="">Rp 7.000,-</li>
                            <li class="">Rp 15.000,-</li>
                        </ul>
                </div>
        </div>
        
        
    </div>


</body>
</html>
<x-footer />