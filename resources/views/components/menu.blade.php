<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')

    <title>Menu</title>
</head>

@php
$product = App\Models\Product::all();
@endphp

<body class="bg-yellow w-full max-w-screen-lg mx-auto">
    <!-- nav -->
    <header>
        <x-navbar />
    </header>

    <!-- 1 -->
    <section class="container flex mx-auto -mt-10 sm:mt-28">
        <div class="flex flex-col">
            <div class="sm:hidden mx-auto">
                <img src="{{ asset('storage/images/menupic.png') }}" alt="ellipse" class="h-96  hover:underline"/> 
            </div>
            <div class="-mt-32 sm:mt-0 mx-8 md:ml-48 xl:mx-12 text-center sm:text-left">
                <div class="mx-auto md:-ml-24 lg:ml-4">
                    <h1 class="text-4xl sm:text-3xl md:text-4xl font-bold font-sans text-hijau tracking-wider">Try our Best Seller and taste the hype !</h1>
                    <span class="text-kuning text-3xl mx-auto sm:-ml-0 my-4">&#9733;</span>
                    <span class="text-kuning text-3xl mx-auto sm:-ml-0 my-4">&#9733;</span>
                    <span class="text-kuning text-3xl mx-auto sm:-ml-0 my-4">&#9733;</span>
                    <span class="text-kuning text-3xl mx-auto sm:-ml-0 my-4">&#9733;</span>
                    <span class="text-kuning text-3xl mx-auto sm:-ml-0 my-4">&#9733;</span>
                </div>
                <div class="mt-2 sm:-ml-24 lg:ml-4">
                    <p class="text-md md:text-2xl text-hijau font-semibold tracking-widen">The best one among the menus in the shop ! Juiced from the fruit freshly handpicked by the owner himself.</p>
                </div>
                <a href=""></a>
                    <button class="sm:-ml-24 lg:ml-4 tracking-wider mt-5 border text-md md:text-xl border-b-5 border-r-5 b-600 rounded-full border-4 ring ring-hijau bg-hijau text-white box-border h-10 w-24 md:h-12 md:w-36 border-transparent animate-border text-blue-500 font-semibold rounded-lg hover:bg-blue-100 transition duration-300">
                        Buy Now
                    </button> 
                </a>
            </div>
            </div>
            <div class="mt-24 h-96 md:-mt-28 sm:mt-0 md:mx-8 hidden sm:block">
                <img src="{{ asset('storage/images/menupic.png') }}" alt="ellipse" class="hover:underline"/>
            </div>
    </section>

        <!-- Menu mobile mode -->
        <div class="container md:hidden">
            <div class="text-center justify-center mt-60 text-4xl font-bold text-hijau tracking-widen">
                    <h1 class="">Menu</h1>
                </div>
                <div class="container mt-24 mx-auto">
                    <!-- baris 1 -->
                    <div class="flex justify-center justify-between mx-8 mt-16">
                        <img src="{{ asset('storage/images/orangejuice1.png') }}" alt="ellipse" class="h-40 sm:h-40 md:h-52 xl:h-52 lg:px-4 lg:py-2 hover:underline"/>
                        <img src="{{ asset('storage/images/avocadojuice.png') }}" alt="ellipse" class="h-40 sm:h-40 md:h-52 xl:h-52 lg:px-4 lg:py-2 hover:underline"/>
                        <img src="{{ asset('storage/images/guavajuice.png') }}" alt="ellipse" class="h-40 sm:h-40 md:h-52 xl:h-52 lg:px-4 lg:py-2 hover:underline"/>
                    </div>
                    <div class="justify-center justify-between mx-12 sm:mx-20 md:mx-24">
                            <ul class="flex justify-center text-hijau text-md font-bold justify-center justify-between">
                                <li class="">Orange Juice</li>
                                <li class="">Avocado Juice</li>
                                <li class="">Apple Juice</li>
                            </ul>
                            <ul class="flex justify-center text-hijau text-md font-base justify-between">
                                <li class="">Rp 10.000,-</li>
                                <li class="">Rp 10.000,-</li>
                                <li class="">Rp 7.000,-</li>
                            </ul>
                    </div>
                    <!-- baris 2 -->
                    <div class="flex justify-center justify-between mx-8 mt-6">
                        <img src="{{ asset('storage/images/orangejuice1.png') }}" alt="ellipse" class="h-40 sm:h-40 md:h-52 xl:h-52 lg:px-4 lg:py-2 hover:underline"/>
                        <img src="{{ asset('storage/images/avocadojuice.png') }}" alt="ellipse" class="h-40 sm:h-40 md:h-52 xl:h-52 lg:px-4 lg:py-2 hover:underline"/>
                        <img src="{{ asset('storage/images/guavajuice.png') }}" alt="ellipse" class="h-40 sm:h-40 md:h-52 xl:h-52 lg:px-4 lg:py-2 hover:underline"/>
                    </div>
                    <div class="justify-center justify-between mx-12 sm:mx-20 md:mx-24">
                            <ul class="flex justify-center text-hijau text-md font-bold justify-center justify-between">
                                <li class="">Orange Juice</li>
                                <li class="">Avocado Juice</li>
                                <li class="">Apple Juice</li>
                            </ul>
                            <ul class="flex justify-center text-hijau text-md font-base justify-between">
                                <li class="">Rp 10.000,-</li>
                                <li class="">Rp 10.000,-</li>
                                <li class="">Rp 7.000,-</li>
                            </ul>
                    </div>
                    <!-- baris 3 -->
                    <div class="flex justify-center justify-between mx-8 mt-6">
                        <img src="{{ asset('storage/images/orangejuice1.png') }}" alt="ellipse" class="h-40 sm:h-40 md:h-52 xl:h-52 lg:px-4 lg:py-2 hover:underline"/>
                        <img src="{{ asset('storage/images/avocadojuice.png') }}" alt="ellipse" class="h-40 sm:h-40 md:h-52 xl:h-52 lg:px-4 lg:py-2 hover:underline"/>
                        <img src="{{ asset('storage/images/guavajuice.png') }}" alt="ellipse" class="h-40 sm:h-40 md:h-52 xl:h-52 lg:px-4 lg:py-2 hover:underline"/>
                    </div>
                    <div class="justify-center justify-between mx-12 sm:mx-20 md:mx-24">
                            <ul class="flex justify-center text-hijau text-md font-bold justify-center justify-between">
                                <li class="">Orange Juice</li>
                                <li class="">Avocado Juice</li>
                                <li class="">Apple Juice</li>
                            </ul>
                            <ul class="flex justify-center text-hijau text-md font-base justify-between">
                                <li class="">Rp 10.000,-</li>
                                <li class="">Rp 10.000,-</li>
                                <li class="">Rp 7.000,-</li>
                            </ul>
                    </div>
                    <!-- baris 4 -->
                    <div class="flex justify-center justify-between mx-8 mt-6">
                        <img src="{{ asset('storage/images/orangejuice1.png') }}" alt="ellipse" class="h-40 sm:h-40 md:h-52 xl:h-52 lg:px-4 lg:py-2 hover:underline"/>
                        <img src="{{ asset('storage/images/avocadojuice.png') }}" alt="ellipse" class="h-40 sm:h-40 md:h-52 xl:h-52 lg:px-4 lg:py-2 hover:underline"/>
                        <img src="{{ asset('storage/images/guavajuice.png') }}" alt="ellipse" class="h-40 sm:h-40 md:h-52 xl:h-52 lg:px-4 lg:py-2 hover:underline"/>
                    </div>
                    <div class="justify-center justify-between mx-12 sm:mx-20 md:mx-24">
                            <ul class="flex justify-center text-hijau text-md font-bold justify-center justify-between">
                                <li class="">Orange Juice</li>
                                <li class="">Avocado Juice</li>
                                <li class="">Apple Juice</li>
                            </ul>
                            <ul class="flex justify-center text-hijau text-md font-base justify-between">
                                <li class="">Rp 10.000,-</li>
                                <li class="">Rp 10.000,-</li>
                                <li class="">Rp 7.000,-</li>
                            </ul>
                    </div>
                    <!-- baris 5 -->
                    <div class="flex justify-center justify-between mx-8 mt-6">
                        <img src="{{ asset('storage/images/orangejuice1.png') }}" alt="ellipse" class="h-40 sm:h-40 md:h-52 xl:h-52 lg:px-4 lg:py-2 hover:underline"/>
                        <img src="{{ asset('storage/images/avocadojuice.png') }}" alt="ellipse" class="h-40 sm:h-40 md:h-52 xl:h-52 lg:px-4 lg:py-2 hover:underline"/>
                        <img src="{{ asset('storage/images/guavajuice.png') }}" alt="ellipse" class="h-40 sm:h-40 md:h-52 xl:h-52 lg:px-4 lg:py-2 hover:underline"/>
                    </div>
                    <div class="justify-center justify-between mx-12 sm:mx-20 md:mx-24">
                            <ul class="flex justify-center text-hijau text-md font-bold justify-center justify-between">
                                <li class="">Orange Juice</li>
                                <li class="">Avocado Juice</li>
                                <li class="">Apple Juice</li>
                            </ul>
                            <ul class="flex justify-center text-hijau text-md font-base justify-between">
                                <li class="">Rp 10.000,-</li>
                                <li class="">Rp 10.000,-</li>
                                <li class="">Rp 7.000,-</li>
                            </ul>
                    </div>
                    <!-- baris 6 -->
                    <div class="flex justify-center justify-between mx-8 mt-6">
                        <img src="{{ asset('storage/images/orangejuice1.png') }}" alt="ellipse" class="h-40 sm:h-40 md:h-52 xl:h-52 lg:px-4 lg:py-2 hover:underline"/>
                        <img src="{{ asset('storage/images/avocadojuice.png') }}" alt="ellipse" class="h-40 sm:h-40 md:h-52 xl:h-52 lg:px-4 lg:py-2 hover:underline"/>
                        <img src="{{ asset('storage/images/guavajuice.png') }}" alt="ellipse" class="h-40 sm:h-40 md:h-52 xl:h-52 lg:px-4 lg:py-2 hover:underline"/>
                    </div>
                    <div class="justify-center justify-between mx-12 sm:mx-20 md:mx-24">
                            <ul class="flex justify-center text-hijau text-md font-bold justify-center justify-between">
                                <li class="">Orange Juice</li>
                                <li class="">Avocado Juice</li>
                                <li class="">Apple Juice</li>
                            </ul>
                            <ul class="flex justify-center text-hijau text-md font-base justify-between">
                                <li class="">Rp 10.000,-</li>
                                <li class="">Rp 10.000,-</li>
                                <li class="">Rp 7.000,-</li>
                            </ul>
                    </div>
                    
                </div>
        </div>


        
                    
        <!-- Menu size sm to lg -->
        <div class="hidden md:block">
            <div class="text-center justify-center mt-60 text-4xl font-bold text-hijau tracking-wider">
                <h1 class="">Menu</h1>
            </div>
            <div class="container mt-8 mx-auto">
                @include('components.menu_bv')
        </div>
                    <!-- 2 -->
                    <!-- <div class="flex justify-center justify-between md:mx-16 mt-16">
                        <img src="{{ asset('storage/images/avocadojuice.png') }}" alt="ellipse" class="md:h-60 lg:h-72 xl:h-60 hover:underline"/>
                        <img src="{{ asset('storage/images/lemonjuice.png') }}" alt="ellipse" class="md:h-60 lg:h-72 xl:h-60 lg:px-4 lg:py-2 hover:underline"/>
                        <img src="{{ asset('storage/images/mangojuice.png') }}" alt="ellipse" class="md:h-60 lg:h-72 xl:h-60 lg:px-4 lg:py-2 hover:underline"/>
                        <img src="{{ asset('storage/images/cornjuice.png') }}" alt="ellipse" class="md:h-60 lg:h-72 xl:h-60 lg:px-4 lg:py-2 hover:underline"/>
                    </div>
                    <div class="justify-center justify-between md:mx-16 lg:mx-24 xl:mx-24">
                            <ul class="flex justify-center justify-between text-hijau text-2xl md:mx-3 font-bold mt-2">
                                <li class="">Avocado Juice</li>
                                <li class="">Lemon Juice</li>
                                <li class="">Mango Juice</li>
                                <li class="">Corn Juice</li>
                            </ul>
                            <ul class="flex justify-center text-hijau text-2xl font-base justify-between md:mx-6 mt-2">
                                <li class="">Rp 10.000,-</li>
                                <li class="">Rp 10.000,-</li>
                                <li class="">Rp 10.000,-</li>
                                <li class="">Rp 10.000,-</li>
                            </ul>
                    </div> -->
                    <!-- 3 -->
                    <!--
                    <div class="flex justify-center justify-between md:mx-16 mt-16">
                        <img src="{{ asset('storage/images/melonjuice.png') }}" alt="ellipse" class="md:h-60 lg:h-72 xl:h-60 hover:underline"/>
                        <img src="{{ asset('storage/images/papayajuice.png') }}" alt="ellipse" class="md:h-60 lg:h-72 xl:h-60 lg:px-4 lg:py-2 hover:underline"/>
                        <img src="{{ asset('storage/images/watermelonjuice.png') }}" alt="ellipse" class="md:h-60 lg:h-72 xl:h-60 lg:px-4 lg:py-2 hover:underline"/>
                        <img src="{{ asset('storage/images/tomatojuice.png') }}" alt="ellipse" class="md:h-60 lg:h-72 xl:h-60 lg:px-4 lg:py-2 hover:underline"/>
                    </div>
                    <div class="justify-center justify-between mx-12 md:mx-16 lg:mx-24 xl:mx-20">
                            <ul class="flex justify-center justify-between text-hijau text-2xl md:mx-3 font-bold mt-2">
                                <li class="">Melon Juice</li>
                                <li class="">Papaya Juice</li>
                                <li class="">Watermelon Juice</li>
                                <li class="">Tomato Juice</li>
                            </ul>
                            <ul class="flex justify-center text-hijau text-2xl font-base justify-between md:mx-6 mt-2">
                                <li class="">Rp 10.000,-</li>
                                <li class="">Rp 10.000,-</li>
                                <li class="">Rp 10.000,-</li>
                                <li class="">Rp 10.000,-</li>
                            </ul>
                    </div>-->
                    <!-- 4 -->
                    <!--
                    <div class="flex justify-center justify-between md:mx-16 mt-16">
                        <img src="{{ asset('storage/images/cucumberjuice.png') }}" alt="ellipse" class="md:h-60 lg:h-72 xl:h-60 hover:underline"/>
                        <img src="{{ asset('storage/images/carrotjuice.png') }}" alt="ellipse" class="md:h-60 lg:h-72 xl:h-60 lg:px-4 lg:py-2 hover:underline"/>
                        <img src="{{ asset('storage/images/shourshoupjuice.png') }}" alt="ellipse" class="md:h-60 lg:h-72 xl:h-60 lg:px-4 lg:py-2 hover:underline"/>
                        <img src="{{ asset('storage/images/strawberryjuice.png') }}" alt="ellipse" class="md:h-60 lg:h-72 xl:h-60 lg:px-4 lg:py-2 hover:underline"/>
                    </div>
                    <div class="justify-center justify-between mx-12 md:mx-16 lg:mx-24 xl:mx-20">
                            <ul class="flex justify-center justify-between text-hijau text-2xl md:mx-3 font-bold mt-2">
                                <li class="">Cucumber Juice</li>
                                <li class="">Carrot Juice</li>
                                <li class="">Shourshoup Juice</li>
                                <li class="">Strawberry Juice</li>
                            </ul>
                            <ul class="flex justify-center text-hijau text-2xl font-base justify-between md:mx-6 mt-2">
                                <li class="">Rp 10.000,-</li>
                                <li class="">Rp 10.000,-</li>
                                <li class="">Rp 10.000,-</li>
                                <li class="">Rp 10.000,-</li>
                            </ul>
                    </div>
                </div>
        </div>
             -->
        
       <!-- Additional Menu size md to lg -->
       <div class="hidden md:block mb-40">
            <div class="text-center justify-center mt-60 text-4xl font-bold text-hijau tracking-widen">
                <h1 class="">Additional Menu</h1>
            </div>
            <div class="container mt-8 mx-auto">
                @include('components.menu_fd')
            </div>
                <!-- <div class="container mt-24 mx-auto"> -->
                    <!-- 1 -->
                    <!-- <div class="flex justify-center justify-between md:mx-8 lg:mx-28 mt-16">
                        <img src="{{ asset('storage/images/chickenburger.png') }}" alt="ellipse" class="md:h-60 lg:h-72 xl:h-72 md:-mt-4 lg:-mt-10 hover:underline"/>
                        <img src="{{ asset('storage/images/fishburger.png') }}" alt="ellipse" class="md:h-48 lg:h-52 xl:h-52  hover:underline"/>
                        <img src="{{ asset('storage/images/chickencheeseburger.png') }}" alt="ellipse" class="md:h-48 lg:h-52 xl:h-52 hover:underline"/>
                        <img src="{{ asset('storage/images/chickeneggburger.png') }}" alt="ellipse" class="md:h-48 lg:h-52 xl:h-52 hover:underline"/>
                    </div>
                    <div class="justify-center justify-between mx-12 md:mx-8 lg:mx-32 xl:mx-36">
                            <ul class="flex text-center justify-center justify-between text-hijau text-xl md:mx-3 font-bold mt-2">
                                <li class="">Chicken Burger</li>
                                <li class="">Fish Burger</li>
                                <li class="xl:-mr-24">Chicken Cheese Burger</li>
                                <li class="">Chicken Egg Burger</li>
                            </ul>
                            <ul class="flex justify-center text-hijau text-2xl font-base justify-between md:mx-16 mt-2">
                                <li class="">Rp 10.000,-</li>
                                <li class="">Rp 10.000,-</li>
                                <li class="">Rp 10.000,-</li>
                                <li class="">Rp 10.000,-</li>
                            </ul>
                    </div> -->
                    <!-- 2 -->
                    <!-- <div class="flex justify-center justify-between md:mx-8 lg:mx-28 mt-16">
                        <img src="{{ asset('storage/images/completeburger.png') }}" alt="ellipse" class="md:h-60 lg:h-72 xl:h-72 md:-mt-4 lg:-mt-10 hover:underline"/>
                        <img src="{{ asset('storage/images/hotdog.png') }}" alt="ellipse" class="md:h-48 lg:h-52 xl:h-52  hover:underline"/>
                        <img src="{{ asset('storage/images/egghotdog.png') }}" alt="ellipse" class="md:h-48 lg:h-52 xl:h-52 hover:underline"/>
                        <img src="{{ asset('storage/images/cheesehotdog.png') }}" alt="ellipse" class="md:h-48 lg:h-52 xl:h-52 hover:underline"/>
                    </div>
                    <div class="justify-center justify-between mx-12 md:mx-8 lg:mx-44 xl:mx-40">
                            <ul class="flex text-center justify-center justify-between text-hijau text-xl md:mx-3 font-bold mt-2">
                                <li class="">Complete Burger</li>
                                <li class="">Hotdog</li>
                                <li class="">Egg Hotdog</li>
                                <li class="">Cheese Hotdog</li>
                            </ul>
                            <ul class="flex justify-center text-hijau text-2xl font-base justify-between md:mx-16 lg:mx-8 mt-2">
                                <li class="">Rp 10.000,-</li>
                                <li class="">Rp 10.000,-</li>
                                <li class="">Rp 10.000,-</li>
                                <li class="">Rp 10.000,-</li>
                            </ul>
                    </div> -->
                    <!-- 3 -->
                    <!-- <div class="flex justify-center justify-between md:mx-8 lg:mx-32 mt-16">
                        <img src="{{ asset('storage/images/completehotdog.png') }}" alt="ellipse" class="md:h-60 lg:h-72 xl:h-72 md:-mt-4 lg:-mt-10 hover:underline"/>
                    </div>
                    <div class="justify-center justify-between mx-12 md:mx-8 lg:mx-48 xl:mx-40">
                            <ul class="flex text-center justify-center justify-between text-hijau text-xl md:mx-3 font-bold mt-2">
                                <li class="">Chicken Burger</li>
                            </ul>
                            <ul class="flex justify-center text-hijau text-2xl font-base justify-between md:mx-16 lg:mx-6 mt-2">
                                <li class="">Rp 10.000,-</li>
                            </ul>
                    </div>


                </div> --> 
        </div>
        
        
    </div>


</body>
</html>
<x-footer />