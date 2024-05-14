<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xtra Juice</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @vite('resources/css/app.css')
</head>
<body class="bg-yellow">
<x-navbar />
    <div>
        <div class="flex flex-col items-left ml-24 sm:ml-28 lg:ml-48 mt-12 sm:mt-16 lg:mt-24">
            <div class="flex flex-col items-left">
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-hijau">Where Taste and Health</h1>
                <p class="text-4xl sm:text-5xl lg:text-6xl mt-2 font-bold text-hijau">Blend Perfectly</p>
            </div>
            <div class="mt-5 text-hijau font-semibold text-base text-xl sm:text-2xl md:text-2xl lg:text-3xl">
                <p>Elevate your wellbeing with every sip, as our </p>
                <p>handpicked fruits, harmoniously combined to create</p>
                <p>a deliciously healthy treat for your enjoyment.</p>
            </div>
        </div>
        <div class="flex">
            <a href="">
                <button class="ml-20 sm:ml-48 lg:ml-55 mt-7 border text-xl border-b-5 border-r-5 b-600 rounded-full border-4 ring ring-lime-600 bg-lime-600 text-white box-border h-12 w-36 items-left lg:ml-48">
                    Explore
                </button>
            </a>
            <img src="{{ asset('storage/images/orangebg.png') }}" alt="ellipse" class="size-fit lg:size-9/12 -mt-72 sm:-mt-64 md:-mt-96 lg:-mt-96 -ml-8 lg:ml-8 px-4 py-2 hover:underline"/>
        </div>
    </div>
    <div class="items-center justify-center">
        <div class="text-center justify-center text-4xl font-bold text-hijau capitalize -mt-20 sm:-mt-72 md:-mt-80 lg:-mt-96">
            Best Seller
        </div>
        <div class="flex gap-9 md:gap-36 lg:gap-40 items-center justify-center mt-40">
            <img src="{{ asset('storage/images/orangejuice.png') }}" alt="ellipse" class="size-60 sm:size-72 md:size-80 lg:size-96 lg:px-4 lg:py-2 hover:underline"/>
            <img src="{{ asset('storage/images/avocadojuice.png') }}" alt="ellipse" class="size-60 sm:size-72 md:size-80 lg:size-96 lg:px-4 lg:py-2 hover:underline"/>
            <img src="{{ asset('storage/images/guavajuice.png') }}" alt="ellipse" class="size-60 sm:size-72 md:size-80 lg:size-96 lg:px-4 lg:py-2 hover:underline"/>
        </div>
        <form method="POST" action="/">
            @csrf
        <div class="">
            <ul class="flex justify-center gap-24 sm:gap-44 md:gap-80 lg:gap-96">
                <li class="text-hijau text-2xl font-bold">Mango Juice</li>
                <li class="text-hijau text-2xl font-bold">Avocado Juice</li>
                <li class="text-hijau text-2xl font-bold">Guava Juice</li>
            </ul>
        </div>
        <div class="flex justify-center items-center mt-5">
            <button type="submit" class="mt-12 border text-xl border-b-5 border-r-5 b-600 rounded-full border-4 ring ring-lime-600 bg-lime-600 text-white box-border h-12 w-36 justify-center right-0 left-0">
                Buy Now
            </button>
        </div>
        </form>
    </div>
    <div class="ml-12 sm:ml-36 mt-36">
        <div class="flex"> 
            <img src="{{ asset('storage/images/Owner.png') }}" alt="owner" class="size-96 sm:size-6/12 lg:size-5/12 px-4 py-2 hover:underline mt-24 "/>
            <div class="ml-3 font-bold text-hijau mt-44 sm:mt-52 md:mt-58 lg:mt-72 mr-20 lg:mr-80">
                <h1 class="text-5xl sm:text-6xl md:text-7xl">Pak Aga</h1>
                <h1 class="font-semibold text-hijau text-3xl sm:text-4xl md:text-5xl mt-2">pemilik xtrajuice</h1>
                <p class="text-sm sm:text-base md:text-3xl mt-3 text-justify">Pemilik stand jus buah "Xtra Juice" yang merupakan sebuah usaha minuman yang berlokasi di kantin Universitas Internasioanal Batam. UMKM ini berdiri pada tahun 2016 dan sudah beroperasi selama 18 tahun.  Stand Jus Buah "Xtra Juice" ini menyediakan beragam Jus dengan 16 pilihan buah dan sayur yang segar.</p>
            </div>
        </div>
    </div>
    <div class="text-center mt-60 text-3xl font-bold text-lime-700 capitalize">
        Testimonials
    </div>
    <div class="flex gap-16 md:gap-36 lg:gap-44 items-center justify-center mt-40">
        <img src="{{ asset('storage/images/testi123.png') }}" alt="ellipse" class="size-44 md:size-64 lg:size-2/12 px-4 py-2 hover:underline"/>
        <img src="{{ asset('storage/images/testi123.png') }}" alt="ellipse" class="size-44 md:size-64 lg:size-2/12 px-4 py-2 hover:underline"/>
        <img src="{{ asset('storage/images/testi123.png') }}" alt="ellipse" class="size-44 md:size-64 lg:size-2/12 px-4 py-2 hover:underline"/>
    </div>
<x-footer />
</body>
</html>