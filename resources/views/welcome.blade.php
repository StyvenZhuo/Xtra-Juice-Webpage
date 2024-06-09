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

        /* Untuk menangani gambar yang lebih besar dari container */
        .swiper-slide img {
            width: 100%;
            height: auto;
            object-fit: cover;
        }

    </style>
</head>

<body class="bg-yellow">
    <x-navbar />
        <!-- Landing Section -->
        <div class="contaier flex">
            <div class="flex relative py-0 ">
                <div class="flex flex-col -mt-24 sm:mt-0">
                    <!-- pic mobile -->
                    <div class="sm:hidden mx-auto ">
                        <img src="{{ asset('storage/images/homepic.png') }}" class="h-[400px] w-[400px]" alt="ellipse"/>
                    </div>
                    <!-- text top -->
                    <div class="container -mt-44 sm:mt-24 sm:mx-28">
                        <div class="text-center sm:text-left sm:mr-24 lg:mr-60 xl:mr-72 2xl:mr-0">
                            <h1 class="text-3xl sm:text-4xl md:text-5xl xl:text-6xl font-bold font-sans text-hijau tracking-wider">
                                Where Taste and Health Blend Perfectly
                            </h1>
                            <img src="{{ asset('storage/images/Line.png') }}" alt="" class="my-2 mx-auto sm:mx-0">
                            <p class="text-lg sm:text-lg md:text-xl text-hijau font-semibold tracking-widen mx-6 sm:mx-0">
                                Elevate your wellbeing with every sip, as our handpicked fruits, harmoniously combined to create a deliciously healthy treat for your enjoyment.
                            </p>
                            <a href="/">
                            <button class="text-base my-4 border-b-5 border-r-5 b-600 rounded-full border-4 ring ring-hijau bg-hijau text-white box-border h-10 w-20 md:h-12 md:w-36 border-transparent animate-border text-blue-500 font-semibold rounded-lg hover:bg-blue-100 transition duration-300">
                                Explore
                            </button>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- pic md-2xl -->
                <div class="hidden sm:block ">
                    <img src="{{ asset('storage/images/homepic.png') }}" alt="ellipse" class="h-[600px] w-[750px] -mt-24 hover:underline"/>
                </div>
            </div>
        </div>

        <!-- 2 best seller section -->
        <div class="flex flex-col items-center">
                <a class="text-hijau font-bold tracking-wider text-3xl 2xl:text-6xl">Best Seller</a>
                <div class="group swiper-container">
                    <div class="swiper-wrapper py-36 gap-24">
                        <div class="swiper-slide">
                            <div class="flex space-x-24 items-center justify-center">
                                <ul class="text-center my-2">
                                    <li>
                                        <img class="" src="{{ asset('storage/images/orangejuice1.png') }}" />
                                    </li>
                                    <li class="">
                                        Orange Juice
                                    </li>
                                    <li class="">
                                        Rp. 10.000
                                    </li>
                                </ul>
                                <ul class="text-center my-2">
                                    <li>
                                        <img class="" src="{{ asset('storage/images/avocadojuice.png') }}" />
                                    </li>
                                    <li class="">
                                        Avocado Juice
                                    </li>
                                    <li class="">
                                        Rp. 10.000
                                    </li>
                                </ul>
                                <ul class="text-center my-2">
                                    <li>
                                        <img class="" src="{{ asset('storage/images/watermelonjuice.png') }}" />
                                    </li>
                                    <li class="">
                                        Watermelon Juice
                                    </li>
                                    <li class="">
                                        Rp. 10.000
                                    </li>
                                </ul>
                                <ul class="text-center my-2">
                                    <li>
                                        <img class="" src="{{ asset('storage/images/orangejuice1.png') }}" />
                                    </li>
                                    <li class="">
                                        Orange Juice
                                    </li>
                                    <li class="">
                                        Rp. 10.000
                                    </li>
                                </ul>
                                <ul class="text-center my-2">
                                    <li>
                                        <img class="" src="{{ asset('storage/images/orangejuice1.png') }}" />
                                    </li>
                                    <li class="">
                                        Orange Juice
                                    </li>
                                    <li class="">
                                        Rp. 10.000
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="flex space-x-24 items-center justify-center">
                                    <ul class="text-center my-2">
                                        <li>
                                            <img class="" src="{{ asset('storage/images/orangejuice1.png') }}" />
                                        </li>
                                        <li class="">
                                            Orange Juice
                                        </li>
                                        <li class="">
                                            Rp. 10.000
                                        </li>
                                    </ul>
                                    <ul class="text-center my-2">
                                        <li>
                                            <img class="" src="{{ asset('storage/images/avocadojuice.png') }}" />
                                        </li>
                                        <li class="">
                                            Avocado Juice
                                        </li>
                                        <li class="">
                                            Rp. 10.000
                                        </li>
                                    </ul>
                                    <ul class="text-center my-2">
                                        <li>
                                            <img class="" src="{{ asset('storage/images/watermelonjuice.png') }}" />
                                        </li>
                                        <li class="">
                                            Watermelon Juice
                                        </li>
                                        <li class="">
                                            Rp. 10.000
                                        </li>
                                    </ul>
                                    <ul class="text-center my-2">
                                        <li>
                                            <img class="" src="{{ asset('storage/images/orangejuice1.png') }}" />
                                        </li>
                                        <li class="">
                                            Orange Juice
                                        </li>
                                        <li class="">
                                            Rp. 10.000
                                        </li>
                                    </ul>
                                    <ul class="text-center my-2">
                                        <li>
                                            <img class="" src="{{ asset('storage/images/orangejuice1.png') }}" />
                                        </li>
                                        <li class="">
                                            Orange Juice
                                        </li>
                                        <li class="">
                                            Rp. 10.000
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <!-- 4 review -->
            <div class="flex flex-col items-center xl:h-relative overflow-hidden space-y-10 my-14 py-60 2xl:mt-4 2xl:py-36">
                    <a class="text-hijau font-bold tracking-wider text-3xl 2xl:text-6xl">Best Seller</a>
                    <div class="group swiper-container">
                        <div class="swiper-wrapper xl:py-36">
                            <div class="swiper-slide flex justify-center gap-36">
                                    <!-- Card 1 -->
                                    <div class="bg-hijau p-6 rounded-lg shadow-md w-64 flex-shrink-0 items-center">
                                        <div class="bg-green-700 rounded-full h-64 w-64 mb-4"></div>
                                        <div class="flex justify-center mb-4">
                                            <span class="text-yellow text-xl">&#9733;</span>
                                            <span class="text-yellow text-xl">&#9733;</span>
                                            <span class="text-yellow text-xl">&#9733;</span>
                                            <span class="text-yellow text-xl">&#9733;</span>
                                            <span class="text-yellow text-xl">&#9733;</span>
                                        </div>
                                        <h2 class="text-xl font-bold mb-2 text-yellow text-center">Amelia Reslie</h2>
                                        <p class="text-yellow text-xl text-center">Fresh flavors, unbeatable quality, and exceptional service!</p>
                                    </div>
                                    <!-- Card 2 -->
                                    <div class="bg-hijau p-6 rounded-lg shadow-md w-64 flex-shrink-0 items-center">
                                        <div class="bg-green-700 rounded-full h-64 w-64 mb-4"></div>
                                        <div class="flex justify-center mb-4">
                                            <span class="text-yellow text-xl">&#9733;</span>
                                            <span class="text-yellow text-xl">&#9733;</span>
                                            <span class="text-yellow text-xl">&#9733;</span>
                                            <span class="text-yellow text-xl">&#9733;</span>
                                            <span class="text-yellow text-xl">&#9733;</span>
                                        </div>
                                        <h2 class="text-xl font-bold mb-2 text-yellow text-center">Leo Ong</h2>
                                        <p class="text-yellow text-center">Consistently delicious juices and impeccable service.</p>
                                    </div>
                                    <!-- Card 3 -->
                                    <div class="bg-hijau p-6 rounded-lg shadow-md w-64 flex-shrink-0 items-center">
                                        <div class="bg-green-700 rounded-full h-64 w-64 mb-4"></div>
                                        <div class="flex justify-center mb-4">
                                            <span class="text-yellow text-xl">&#9733;</span>
                                            <span class="text-yellow text-xl">&#9733;</span>
                                            <span class="text-yellow text-xl">&#9733;</span>
                                            <span class="text-yellow text-xl">&#9733;</span>
                                            <span class="text-yellow text-xl">&#9733;</span>
                                        </div>
                                        <h2 class="text-xl font-bold mb-2 text-yellow text-center">Kevin Wang</h2>
                                        <p class="text-yellow text-center">Never fails to impress with their incredible flavors and top-notch quality.</p>
                                    </div>
                                </div>
                                <div class="swiper-slide flex justify-center gap-36">
                                    <!-- Card 1 -->
                                    <div class="bg-hijau p-6 rounded-lg shadow-md w-64 flex-shrink-0 items-center">
                                        <div class="bg-green-700 rounded-full h-64 w-64 mb-4"></div>
                                        <div class="flex justify-center mb-4">
                                            <span class="text-yellow text-xl">&#9733;</span>
                                            <span class="text-yellow text-xl">&#9733;</span>
                                            <span class="text-yellow text-xl">&#9733;</span>
                                            <span class="text-yellow text-xl">&#9733;</span>
                                            <span class="text-yellow text-xl">&#9733;</span>
                                        </div>
                                        <h2 class="text-xl font-bold mb-2 text-yellow text-center">Amelia Reslie</h2>
                                        <p class="text-yellow text-xl text-center">Fresh flavors, unbeatable quality, and exceptional service!</p>
                                    </div>
                                    <!-- Card 2 -->
                                    <div class="bg-hijau p-6 rounded-lg shadow-md w-64 flex-shrink-0 items-center">
                                        <div class="bg-green-700 rounded-full h-64 w-64 mb-4"></div>
                                        <div class="flex justify-center mb-4">
                                            <span class="text-yellow text-xl">&#9733;</span>
                                            <span class="text-yellow text-xl">&#9733;</span>
                                            <span class="text-yellow text-xl">&#9733;</span>
                                            <span class="text-yellow text-xl">&#9733;</span>
                                            <span class="text-yellow text-xl">&#9733;</span>
                                        </div>
                                        <h2 class="text-xl font-bold mb-2 text-yellow text-center">Leo Ong</h2>
                                        <p class="text-yellow text-center">Consistently delicious juices and impeccable service.</p>
                                    </div>
                                    <!-- Card 3 -->
                                    <div class="bg-hijau p-6 rounded-lg shadow-md w-64 flex-shrink-0 items-center">
                                        <div class="bg-green-700 rounded-full h-64 w-64 mb-4"></div>
                                        <div class="flex justify-center mb-4">
                                            <span class="text-yellow text-xl">&#9733;</span>
                                            <span class="text-yellow text-xl">&#9733;</span>
                                            <span class="text-yellow text-xl">&#9733;</span>
                                            <span class="text-yellow text-xl">&#9733;</span>
                                            <span class="text-yellow text-xl">&#9733;</span>
                                        </div>
                                        <h2 class="text-xl font-bold mb-2 text-yellow text-center">Kevin Wang</h2>
                                        <p class="text-yellow text-center">Never fails to impress with their incredible flavors and top-notch quality.</p>
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
                speed: 5000, // Speed of the continuous movement
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
