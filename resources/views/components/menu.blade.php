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
    <section class="container ">
            <div class="flex">
                <div class="mt-28 ml-16 sm:ml-32 md:ml-48 xl:mx-12">
                    <div>
                        <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold font-sans text-hijau tracking-wider">Try Our Best Seller</h1>
                        <h1 class="text-2xl sm:text-3xl md:text-4xl mt-1 font-bold text-hijau tracking-wider">and taste the hype !</h1>
                    </div>
                    <div class="mt-2">
                        <p class="text-md md:text-xl text-hijau font-semibold tracking-widen">The best one among the menus in the shop ! Juiced from the fruit freshly handpicked by the owner himself.</p>
                    </div>
                    <a href=""></a>
                        <button class="mt-5 border text-md md:text-xl border-b-5 border-r-5 b-600 rounded-full border-4 ring ring-hijau bg-hijau text-white box-border h-10 w-24 md:h-12 md:w-36">
                            Explore
                        </button> 
                    </a>
                </div>
                <div class="">
                    <!-- BUTUH PERBAIKAN 
                    <img src="{{ asset('storage/images/orangejuicemenu.png') }}" alt="" class="size-11/12"> -->
                </div>
            </div>
        </section>

        <!-- Menu -->
        <div class="text-center justify-center mt-60 text-4xl font-bold text-hijau tracking-widen">
                <h1 class="">Menu</h1>
            </div>
            <div class="container mt-24 mx-auto">
                <div class="flex justify-center justify-between mx-16 mt-16">
                    <img src="{{ asset('storage/images/orangejuice.png') }}" alt="ellipse" class="h-32 sm:h-40 md:h-52 xl:h-52 lg:px-4 lg:py-2 hover:underline"/>
                    <img src="{{ asset('storage/images/avocadojuice.png') }}" alt="ellipse" class="h-32 sm:h-40 md:h-52 xl:h-52 lg:px-4 lg:py-2 hover:underline"/>
                    <img src="{{ asset('storage/images/guavajuice.png') }}" alt="ellipse" class="h-32 sm:h-40 md:h-52 xl:h-52 lg:px-4 lg:py-2 hover:underline"/>
                    <img src="{{ asset('storage/images/guavajuice.png') }}" alt="ellipse" class="h-32 sm:h-40 md:h-52 xl:h-52 lg:px-4 lg:py-2 hover:underline"/>
                </div>
                <div class="justify-center justify-between mx-16 sm:mx-20 md:mx-24">
                        <ul class="flex justify-center text-hijau text-md font-bold justify-center justify-between">
                            <li class="">Orange Juice</li>
                            <li class="">Avocado Juice</li>
                            <li class="">Apple Juice</li>
                            <li class="">Name Juice</li>
                        </ul>
                        <ul class="flex justify-center text-hijau text-md font-base justify-center justify-between">
                            <li class="">Rp 10.000,-</li>
                            <li class="">Rp 10.000,-</li>
                            <li class="">Rp 7.000,-</li>
                            <li class="">Rp 15.000,-</li>
                        </ul>
                </div>
                <div class="flex justify-center justify-between mx-16 mt-16">
                    <img src="{{ asset('storage/images/orangejuice.png') }}" alt="ellipse" class="h-32 sm:h-40 md:h-52 xl:h-52 hover:underline"/>
                    <img src="{{ asset('storage/images/avocadojuice.png') }}" alt="ellipse" class="h-32 sm:h-40 md:h-52 xl:h-52 hover:underline"/>
                    <img src="{{ asset('storage/images/guavajuice.png') }}" alt="ellipse" class="h-32 sm:h-40 md:h-52 xl:h-52 hover:underline"/>
                    <img src="{{ asset('storage/images/guavajuice.png') }}" alt="ellipse" class="h-32 sm:h-40 md:h-52 xl:h-52 hover:underline"/>
                </div>
                <div class="justify-center justify-between mx-16 sm:mx-20 md:mx-24">
                        <ul class="flex justify-center text-hijau text-md font-bold justify-center justify-between">
                            <li class="">Orange Juice</li>
                            <li class="">Avocado Juice</li>
                            <li class="">Apple Juice</li>
                            <li class="">Name Juice</li>
                        </ul>
                        <ul class="flex justify-center text-hijau text-md font-base justify-center justify-between">
                            <li class="">Rp 10.000,-</li>
                            <li class="">Rp 10.000,-</li>
                            <li class="">Rp 7.000,-</li>
                            <li class="">Rp 15.000,-</li>
                        </ul>
                </div>
            </div>
        
        <!-- Additional Menu -->
        <div class="text-center justify-center mt-60 text-4xl font-bold text-hijau tracking-widen">
                <h1 class="">Menu</h1>
            </div>
            <div class="container mt-24 mx-auto">
                <div class="flex justify-center justify-between mx-16 mt-16">
                    <img src="{{ asset('storage/images/orangejuice.png') }}" alt="ellipse" class="h-32 sm:h-40 md:h-52 xl:h-52 lg:px-4 lg:py-2 hover:underline"/>
                    <img src="{{ asset('storage/images/avocadojuice.png') }}" alt="ellipse" class="h-32 sm:h-40 md:h-52 xl:h-52 lg:px-4 lg:py-2 hover:underline"/>
                    <img src="{{ asset('storage/images/guavajuice.png') }}" alt="ellipse" class="h-32 sm:h-40 md:h-52 xl:h-52 lg:px-4 lg:py-2 hover:underline"/>
                    <img src="{{ asset('storage/images/guavajuice.png') }}" alt="ellipse" class="h-32 sm:h-40 md:h-52 xl:h-52 lg:px-4 lg:py-2 hover:underline"/>
                </div>
                <div class="justify-center justify-between mx-16 sm:mx-20 md:mx-24">
                        <ul class="flex justify-center text-hijau text-md font-bold justify-center justify-between">
                            <li class="">Orange Juice</li>
                            <li class="">Avocado Juice</li>
                            <li class="">Apple Juice</li>
                            <li class="">Name Juice</li>
                        </ul>
                        <ul class="flex justify-center text-hijau text-md font-base justify-center justify-between">
                            <li class="">Rp 10.000,-</li>
                            <li class="">Rp 10.000,-</li>
                            <li class="">Rp 7.000,-</li>
                            <li class="">Rp 15.000,-</li>
                        </ul>
                </div>
                <div class="flex justify-center justify-between mx-16 mt-16">
                    <img src="{{ asset('storage/images/orangejuice.png') }}" alt="ellipse" class="h-32 sm:h-40 md:h-52 xl:h-52 hover:underline"/>
                    <img src="{{ asset('storage/images/avocadojuice.png') }}" alt="ellipse" class="h-32 sm:h-40 md:h-52 xl:h-52 hover:underline"/>
                    <img src="{{ asset('storage/images/guavajuice.png') }}" alt="ellipse" class="h-32 sm:h-40 md:h-52 xl:h-52 hover:underline"/>
                    <img src="{{ asset('storage/images/guavajuice.png') }}" alt="ellipse" class="h-32 sm:h-40 md:h-52 xl:h-52 hover:underline"/>
                </div>
                <div class="justify-center justify-between mx-16 sm:mx-20 md:mx-24">
                        <ul class="flex justify-center text-hijau text-md font-bold justify-center justify-between">
                            <li class="">Name Juice</li>
                            <li class="">Name Juice</li>
                            <li class="">Name Juice</li>
                            <li class="">Name Juice</li>
                        </ul>
                        <ul class="flex justify-center text-hijau text-md font-base justify-center justify-between">
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