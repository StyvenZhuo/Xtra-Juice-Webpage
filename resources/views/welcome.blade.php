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
    <div class="w-full max-w-screen-lg mx-auto">
        <!-- 1 -->
        <section class="container flex">
            <div class="flex">
                <div class="mt-28 ml-8 sm:ml-32 md:ml-48 xl:mx-12">
                    <div>
                        <h1 class="text-xl sm:text-3xl md:text-4xl font-bold font-sans text-hijau tracking-wider">Where Taste and Health</h1>
                        <h1 class="text-xl sm:text-3xl md:text-4xl mt-1 font-bold text-hijau tracking-wider">Blend Perfectly</h1>
                    </div>
                    <div class="mt-2">
                        <p class="text-md md:text-xl text-hijau font-semibold tracking-widen">Elevate your wellbeing with every sip, as our handpicked fruits, harmoniously combined to create a deliciously healthy treat for your enjoyment.</p>
                    </div>
                    <a href=""></a>
                        <button class="tracking-wider mt-5 border text-md md:text-xl border-b-5 border-r-5 b-600 rounded-full border-4 ring ring-hijau bg-hijau text-white box-border h-10 w-24 md:h-12 md:w-36 border-transparent animate-border text-blue-500 font-semibold rounded-lg hover:bg-blue-100 transition duration-300">
                            Explore
                        </button> 
                    </a>
                </div>
            </div>
            <div class="mt-24 sm:mx-16 md:mx-8 md:mr-12">
                <img src="{{ asset('storage/images/orangebg.png') }}" alt="ellipse" class="h-96 sm:h-72 md:h-96  hover:underline"/>
            </div>
        </section>

        <!-- 2 -->
        <section class="container mt-60 xl:mt-96 mx-auto">
            <div class="text-center justify-center text-4xl font-bold text-hijau tracking-widen">
                <h1 class="">Best Seller</h1>
            </div>
            <div class="">
                <div class="flex justify-center justify-between mx-16 mt-16">
                    <img src="{{ asset('storage/images/orangejuice.png') }}" alt="ellipse" class="h-32 sm:h-40 md:h-52 xl:h-52 lg:px-4 lg:py-2 hover:underline"/>
                    <img src="{{ asset('storage/images/avocadojuice.png') }}" alt="ellipse" class="h-32 sm:h-40 md:h-52 xl:h-52 lg:px-4 lg:py-2 hover:underline"/>
                    <img src="{{ asset('storage/images/guavajuice.png') }}" alt="ellipse" class="h-32 sm:h-40 md:h-52 xl:h-52 lg:px-4 lg:py-2 hover:underline"/>
                </div>
                <div class="">
                    <ul class="flex justify-center justify-between mx-16 sm:mx-20 md:mx-24">
                        <li class="text-hijau text-md lg:text-xl font-bold tracking-wider">Mango Juice</li>
                        <li class="text-hijau text-md lg:text-xl font-bold tracking-wider">Avocado Juice</li>
                        <li class="text-hijau text-md lg:text-xl font-bold tracking-wider">Guava Juice</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- 3 -->
        <section>
            <div class="container mx-auto mt-96">
                <div class="text-center justify-center text-3xl font-bold text-hijau tracking-wider">
                    <h1 class="">Owner Xtra-Juice</h1>
                </div>
                <div class="container flex mt-16 lg:mt-20">
                    <img src="{{ asset('storage/images/Owner.png') }}" alt="owner" class="h-72 sm:h-96 md:size-4/12 hover:underline ml-16"/>
                        <div class=" ml-2 lg:ml-8 text-hijau mt-16 sm:mt-24 xl:mt-40">
                            <h1 class="font-bold text-2xl sm:text-4xl md:text-5xl tracking-widen">Pak Aga</h1>
                            <h1 class="font-semibold mt-1 xl:mt-2 text-hijau text-xl sm:text-3xl md:text-4xl">pemilik xtrajuice</h1>
                            <p class="text-xs sm:text-base md:text-xl mt-4 text-justify mr-16 lg:mr-36">Pemilik stand jus buah "Xtra Juice" yang merupakan sebuah usaha minuman yang berlokasi di kantin Universitas Internasioanal Batam. UMKM ini berdiri pada tahun 2016 dan sudah beroperasi selama 18 tahun.  Stand Jus Buah "Xtra Juice" ini menyediakan beragam Jus dengan 16 pilihan buah dan sayur yang segar.</p>
                        </div>
                </div>
            </div>
        </section>

        <!-- 4 -->
        <section class="mt-56">
                <div class="text-center justify-center text-4xl font-bold text-hijau tracking-wider">
                    <h1 class="">Review</h1>
                </div>
            <div class="flex justify-around justify-center item-center mt-36 ">
                <!-- Card 1 -->
                <div class="bg-yellow-400 p-6 rounded-lg shadow-md w-64">
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
                <div class="bg-yellow-50 p-6 rounded-lg shadow-md w-64">
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
                <div class="bg-yellow-50 p-6 rounded-lg shadow-md w-64">
                    <div class="bg-green-700 rounded-full h-16 w-16 mb-4"></div>
                    <div class="flex items-center mb-4">
                        <span class="text-yellow-500 text-xl">&#9733;</span>
                        <span class="text-yellow-500 text-xl">&#9733;</span>
                        <span class="text-yellow-500 text-xl">&#9733;</span>
                        <span class="text-yellow-500 text-xl">&#9733;</span>
                        <span class="text-yellow-500 text-xl">&#9733;</span>
                    </div>
                    <h2 class="text-lg font-semibold mb-2">Kevin Wang</h2>
                    <p class="text-gray-700">never fails to impress with their incredible flavors and top-notch quality</p>
                </div>


            </div>
        </section>
    </div>
    <!-- footer -->
    <footer>
        <x-footer />
    </footer>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>