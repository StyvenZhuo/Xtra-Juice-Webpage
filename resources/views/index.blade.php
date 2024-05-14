<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Xtra-Juice</title>
</head>
<body class="bg-yellow">
    <x-app title="Home Page">
            <div class="">
                <div class="flex flex-col items-left ml-20 lg:ml-48 lg:mt-20">
                    <div class="flex flex-col items-left  ">
                        <h1 class="text-2xl lg:text-5xl font-bold text-hijau">Where Taste and Health</h>
                        <p class="text-2xl lg:text-5xl mt-2">Blend Perfectly</p>
                    </div>
                    <div class="mt-5 text-hijau font-semibold text-base">
                        <p>Elevate your wellbeing with every sip, as our </p>
                        <p>handpicked fruits, harmoniously combined to create</p>
                        <p>a deliciously healthy treat for your enjoyment.</p>
                    </div>
                </div>
                <div class="flex">
                    <a href="/">
                        <button class="ml-20 lg:ml-55 mt-7 border text-xl border-b-5 border-r-5 b-600 rounded-full border-4 ring ring-lime-600 bg-lime-600 text-white box-border h-12 w-36 items-left lg:ml-48">
                             Explore
                        </button>
                    </a>
                    <img src="{{ asset('storage/images/orangebg.png') }}" alt="ellipse" class="size-fit lg:size-9/12 -mt-28 sm:-mt-52 lg:-mt-96 -ml-8 lg:ml-8 px-4 py-2 hover:underline"/>
                </div>
            </div>
            <div class="items-center justify-center">
                <div class="text-center justify-center text-3xl font-bold text-hijau capitalize ">
                    Best Seller
                </div>
                <div class="flex-grow flex gap-10 items-center flex-grow justify-center mt-40">
                    <img src="{{ asset('storage/images/Ellipse1.png') }}" alt="ellipse" class="size-40 md:size-36 lg:size-52 lg:px-4 lg:py-2 hover:underline"/>
                    <img src="{{ asset('storage/images/Ellipse1.png') }}" alt="ellipse" class="size-40 md:size-36 lg:size-52 lg:px-4 lg:py-2 hover:underline"/>
                    <img src="{{ asset('storage/images/Ellipse1.png') }}" alt="ellipse" class="size-40 md:size-36 lg:size-52 lg:px-4 lg:py-2 hover:underline"/>
                </div>
                <a class="justify-center items-center right-0 left-0 border place-content-center" href="/">
                    <button class="mt-12 border text-xl border-b-5 border-r-5 b-600 rounded-full border-4 ring ring-lime-600 bg-lime-600 text-white box-border h-12 w-36 justify-center right-0 left-0">
                        Buy Now
                    </button>
                </a>
            </div>
            <div class="mt- ml-60">
                <div class="flex"> 
                    <img src="{{ asset('storage/images/Owner.png') }}" alt="owner" class="size-4/12 px-4 py-2 hover:underline"/>
                    <div class="mt-40 ml-10 font-bold text-lime-600 text-6xl">
                        Pak Aga
                    </div>
                </div>
                <div class="">
                    pemilik xtrajuice
                </div>
            </div>
            <div class="text-center mt-60 text-3xl font-bold text-lime-700 capitalize">
                Testimonials
            </div>
            <div class="flex-grow flex gap-44 items-center flex-grow justify-center mt-40">
                <img src="{{ asset('storage/images/testi123.png') }}" alt="ellipse" class="size-2/12 px-4 py-2 hover:underline"/>
                <img src="{{ asset('storage/images/testi123.png') }}" alt="ellipse" class="size-2/12 px-4 py-2 hover:underline"/>
                <img src="{{ asset('storage/images/testi123.png') }}" alt="ellipse" class="size-2/12 px-4 py-2 hover:underline"/>
            </div>
    </x-app>
</body>
</html>