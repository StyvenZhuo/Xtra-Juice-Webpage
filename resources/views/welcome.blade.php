<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xtra Juice</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @vite('resources/css/app.css')
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
                    <h1 class="text-xl md:text-2xl font-bold text-hijau">Where Taste and Health</h1>
                    <h1 class="text-xl md:text-2xl font-bold text-hijau">Blend Perfectly</h1>
                </div>
                <div class="mt-4 mr-52">
                    <p class="text-md md:text-xl text-hijau font-semibold">Elevate your wellbeing with every sip, as our handpicked fruits, harmoniously combined to create a deliciously healthy treat for your enjoyment.</p>
                </div>
                <a href=""></a>
                    <button class="mt-5 border text-md md:text-xl border-b-5 border-r-5 b-600 rounded-full border-4 ring ring-lime-600 bg-lime-600 text-white box-border h-8 w-24 md:h-12 md:w-36">
                        Explore
                    </button>
                </a>
            </div>
            <div class="relative">
            <!-- BUTUH PERBAIKAN -->
                <img src="{{ asset('storage/images/orangebg.png') }}" alt="" class="size-11/12  mt-2 lg:mt-2 object-cover">
            </div>
        </div>
    </section>

    <!-- 2 -->
    <section class="mt-24">
        <div class="text-center justify-center text-4xl font-bold text-hijau">
            <h1 class="">Best Seller</h1>
        </div>
        <div class="flex justify-center justify-between mt-16 mx-8 sm:mx-28 md:mx-60 xl:mx-80">
            <img src="{{ asset('storage/images/orangejuice.png') }}" alt="ellipse" class="size-24 sm:size-40 md:size-48 xl:size-56 lg:px-4 lg:py-2 hover:underline"/>
            <img src="{{ asset('storage/images/avocadojuice.png') }}" alt="ellipse" class="size-24 sm:size-40 md:size-48 xl:size-56 lg:px-4 lg:py-2 hover:underline"/>
            <img src="{{ asset('storage/images/guavajuice.png') }}" alt="ellipse" class="size-24 sm:size-40 md:size-48 xl:size-56 lg:px-4 lg:py-2 hover:underline"/>
        </div>
        <div class="">
            <ul class="flex justify-center gap-8  sm:gap-36 md:gap-80 xl:gap-72">
                <li class="text-hijau text-md lg:text-xl font-bold">Mango Juice</li>
                <li class="text-hijau text-md lg:text-xl font-bold">Avocado Juice</li>
                <li class="text-hijau text-md lg:text-xl font-bold">Guava Juice</li>
            </ul>
        </div>
    </section>

    <!-- 3 -->
    <section>
        <div class="mx-4 sm:mx-20 lg:mx-72  mt-60 flex">
            <img src="{{ asset('storage/images/Owner.png') }}" alt="owner" class="size-72 sm:size-6/12 md:size-5/12 xl:size-5/12 px-4 py-2 hover:underline mt-24 "/>
                <div class="ml-3 font-bold text-hijau mt-36 sm:mt-52 md:mt-58 lg:mt-60">
                    <h1 class="text-xl sm:text-4xl md:text-5xl">Pak Aga</h1>
                    <h1 class="font-semibold mt-2 text-hijau text-md sm:text-3xl md:text-4xl">pemilik xtrajuice</h1>
                    <p class="text-xs sm:text-base md:text-xl mt-4 text-justify">Pemilik stand jus buah "Xtra Juice" yang merupakan sebuah usaha minuman yang berlokasi di kantin Universitas Internasioanal Batam. UMKM ini berdiri pada tahun 2016 dan sudah beroperasi selama 18 tahun.  Stand Jus Buah "Xtra Juice" ini menyediakan beragam Jus dengan 16 pilihan buah dan sayur yang segar.</p>
                 </div>
        </div>
    </section>

    <!-- 4 -->
    <section class="mt-56">
            <div class="text-center justify-center text-4xl font-bold text-hijau">
                <h1 class="">Best Seller</h1>
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

    <!-- footer -->
    <footer>
        <x-footer />
    </footer>
</body>
</html>