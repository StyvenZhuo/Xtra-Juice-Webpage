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

</head>
<!-- nav -->
 <header>
    <x-navbar />
</header>

<body>
    <div class="max-w-screen mx-auto w-full relative">
        <div class="bg-cover bg-center bg-none bg-local bg-fixed object-cover w-full h-full" style="background-image: url(storage/images/bgtop.png)">
            <!-- 1 -->
            <div class="">
                <div class="">
                    <div class="flex relative py-4 ">
                        <div class="flex flex-col sm:mx-24 gap-4 -mt-12 xl:mt-0">
                            <!-- pic mobile -->
                            <div class="sm:hidden mx-auto w-[300px]">
                                <img src="{{ asset('storage/images/homepic.png') }}" alt="ellipse"/>
                            </div>
                            <!-- text top -->
                            <div class="-mt-44 sm:mt-0 sm:py-36 mx-8 sm:mx-24 md:mx-18 sm:-ml-24 md:ml-0 xl:ml-24 text-center sm:text-left">
                                <div class="lg:ml-4">
                                    <h1 class="text-3xl sm:text-3xl md:text-4xl lg:text-5xl sm:-mr-40 font-bold font-sans text-hijau tracking-wider">
                                        Where Taste and Health Blend Perfectly
                                    </h1>
                                    <img src="{{ asset('storage/images/Line.png') }}" alt="" class="mx-auto sm:-ml-0 my-2 md:my-4">
                                </div>
                                <p class="mt-2 lg:ml-4 text-sm md:text-2xl sm:-mr-40 text-hijau font-semibold tracking-widen">
                                    Elevate your wellbeing with every sip, as our handpicked fruits, harmoniously combined to create a deliciously healthy treat for your enjoyment.
                                </p>
                                <a href="/">
                                    <button class="lg:ml-4 tracking-wider mt-3 md:mt-8 border text-xs md:text-xl border-b-5 border-r-5 b-600 rounded-full border-4 ring ring-hijau bg-hijau text-white box-border h-8 w-16 md:h-12 md:w-36 border-transparent animate-border text-blue-500 font-semibold rounded-lg hover:bg-blue-100 transition duration-300">
                                        Explore
                                    </button>
                                </a>
                            </div>
                        </div>
                        <!-- pic md-2xl -->
                        <div class="hidden sm:block w-[500px] h-[500px] md:w-[1200px] md:h-[1200px] sm:mt-12 md:-mt-12 xl:mt-8">
                            <img src="{{ asset('storage/images/homepic.png') }}" alt="ellipse" class="hover:underline"/>
                        </div>
                    </div>
                </div>
            </div>


            <!-- 2 best seller section -->
            <div class="flex flex-col items-center xl:h-relative overflow-hidden space-y-10 my-14 -mt-12 xl:-mt-[200px] ">
                <a class="text-hijau font-bold tracking-wider text-3xl">Best Seller</a>
                <div class="group swiper-container">
                    <div class="swiper-wrapper xl:py-24">
                        <div class="swiper-slide">
                            <div class="flex space-x-24 items-center justify-center">
                                <img class="w-[150px] h-[150px]" src="{{ asset('storage/images/orangejuice1.png') }}" />
                                <img class="w-[150px] h-[150px]" src="{{ asset('storage/images/avocadojuice.png') }}" />
                                <img class="w-[150px] h-[150px]" src="{{ asset('storage/images/watermelonjuice.png') }}" />
                                <img class="w-[150px] h-[150px]" src="{{ asset('storage/images/orangejuice1.png') }}" />
                                <img class="w-[150px] h-[150px]" src="{{ asset('storage/images/orangejuice1.png') }}" />
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="flex space-x-24 items-center justify-center">
                                <img class="w-[150px] h-[150px]" src="{{ asset('storage/images/orangejuice1.png') }}" />
                                <img class="w-[150px] h-[150px]" src="{{ asset('storage/images/orangejuice1.png') }}" />
                                <img class="w-[150px] h-[150px]" src="{{ asset('storage/images/watermelonjuice.png') }}" />
                                <img class="w-[150px] h-[150px]" src="{{ asset('storage/images/orangejuice1.png') }}" />
                                <img class="w-[150px] h-[150px]" src="{{ asset('storage/images/orangejuice1.png') }}" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 3 -->
            <section class="">
                <div class="container text-center relative">
                    <div class="flex flex-col justify-center relative mx-auto ">
                        <div class="md:flex -mt-72 md:-mt-[230px] lg:-mt-[250px] xl:-mt-60  sm:-mt-[400px] md:mt-0 lg:-mt-[40px] lg:mx-12 gap-4">
                            <div class="h-[150px] w-[150px] md:h-[2600px] md:w-[2600px] lg:h-[2900px] lg:w-[2800px] xl:h-[1400px] xl:w-[1400px]  mx-auto md:mx-12">
                                <img src="{{ asset('storage/images/Owner.png') }}" alt="owner"/>
                            </div>
                            <div class="text-hijau mt-12 md:mt-40 lg:mt-44 xl:mt-32 md:pr-4">
                                <div class=" md:px-0 text-center md:text-left mt-4">
                                    <h1 class="font-bold text-3xl sm:text-4xl md:text-5xl lg:text-6xl tracking-widen">
                                        Pak Aga
                                    </h1>
                                    <h1 class="mt-0 xl:mt-2 text-hijau text-xl sm:text-3xl md:text-4xl italic my-4">
                                        Pemilik xtrajuice
                                    </h1>
                                    <img src="{{ asset('storage/images/Line.png') }}" alt="" class="mx-auto md:mx-0 my-1 lg:my-3">
                                </div>
                                <p class="text-sm sm:text-base md:text-xl lg:text-2xl font-bold mt-4 text-center px-12 md:px-0 md:text-left">
                                    Pemilik stand jus buah "Xtra Juice" yang merupakan sebuah usaha minuman yang berlokasi di kantin Universitas Internasioanal Batam. UMKM ini berdiri pada tahun 2016 dan sudah beroperasi selama 18 tahun. Stand Jus Buah "Xtra Juice" ini menyediakan beragam Jus dengan 16 pilihan buah dan sayur yang segar.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- 4 -->
            <section class="bg-white h-relative">
                <div class="">
                    <div class="text-center justify-center text-4xl font-bold text-hijau tracking-wider">
                        <h1 class="">Testimonial</h1>
                    </div>
                    <div x-data="carousel()" class="relative overflow-hidden w-full max-w-5xl mx-auto mt-60 mb-28">
                        <!-- Carousel Wrapper -->
                        <div class="flex transition-transform duration-500" :style="{ transform: `translateX(-${currentIndex * 100}%)` }">
                            <!-- Card 1 -->
                            <div class="bg-yellow-400 p-6 rounded-lg shadow-md w-64 flex-shrink-0">
                                <div class="bg-green-700 rounded-full h-16 w-16 mb-4"></div>
                                <div class="flex items-center mb-4">
                                    <span class="text-yellow-500 text-xl">&#9733;</span>
                                    <span class="text-yellow-500 text-xl">&#9733;</span>
                                    <span class="text-yellow-500 text-xl">&#9733;</span>
                                    <span class="text-yellow-500 text-xl">&#9733;</span>
                                    <span class="text-yellow-500 text-xl">&#9733;</span>
                                </div>
                                <h2 class="text-lg font-semibold mb-2">Amelia Reslie</h2>
                                <p class="text-gray-700">Fresh flavors, unbeatable quality, and exceptional service!</p>
                            </div>
                            <!-- Card 2 -->
                            <div class="bg-yellow-50 p-6 rounded-lg shadow-md w-64 flex-shrink-0">
                                <div class="bg-green-700 rounded-full h-16 w-16 mb-4"></div>
                                <div class="flex items-center mb-4">
                                    <span class="text-yellow-500 text-xl">&#9733;</span>
                                    <span class="text-yellow-500 text-xl">&#9733;</span>
                                    <span class="text-yellow-500 text-xl">&#9733;</span>
                                    <span class="text-yellow-500 text-xl">&#9733;</span>
                                    <span class="text-yellow-500 text-xl">&#9734;</span>
                                </div>
                                <h2 class="text-lg font-semibold mb-2">Leo Ong</h2>
                                <p class="text-gray-700">Consistently delicious juices and impeccable service.</p>
                            </div>
                            <!-- Card 3 -->
                            <div class="bg-yellow-50 p-6 rounded-lg shadow-md w-64 flex-shrink-0">
                                <div class="bg-green-700 rounded-full h-16 w-16 mb-4"></div>
                                <div class="flex items-center mb-4">
                                    <span class="text-yellow-500 text-xl">&#9733;</span>
                                    <span class="text-yellow-500 text-xl">&#9733;</span>
                                    <span class="text-yellow-500 text-xl">&#9733;</span>
                                    <span class="text-yellow-500 text-xl">&#9733;</span>
                                    <span class="text-yellow-500 text-xl">&#9733;</span>
                                </div>
                                <h2 class="text-lg font-semibold mb-2">Kevin Wang</h2>
                                <p class="text-gray-700">Never fails to impress with their incredible flavors and top-notch quality.</p>
                            </div>
                        </div>
                        <!-- Navigation Buttons -->
                        <button @click="prev()" class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-yellow-400 p-2 rounded-full shadow-md">Prev</button>
                        <button @click="next()" class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-yellow-400 p-2 rounded-full shadow-md">Next</button>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <script src="{{ mix('js/app.js') }}"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var swiper = new Swiper('.swiper-container', {
                // Konfigurasi Swiper
                autoplay: {
                    delay: 2000, // Waktu (ms) antara perpindahan slide
                    disableOnInteraction: false, // Autoplay tetap berjalan meskipun pengguna melakukan interaksi
                },
                loop: true, // Mengulang slide dari awal setelah mencapai slide terakhir
                slidesPerView: 'auto', // Jumlah slide yang terlihat dalam satu tampilan
                allowTouchMove: false, // Menonaktifkan gerakan sentuh untuk menggeser slide
                spaceBetween: 0 // Tidak ada jarak antara slide
            });
        });
    </script>
</body>
    <!-- footer -->
    <footer>
        <x-footer />
    </footer>
</html>
