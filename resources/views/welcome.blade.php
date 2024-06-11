<!doctype html>
<html lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @vite('resources/css/app.css')
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <!-- SwiperJS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js" defer></script>   
    <!-- AlpineJS -->
    <script src="//unpkg.com/alpinejs" defer></script>
    <title>Xtra Juice</title>
    
    <style>
        .swiper-container {
            overflow: hidden; /* Sembunyikan overflow */
            width: 100%; /* Lebar penuh */
            position: relative; /* Position relative untuk anak-anak yang absolut */
        }

        .swiper-wrapper {
            display: flex;
            transition-timing-function: linear; /* Transisi linier halus */
            width: 100%; /* Lebar penuh */
        }

        .swiper-slide {
            flex-shrink: 0;
            width: 100%; /* Lebar penuh */
            height: 100%; /* Tinggi maksimum */
        }
    </style>
</head>

<body class="bg-yellow">
    <x-navbar />
        <!-- Landing Section -->
        <div class="contaier flex">
            <div class="flex relative py-0 2xl:mx-36  ">
                <div class="flex flex-col -mt-24 sm:mt-0">
                    <!-- pic mobile -->
                    <div class="sm:hidden mx-auto ">
                        <img src="{{ asset('storage/images/homepic.png') }}" class="h-[400px] w-[400px]" alt="ellipse"/>
                    </div>
                    <!-- text top -->
                    <div class="container -mt-44 sm:mt-24 sm:mx-28 2xl:mx-0 2xl:mt-48">
                        <div class="text-center sm:text-left sm:mr-24 lg:mr-60 xl:mr-72 2xl:mr-60">
                            <h1 class="text-3xl sm:text-4xl md:text-5xl xl:text-6xl font-bold font-sans text-hijau tracking-wider">
                                Where Taste and Health Blend Perfectly
                            </h1>
                            <img src="{{ asset('storage/images/Line.png') }}" alt="" class="my-2 mx-auto sm:mx-0">
                            <p class="text-lg sm:text-lg md:text-xl 2xl:text-3xl text-hijau font-semibold tracking-widen mx-6 sm:mx-0">
                                Elevate your wellbeing with every sip, as our handpicked fruits, harmoniously combined to create a deliciously healthy treat for your enjoyment.
                            </p>
                            <a href="/menu">
                            <button class="text-base md:text-xl tracking-wider my-4 border-b-5 border-r-5 b-600 rounded-full border-4 ring ring-hijau bg-hijau text-white box-border h-10 w-20 md:h-12 md:w-36 border-transparent animate-border text-blue-500 font-semibold rounded-lg hover:bg-blue-100 transition duration-300">
                                Explore
                            </button>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- pic md-2xl -->
                <div class="hidden sm:block ">
                    <img src="{{ asset('storage/images/homepic.png') }}" alt="ellipse" class="h-[600px] w-[850px] -mt-16 2xl:mt-8 2xl:mr-96 hover:underline"/>
                </div>
            </div>
        </div>

        <!-- 2 best seller section -->
        <div class="flex flex-col items-center 2xl:mt-20 space-y-10">
                <a class="text-hijau font-bold tracking-wider text-3xl 2xl:text-6xl uppercase">Best seller</a>
                <div class="group swiper-container">
                    <div class="swiper-wrapper py-36 gap-24">
                        <div class="swiper-slide">
                            <div class="flex items-center justify-center gap-12">
                                <ul class="text-center text-hijau font-bold my-2 text-lg">
                                    <li>
                                        <img class="w-[100%] h-[100%]" src="{{ asset('storage/images/orangejuice1.png') }}" />
                                    </li>
                                    <li class="">
                                        Orange Juice
                                    </li>
                                    <li class="">
                                        Rp. 10.000
                                    </li>
                                </ul>
                                <ul class="text-center text-hijau font-bold my-2 text-lg">
                                    <li>
                                        <img class="w-[100%] h-[100%]" src="{{ asset('storage/images/greenapplejuice.png') }}" />
                                    </li>
                                    <li class="">
                                        Avocado Juice
                                    </li>
                                    <li class="">
                                        Rp. 10.000
                                    </li>
                                </ul>
                                <ul class="text-center text-hijau font-bold my-2 text-lg">
                                    <li>
                                        <img class="w-[100%] h-[100%]" src="{{ asset('storage/images/watermelonjuice.png') }}" />
                                    </li>
                                    <li class="">
                                        Watermelon Juice
                                    </li>
                                    <li class="">
                                        Rp. 10.000
                                    </li>
                                </ul>
                                <ul class="text-center text-hijau font-bold my-2 text-lg">
                                    <li>
                                        <img class="w-[100%] h-[100%]" src="{{ asset('storage/images/strawberryjuice.png') }}" />
                                    </li>
                                    <li class="">
                                        Strawberry Juice
                                    </li>
                                    <li class="">
                                        Rp. 10.000
                                    </li>
                                </ul>
                                <ul class="text-center text-hijau font-bold my-2 text-lg">
                                    <li>
                                        <img class="w-[100%] h-[100%]" src="{{ asset('storage/images/lemonjuice.png') }}" />
                                    </li>
                                    <li class="">
                                        Lemon Juice
                                    </li>
                                    <li class="">
                                        Rp. 10.000
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="flex items-center justify-center gap-12">
                                    <ul class="text-center text-hijau font-bold my-2">
                                        <li>
                                            <img class="w-[100%] h-[100%]" src="{{ asset('storage/images/cheesehotdog.png') }}" />
                                        </li>
                                        <li class="">
                                            Cheese Hotdog
                                        </li>
                                        <li class="">
                                            Rp. 10.000
                                        </li>
                                    </ul>
                                    <ul class="text-center text-hijau font-bold my-2 text-lg">
                                        <li>
                                            <img class="w-[100%] h-[100%]" src="{{ asset('storage/images/chickenburger.png') }}" />
                                        </li>
                                        <li class="-mt-4 sm:-mt-6 md:-mt-10 2xl:-mt-12">
                                            Chicken Burger
                                        </li>
                                        <li class="">
                                            Rp. 13.000
                                        </li>
                                    </ul>
                                    <ul class="text-center text-hijau font-bold my-2 text-lg">
                                        <li>
                                            <img class="w-[100%] h-[100%]" src="{{ asset('storage/images/chickencheeseburger.png') }}" />
                                        </li>
                                        <li class="">
                                            Chicken Cheese Burger
                                        </li>
                                        <li class="">
                                            Rp. 17.000
                                        </li>
                                    </ul>
                                    <ul class="text-center text-hijau font-bold my-2 text-lg">
                                        <li>
                                            <img class="w-[100%] h-[100%]" src="{{ asset('storage/images/completeburger.png') }}" />
                                        </li>
                                        <li class="-mt-4 md:-mt-10 2xl:-mt-12">
                                            Complete Burger
                                        </li>
                                        <li class="">
                                            Rp. 20.000
                                        </li>
                                    </ul>
                                    <ul class="text-center text-hijau font-bold my-2 text-lg">
                                        <li>
                                            <img class="w-[100%] h-[100%]" src="{{ asset('storage/images/completehotdog.png') }}" />
                                        </li>
                                        <li class="-mt-3 md:-mt-8 2xl:-mt-10">
                                            Complete Hotdog
                                        </li>
                                        <li class="">
                                            Rp. 17.000
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <!-- 4 review section -->
            <div class="flex flex-col items-center xl:h-relative overflow-hidden space-y-10 my-14 py-28 2xl:mt-4 2xl:py-36">
                    <a class="text-hijau font-bold tracking-wider text-3xl 2xl:text-6xl uppercase">Review</a>
                    <div class="group swiper-container">
                        <div class="swiper-wrapper py-24 xl:py-36 gap-[1000px] sm:gap-[800px] lg:gap-[650px] xl:gap-[550px]">
                            <div class="swiper-slide flex justify-center gap-10 xl:gap-24">
                                    <!-- Card 1 -->
                                    <div class="bg-hijau p-6 rounded-lg shadow-md w-64 flex-shrink-0 items-center mx-12">
                                        <div class="bg-green-700 rounded-full h-[80px] w-[80px] mb-4"></div>
                                        <img src="{{ asset('storage/images/1.png') }}" class="h-[20px] w-[20px] md:h-[100px] md:w-[100px] rounded-full mx-auto -mt-28" alt="person1">
                                        <div class="flex justify-center mb-4">
                                            <span class="text-amber-300 text-xl">&#9733;</span>
                                            <span class="text-amber-300 text-xl">&#9733;</span>
                                            <span class="text-amber-300 text-xl">&#9733;</span>
                                            <span class="text-amber-300 text-xl">&#9733;</span>
                                            <span class="text-amber-300 text-xl">&#9733;</span>
                                        </div>
                                        <h2 class="text-xl font-bold mb-2 text-yellow text-center">Amelia Reslie</h2>
                                        <p class="text-yellow text-center font-semibold">Fresh flavors, unbeatable quality, and exceptional service!</p>
                                    </div>
                                    <!-- Card 2 -->
                                    <div class="bg-hijau p-6 rounded-lg shadow-md w-64 flex-shrink-0 items-center mx-12">
                                        <div class="bg-green-700 rounded-full h-[80px] w-[80px] mb-4"></div>
                                        <img src="{{ asset('storage/images/2.png') }}" class="h-[20px] w-[20px] md:h-[100px] md:w-[100px] rounded-full mx-auto -mt-28" alt="person2">
                                        <div class="flex justify-center mb-4">
                                        <span class="text-amber-300 text-xl">&#9733;</span>
                                            <span class="text-amber-300 text-xl">&#9733;</span>
                                            <span class="text-amber-300 text-xl">&#9733;</span>
                                            <span class="text-amber-300 text-xl">&#9733;</span>
                                            <span class="text-amber-300 text-xl">&#9733;</span>
                                        </div>
                                        <h2 class="text-xl font-bold mb-2 text-yellow text-center">Leo Ong</h2>
                                        <p class="text-yellow text-center font-semibold">Consistently delicious juices and impeccable service.</p>
                                    </div>
                                    <!-- Card 3 -->
                                    <div class="bg-hijau p-6 rounded-lg shadow-md w-64 flex-shrink-0 items-center mx-12">
                                        <div class="bg-green-700 rounded-full h-[80px] w-[80px] mb-4"></div>
                                        <img src="{{ asset('storage/images/3.png') }}" class="h-[20px] w-[20px] md:h-[100px] md:w-[100px] rounded-full mx-auto -mt-28" alt="person3">
                                        <div class="flex justify-center mb-4">
                                        <span class="text-amber-300 text-xl">&#9733;</span>
                                            <span class="text-amber-300 text-xl">&#9733;</span>
                                            <span class="text-amber-300 text-xl">&#9733;</span>
                                            <span class="text-amber-300 text-xl">&#9733;</span>
                                            <span class="text-amber-300 text-xl">&#9733;</span>
                                        </div>
                                        <h2 class="text-xl font-bold mb-2 text-yellow text-center">Jesika</h2>
                                        <p class="text-yellow text-center font-semibold">Never fails to impress with their incredible flavors and top-notch quality.</p>
                                    </div>
                                    <!-- Card 4 -->
                                    <div class="bg-hijau p-6 rounded-lg shadow-md w-64 flex-shrink-0 items-center mx-12">
                                        <div class="bg-green-700 rounded-full h-[80px] w-[80px] mb-4"></div>
                                        <img src="{{ asset('storage/images/4.png') }}" class="h-[20px] w-[20px] md:h-[100px] md:w-[100px] rounded-full mx-auto -mt-28" alt="person3">
                                        <div class="flex justify-center mb-4">
                                            <span class="text-amber-300 text-xl">&#9733;</span>
                                            <span class="text-amber-300 text-xl">&#9733;</span>
                                            <span class="text-amber-300 text-xl">&#9733;</span>
                                            <span class="text-amber-300 text-xl">&#9733;</span>
                                            <span class="text-amber-300 text-xl">&#9733;</span>
                                        </div>
                                        <h2 class="text-xl font-bold mb-2 text-yellow text-center">Sherly</h2>
                                        <p class="text-yellow text-center font-semibold">Never fails to impress with their incredible flavors and top-notch quality.</p>
                                    </div>
                                    <!-- Card 5 -->
                                    <div class="bg-hijau p-6 rounded-lg shadow-md w-64 flex-shrink-0 items-center mx-12">
                                        <div class="bg-green-700 rounded-full h-[80px] w-[80px] mb-4"></div>
                                        <img src="{{ asset('storage/images/3.png') }}" class="h-[20px] w-[20px] md:h-[100px] md:w-[100px] rounded-full mx-auto -mt-28" alt="person3">
                                        <div class="flex justify-center mb-4">
                                            <span class="text-amber-300 text-xl">&#9733;</span>
                                            <span class="text-amber-300 text-xl">&#9733;</span>
                                            <span class="text-amber-300 text-xl">&#9733;</span>
                                            <span class="text-amber-300 text-xl">&#9733;</span>
                                            <span class="text-amber-300 text-xl">&#9733;</span>
                                        </div>
                                        <h2 class="text-xl font-bold mb-2 text-yellow text-center">Cristine Mulia Hakim</h2>
                                        <p class="text-yellow text-center font-semibold">Never fails to impress with their incredible flavors and top-notch quality.</p>
                                    </div>
                            </div>
                                <div class="swiper-slide flex justify-center gap-10 sm:gap-24 xl:gap-48">
                                    <!-- Card 1 -->
                                    <div class="bg-hijau p-6 rounded-lg shadow-md w-64 flex-shrink-0 items-center  mx-12">
                                        <div class="bg-green-700 rounded-full h-[80px] w-[80px] mb-4"></div>
                                        <img src="{{ asset('storage/images/6.png') }}" class="h-[20px] w-[20px] md:h-[100px] md:w-[100px] rounded-full mx-auto -mt-28" alt="person4">
                                        <div class="flex justify-center mb-4">
                                            <span class="text-amber-300 text-xl">&#9733;</span>
                                            <span class="text-amber-300 text-xl">&#9733;</span>
                                            <span class="text-amber-300 text-xl">&#9733;</span>
                                            <span class="text-amber-300 text-xl">&#9733;</span>
                                            <span class="text-amber-300 text-xl">&#9733;</span>
                                        </div>
                                        <h2 class="text-xl font-bold mb-2 text-yellow text-center">Helen Febriana</h2>
                                        <p class="text-yellow text-center font-semibold">Fresh flavors, unbeatable quality, and exceptional service!</p>
                                    </div>
                                    <!-- Card 2 -->
                                    <div class="bg-hijau p-6 rounded-lg shadow-md w-64 flex-shrink-0 items-center mx-12">
                                        <div class="bg-green-700 rounded-full h-[80px] w-[80px] mb-4"></div>
                                        <img src="{{ asset('storage/images/9.png') }}" class="h-[20px] w-[20px] md:h-[100px] md:w-[100px] rounded-full mx-auto -mt-28" alt="person5">
                                        <div class="flex justify-center mb-4">
                                            <span class="text-amber-300 text-xl">&#9733;</span>
                                            <span class="text-amber-300 text-xl">&#9733;</span>
                                            <span class="text-amber-300 text-xl">&#9733;</span>
                                            <span class="text-amber-300 text-xl">&#9733;</span>
                                            <span class="text-amber-300 text-xl">&#9733;</span>
                                        </div>
                                        <h2 class="text-xl font-bold mb-2 text-yellow text-center">Derrick</h2>
                                        <p class="text-yellow text-center font-semibold">Consistently delicious juices and impeccable service.</p>
                                    </div>
                                    <!-- Card 3 -->
                                    <div class="bg-hijau p-6 rounded-lg shadow-md w-64 flex-shrink-0 items-center mx-12">
                                        <div class="bg-green-700 rounded-full h-[80px] w-[80px] mb-4"></div>
                                        <img src="{{ asset('storage/images/12.png') }}" class="h-[20px] w-[20px] md:h-[100px] md:w-[100px] rounded-full mx-auto -mt-28" alt="person6">
                                        <div class="flex justify-center mb-4">
                                            <span class="text-amber-300 text-xl">&#9733;</span>
                                            <span class="text-amber-300 text-xl">&#9733;</span>
                                            <span class="text-amber-300 text-xl">&#9733;</span>
                                            <span class="text-amber-300 text-xl">&#9733;</span>
                                            <span class="text-amber-300 text-xl">&#9733;</span>
                                        </div>
                                        <h2 class="text-xl font-bold mb-2 text-yellow text-center">Styven</h2>
                                        <p class="text-yellow text-center font-semibold">Never fails to impress with their incredible flavors and top-notch quality.</p>
                                    </div>
                                    <!-- Card 4 -->
                                    <div class="bg-hijau p-6 rounded-lg shadow-md w-64 flex-shrink-0 items-center mx-12">
                                        <div class="bg-green-700 rounded-full h-[80px] w-[80px] mb-4"></div>
                                        <img src="{{ asset('storage/images/11.png') }}" class="h-[20px] w-[20px] md:h-[100px] md:w-[100px] rounded-full mx-auto -mt-28" alt="person3">
                                        <div class="flex justify-center mb-4">
                                            <span class="text-amber-300 text-xl">&#9733;</span>
                                            <span class="text-amber-300 text-xl">&#9733;</span>
                                            <span class="text-amber-300 text-xl">&#9733;</span>
                                            <span class="text-amber-300 text-xl">&#9733;</span>
                                            <span class="text-amber-300 text-xl">&#9733;</span>
                                        </div>
                                        <h2 class="text-xl font-bold mb-2 text-yellow text-center">Jenifer</h2>
                                        <p class="text-yellow text-center font-semibold">Never fails to impress with their incredible flavors and top-notch quality.</p>
                                    </div>
                                    <!-- Card 5 -->
                                    <div class="bg-hijau p-6 rounded-lg shadow-md w-64 flex-shrink-0 items-center mx-12">
                                        <div class="bg-green-700 rounded-full h-[80px] w-[80px] mb-4"></div>
                                        <img src="{{ asset('storage/images/10.png') }}" class="h-[20px] w-[20px] md:h-[100px] md:w-[100px] rounded-full mx-auto -mt-28" alt="person3">
                                        <div class="flex justify-center mb-4">
                                            <span class="text-amber-300 text-xl">&#9733;</span>
                                            <span class="text-amber-300 text-xl">&#9733;</span>
                                            <span class="text-amber-300 text-xl">&#9733;</span>
                                            <span class="text-amber-300 text-xl">&#9733;</span>
                                            <span class="text-amber-300 text-xl">&#9733;</span>
                                        </div>
                                        <h2 class="text-xl font-bold mb-2 text-yellow text-center">Zaynulia Afifa</h2>
                                        <p class="text-yellow text-center font-semibold">Never fails to impress with their incredible flavors and top-notch quality.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
            </div>
        </div>





    <script src="{{ mix('js/app.js') }}"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var swiper = new Swiper('.swiper-container', {
                speed: 18000, // Speed of the continuous movement
                loop: true, // Enable looping
                slidesPerView: 'auto', // Adjust based on the number of slides visible at once
                allowTouchMove: false, // Disable touch interaction
                spaceBetween: 0, // No space between slides
                autoplay: {
                    delay: 0, // No delay between transitions for continuous effect
                    disableOnInteraction: false, // Autoplay continues even if user interacts
                }
            });

            // Modify autoplay to simulate continuous scrolling
            swiper.autoplay.start();
        });

    </script>
    <x-footer />
</body>
</html>
