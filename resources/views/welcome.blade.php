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

<body class="bg-yellow">
    <div class="max-w-screen-2xl mx-auto w-full relative">
            <!-- 1 -->
            <div class="">
                <div class="">
                    <div class="flex relative py-0 ">
                        <div class="flex flex-col sm:mx-44 gap-4 -mt-12 xl:mt-0">
                            <!-- pic mobile -->
                            <div class="sm:hidden mx-auto w-[300px]">
                                <img src="{{ asset('storage/images/homepic.png') }}" alt="ellipse"/>
                            </div>
                            <!-- text top -->
                            <div class="-mt-44 sm:mt-0 2xl:mt-36 sm:py-36 mx-8 sm:mx-24 md:mx-4 sm:-ml-24 md:-ml-20 2xl:-ml-24 xl:mx-0 text-center sm:text-left">
                                <div class="lg:ml-4">
                                    <h1 class="text-3xl sm:text-3xl md:text-4xl lg:text-5xl 2xl:text-6xl sm:-mr-40 font-bold font-sans text-hijau tracking-wider">
                                        Where Taste and Health Blend Perfectly
                                    </h1>
                                    <img src="{{ asset('storage/images/Line.png') }}" alt="" class="mx-auto sm:-ml-0 my-2 md:my-4">
                                </div>
                                <p class="mt-2 lg:ml-4 text-sm md:text-2xl 2xl:text-4xl sm:-mr-40 text-hijau font-semibold tracking-widen">
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
                        <div class="hidden sm:block sm:-mt-8 md:-mt-24 xl:-mt-16 2xl:-mt-24">
                            <img src="{{ asset('storage/images/homepic.png') }}" alt="ellipse" class="w-[2000px] h-[500px] md:w-[2100px] md:h-[700px] 2xl:w-[1800px] 2xl:h-[1000px] hover:underline"/>
                        </div>
                    </div>
                </div>
            </div>


            <!-- 2 best seller section -->
            <div class="flex flex-col items-center xl:h-relative overflow-hidden space-y-10 my-14 mt-36 2xl:mt-4 2xl:py-36 ">
                <a class="text-hijau font-bold tracking-wider text-3xl 2xl:text-6xl">Best Seller</a>
                <div class="group swiper-container">
                    <div class="swiper-wrapper xl:py-60">
                        <div class="swiper-slide">
                            <div class="flex space-x-24 items-center justify-center">
                                <img class="w-[150px] h-[150px] 2xl:w-[250px] 2xl:h-[250px]" src="{{ asset('storage/images/orangejuice1.png') }}" />
                                <img class="w-[150px] h-[150px] 2xl:w-[250px] 2xl:h-[250px]" src="{{ asset('storage/images/avocadojuice.png') }}" />
                                <img class="w-[150px] h-[150px] 2xl:w-[250px] 2xl:h-[250px]" src="{{ asset('storage/images/watermelonjuice.png') }}" />
                                <img class="w-[150px] h-[150px] 2xl:w-[250px] 2xl:h-[250px]" src="{{ asset('storage/images/orangejuice1.png') }}" />
                                <img class="w-[150px] h-[150px] 2xl:w-[250px] 2xl:h-[250px]" src="{{ asset('storage/images/orangejuice1.png') }}" />
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="flex space-x-24 items-center justify-center">
                                <img class="w-[150px] h-[150px] 2xl:w-[250px] 2xl:h-[250px]" src="{{ asset('storage/images/orangejuice1.png') }}" />
                                <img class="w-[150px] h-[150px] 2xl:w-[250px] 2xl:h-[250px]" src="{{ asset('storage/images/avocadojuice.png') }}" />
                                <img class="w-[150px] h-[150px] 2xl:w-[250px] 2xl:h-[250px]" src="{{ asset('storage/images/watermelonjuice.png') }}" />
                                <img class="w-[150px] h-[150px] 2xl:w-[250px] 2xl:h-[250px]" src="{{ asset('storage/images/orangejuice1.png') }}" />
                                <img class="w-[150px] h-[150px] 2xl:w-[250px] 2xl:h-[250px]" src="{{ asset('storage/images/orangejuice1.png') }}" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 3. Owner -->
            <section class="mt-60">
                <div class="container text-center relative">
                    <div class="flex flex-col justify-center relative mx-auto ">
                        <div class="sm:flex lg:mx-12 gap-4 xl:mx-44 2xl:mx-36 gap-24">
                            <div class=" mx-auto md:mx-6">
                                <img src="{{ asset('storage/images/Owner.png') }}" class="size-56 sm:h-[400px] sm:w-[1800px] md:h-[500px] md:w-[2500px] sm:mx-24" alt="owner" />
                            </div>
                            <div class="text-hijau mt-4 sm:mt-36 md:mt-36 lg:mt-40 md:pr-4 sm:ml-6">
                                <div class=" md:px-0 text-center sm:text-left mt-4 2xl:mt-28">
                                    <h1 class="font-bold text-3xl sm:text-4xl md:text-5xl lg:text-6xl 2xl:text-7xl tracking-widen">
                                        Pak Aga
                                    </h1>
                                    <h1 class="mt-0 xl:mt-2 text-hijau text-xl sm:text-3xl md:text-4xl 2xl:text-5xl italic my-4">
                                        Pemilik xtrajuice
                                    </h1>
                                    <img src="{{ asset('storage/images/Line.png') }}" alt="" class="mx-auto my-1 lg:my-3 sm:mx-0">
                                </div>
                                <p class="text-sm sm:text-base md:text-xl lg:text-2xl 2xl:text-4xl font-bold mt-4 text-center px-12 sm:px-0 md:px-0 sm:text-left">
                                    Pemilik stand jus buah "Xtra Juice" yang merupakan sebuah usaha minuman yang berlokasi di kantin Universitas Internasioanal Batam. UMKM ini berdiri pada tahun 2016 dan sudah beroperasi selama 18 tahun. Stand Jus Buah "Xtra Juice" ini menyediakan beragam Jus dengan 16 pilihan buah dan sayur yang segar.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

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
    </div>
    <!-- footer -->
    <footer>
        <x-footer />
    </footer>

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
</html>
