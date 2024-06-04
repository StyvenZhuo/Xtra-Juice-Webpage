<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xtra Juice</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @vite('resources/css/app.css')
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-yellow">
    <!-- nav -->
    <header>
        <x-navbar />
    </header>
    <div class="w-full h-full max-w-screen-lg mx-auto">
        <!-- 1 -->
        <section class="container flex mx-auto -mt-10 sm:mt-28">
            <div class="flex flex-col">
                <div class="sm:hidden mx-auto">
                    <img src="{{ asset('storage/images/homepic.png') }}" alt="ellipse" class="h-96  hover:underline"/> 
                </div>
                <div class="-mt-32 sm:mt-0 mx-8 md:ml-48 xl:mx-12 text-center sm:text-left">
                    <div class="mx-auto sm:-ml-24">
                        <h1 class="text-4xl sm:text-3xl md:text-4xl font-bold font-sans text-hijau tracking-wider">Where Taste and Health Blend Perfectly</h1>
                        <img src="{{ asset('storage/images/Line.png') }}" alt="" class="items-left my-4">
                    </div>
                    <div class="mt-2 sm:-ml-24">
                        <p class="text-md md:text-xl text-hijau font-semibold tracking-widen">Elevate your wellbeing with every sip, as our handpicked fruits, harmoniously combined to create a deliciously healthy treat for your enjoyment.</p>
                    </div>
                    <a href=""></a>
                        <button class="sm:-ml-24 tracking-wider mt-5 border text-md md:text-xl border-b-5 border-r-5 b-600 rounded-full border-4 ring ring-hijau bg-hijau text-white box-border h-10 w-24 md:h-12 md:w-36 border-transparent animate-border text-blue-500 font-semibold rounded-lg hover:bg-blue-100 transition duration-300">
                            Explore
                        </button> 
                    </a>
                </div>
            </div>
            <div class="mt-24 sm:mt-0 md:mx-8 md:mr-12 hidden sm:block">
                <img src="{{ asset('storage/images/homepic.png') }}" alt="ellipse" class="size-11/12  hover:underline"/>
            </div>
        </section>

        <!-- 2 -->
        <section class="container mt-60 xl:mt-96 mx-auto">
            <div class="text-center justify-center text-4xl font-bold text-hijau tracking-widen">
                <h1 class="">Best Seller</h1>
            </div>
            <div class="container mx-auto mt-10 sm:mt-24">
                <div class="relative overflow-hidden">
                    <div class="carousel flex transition-transform duration-300 ease-in-out justify-center">
                        <!-- Slide 1 -->
                        <div class="flex-col carousel-item min-w-full flex flex-col justify-center items-center">
                            <img src="{{ asset('storage/images/orangejuice.png') }}" alt="Image 1" class="h-44 sm:h-96 md:h-52 xl:h-52 lg:px-4 lg:py-2 hover:underline mx-auto"/>
                            <p class="text-hijau text-xl lg:text-xl font-bold tracking-wider text-center mt-2">Mango Juice</p>
                        </div>
                        <!-- Slide 2 -->
                        <div class="flex-col carousel-item min-w-full flex justify-center items-center">
                            <img src="{{ asset('storage/images/avocadojuice.png') }}" alt="Image 2" class="h-44 sm:h-96 md:h-52 xl:h-52 lg:px-4 lg:py-2 hover:underline mx-auto"/>
                            <p class="text-hijau text-xl lg:text-xl font-bold tracking-wider text-center mt-2">Avocado Juice</p>
                        </div>
                        <!-- Slide 3 -->
                        <div class="flex-col carousel-item min-w-full flex justify-center items-center">
                            <img src="{{ asset('storage/images/guavajuice.png') }}" alt="Image 3" class="h-44 sm:h-96 md:h-52 xl:h-52 lg:px-4 lg:py-2 hover:underline mx-auto"/>
                            <p class="text-hijau text-xl lg:text-xl font-bold tracking-wider text-center mt-2">Guava Juice</p>
                        </div>
                    </div>
                    <!-- Navigation buttons -->
                    <button id="prev" class="absolute top-1/2 left-0 transform -translate-y-1/2 bg-hijau text-white px-2 py-2 tracking-wider border-transparent animate-border text-blue-500 font-semibold rounded-lg hover:bg-blue-100 transition duration-300">Prev</button>
                    <button id="next" class="absolute top-1/2 right-0 transform -translate-y-1/2 bg-hijau text-white px-2 py-2 tracking-wider border-transparent animate-border text-blue-500 font-semibold rounded-lg hover:bg-blue-100 transition duration-300">Next</button>
                </div>
            </div>
        </section>

        <!-- 3 -->
        <section>
            <div class="container mx-auto mt-48">
                <div class="mx-auto flex-col sm:flex mt-12 lg:mt-20">
                    <img src="{{ asset('storage/images/Owner.png') }}" alt="owner" class="h-96 sm:h-96 md:size-4/12 mx-auto hover:underline"/>
                        <div class=" mx-16 text-center justify-center lg:ml-8 text-hijau mt-4 sm:mt-24 xl:mt-40">
                            <h1 class="font-bold text-4xl sm:text-4xl md:text-5xl tracking-widen">Pak Aga</h1>
                            <h1 class="mt-1 xl:mt-2 text-hijau text-xl sm:text-3xl md:text-4xl italic">Pemilik xtrajuice</h1>
                            <img src="{{ asset('storage/images/Line.png') }}" alt="" class="mx-auto my-2">
                            <p class="text-md sm:text-base md:text-xl font-bold mt-4 text-justify lg:mr-36">Pemilik stand jus buah "Xtra Juice" yang merupakan sebuah usaha minuman yang berlokasi di kantin Universitas Internasioanal Batam. UMKM ini berdiri pada tahun 2016 dan sudah beroperasi selama 18 tahun.  Stand Jus Buah "Xtra Juice" ini menyediakan beragam Jus dengan 16 pilihan buah dan sayur yang segar.</p>
                        </div>
                </div>
            </div>
        </section>

        <!-- 4 -->
        <section class="mt-56 mb-24">
                <div class="text-center justify-center text-4xl font-bold text-hijau tracking-wider">
                    <h1 class="">Testimonial</h1>
                </div>
                <div class="container mx-auto mt-10">
                    <div class="relative overflow-hidden">
                        <div class="carousel flex transition-transform duration-300 ease-in-out justify-center">
                            <!-- Card 1 -->
                            <div class="bg-hijau p-6 rounded-lg shadow-md w-64 flex-col carousel-item min-w-full flex flex-col justify-center items-center">
                                <div class="bg-hijau rounded-full h-12 w-12 mb-4"></div>
                                <div class="flex items-center mb-4">
                                    <span class="text-yellow-500 text-xl">&#9733;</span>
                                    <span class="text-yellow-500 text-xl">&#9733;</span>
                                    <span class="text-yellow-500 text-xl">&#9733;</span>
                                    <span class="text-yellow-500 text-xl">&#9733;</span>
                                    <span class="text-yellow-500 text-xl">&#9733;</span>
                                </div>
                                <h2 class="text-lg font-bold mb-2">Amelia Reslie</h2>
                                <p class="text-yellow font-semibold">Fresh flavors, unbeatable quality, and exceptional service!</p>
                            </div>
                            <!-- Card 2 -->
                            <div class="bg-hijau p-6 rounded-lg shadow-md w-64 flex-col carousel-item min-w-full flex flex-col justify-center items-center">
                                <div class="bg-hijau rounded-full h-8 w-8 mb-4"></div>
                                <div class="flex items-center mb-4">
                                    <span class="text-yellow-500 text-xl">&#9733;</span>
                                    <span class="text-yellow-500 text-xl">&#9733;</span>
                                    <span class="text-yellow-500 text-xl">&#9733;</span>
                                    <span class="text-yellow-500 text-xl">&#9733;</span>
                                    <span class="text-yellow-500 text-xl">&#9734;</span>
                                </div>
                                <h2 class="text-yellow text-lg font-bold mb-2">Leo Ong</h2>
                                <p class="text-yellow font-semibold">Consistently delicious juices and impeccable service.</p>
                            </div>
                            <!-- Card 3 -->
                            <div class="bg-hijau p-6 rounded-lg shadow-md w-64 flex-col carousel-item min-w-full flex flex-col justify-center items-center">
                                <div class="bg-hijau rounded-full h-16 w-16 mb-4"></div>
                                <div class="flex items-center mb-4">
                                    <span class="text-yellow-500 text-xl">&#9733;</span>
                                    <span class="text-yellow-500 text-xl">&#9733;</span>
                                    <span class="text-yellow-500 text-xl">&#9733;</span>
                                    <span class="text-yellow-500 text-xl">&#9733;</span>
                                    <span class="text-yellow-500 text-xl">&#9733;</span>
                                </div>
                                <h2 class="text-lg font-bold mb-2">Kevin Wang</h2>
                                <p class="text-gray-700">never fails to impress with their incredible flavors and top-notch quality</p>
                            </div>
                            <!-- Navigation buttons -->
                            <button id="prev" class="absolute top-1/2 left-0 transform -translate-y-1/2 bg-yellow text-hijau px-2 py-2 tracking-wider border-transparent animate-border text-blue-500 font-semibold rounded-lg hover:bg-blue-100 transition duration-300">Prev</button>
                            <button id="next" class="absolute top-1/2 right-0 transform -translate-y-1/2 bg-yellow text-hijau px-2 py-2 tracking-wider border-transparent animate-border text-blue-500 font-semibold rounded-lg hover:bg-blue-100 transition duration-300">Next</but>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- footer -->
    <footer>
        <x-footer />
    </footer>
    <script src="{{ mix('js/app.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const carousel = document.querySelector('.carousel');
            const items = document.querySelectorAll('.carousel-item');
            const totalItems = items.length;
            let currentIndex = 0;

            document.getElementById('next').addEventListener('click', function() {
                currentIndex = (currentIndex + 1) % totalItems;
                updateCarousel();
            });

            document.getElementById('prev').addEventListener('click', function() {
                currentIndex = (currentIndex - 1 + totalItems) % totalItems;
                updateCarousel();
            });

            function updateCarousel() {
                const offset = -currentIndex * 100;
                carousel.style.transform = `translateX(${offset}%)`;
            }
        });
    </script>
    
</body>
</html>