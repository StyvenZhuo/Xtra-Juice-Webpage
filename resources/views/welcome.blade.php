<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xtra Juice</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @vite('resources/css/app.css')
</head>
<body>
    <!-- nav -->
    <header>
        <x-navbar />
    </header>
    <!-- 1 -->
    <section>
        <div class="flex mx-12">
            <div class="mt-16 ml-16 sm:ml-32 md:ml-48 xl:ml-96">
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
                <img src="{{ asset('storage/images/orangebg.png') }}" alt="" class="size-10/12 mt-36 -ml-72">
        </div>
    </section>

    <!-- 2 -->
    <section class="mt-44">
        <div class="text-center justify-center text-4xl font-bold text-hijau">
            <h1 class="">Best Seller</h1>
        </div>
        <div class="flex justify-center justify-between mt-16 mx-24 md:mx-44 xl:mx-80">
            <img src="{{ asset('storage/images/orangejuice.png') }}" alt="ellipse" class="size-24 sm:size-40 xl:size-56 lg:px-4 lg:py-2 hover:underline"/>
            <img src="{{ asset('storage/images/avocadojuice.png') }}" alt="ellipse" class="size-24 sm:size-40 xl:size-56 lg:px-4 lg:py-2 hover:underline"/>
            <img src="{{ asset('storage/images/guavajuice.png') }}" alt="ellipse" class="size-24 sm:size-40 xl:size-56 lg:px-4 lg:py-2 hover:underline"/>
        </div>
        <div class="">
            <ul class="flex justify-center gap-8 sm:gap-36 xl:gap-80">
                <li class="text-hijau text-md font-bold">Mango Juice</li>
                <li class="text-hijau text-md font-bold">Avocado Juice</li>
                <li class="text-hijau text-md font-bold">Guava Juice</li>
            </ul>
        </div>
    </section>

    <!-- footer -->
    <footer>
        <x-footer />
    </footer>
</body>
</html>