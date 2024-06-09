<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js defer"></script>
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <title>Menu</title>
</head>

@php
$product = App\Models\Product::all()
@endphp

<body class="bg-yellow w-full max-w-screen-2xl mx-auto">

    <!-- nav -->
    <header>
        <x-navbar />
    </header>

    <!-- 1 -->
    <section class="container flex mx-auto -mt-28 sm:mt-28 ">
        <div class="flex flex-col xl:mx-36">
            <div class="sm:hidden mx-auto mt-8">
                <img src="{{ asset('storage/images/menupic.png') }}" alt="ellipse" class="h-[200px] hover:underline"/> 
            </div>
            <div class="mt-1 mx-12 sm:mx-12 sm:mt-0 md:mx-4 xl:ml-8 sm:-mr-0 md:-mr-0 text-center sm:text-left ">
                <div class="mx-auto md:ml-0 lg:ml-4">
                    <h1 class="text-2xl sm:text-3xl md:text-5xl font-bold font-sans text-hijau tracking-wider">Try our Best Seller and taste the hype !</h1>
                    <span class="text-kuning text-3xl mx-auto sm:-ml-0 my-4">&#9733;</span>
                    <span class="text-kuning text-3xl mx-auto sm:-ml-0 my-4">&#9733;</span>
                    <span class="text-kuning text-3xl mx-auto sm:-ml-0 my-4">&#9733;</span>
                    <span class="text-kuning text-3xl mx-auto sm:-ml-0 my-4">&#9733;</span>
                    <span class="text-kuning text-3xl mx-auto sm:-ml-0 my-4">&#9733;</span>
                </div>
                <div class="mt-2 lg:ml-4">
                    <p class="text-md sm:text-xl md:text-3xl text-hijau font-semibold tracking-widen">The best one among the menus in the shop ! Juiced from the fruit freshly handpicked by the owner himself.</p>
                </div>
                <a href=""></a>
                    <button class="lg:ml-4 tracking-wider mt-5 border text-md md:text-xl border-b-5 border-r-5 b-600 rounded-full border-4 ring ring-hijau bg-hijau text-white box-border h-10 w-24 md:h-12 md:w-36 border-transparent animate-border text-blue-500 font-semibold rounded-lg hover:bg-blue-100 transition duration-300">
                        Buy Now
                    </button> 
                </a>
            </div>
        </div>
            <div class="mt-24 sm:-mt-32 md:-mt-36 xl:-mt-44 xl:mr-40  hidden sm:block">
                <img src="{{ asset('storage/images/menupic.png') }}" alt="ellipse" class="w-[600px] md:w-[800px] xl:w-[1200px] hover:underline"/>
            </div>
    </section>

        <!-- Menu mobile mode -->
        <div class="container md:hidden">
            <div class="text-center justify-center mt-60 text-4xl font-bold text-hijau tracking-widen">
                    <h1 class="">Menu</h1>
                </div>
                <div class="container mt-8 mx-auto">
                    @if(isset($product) && $product->count() > 0)
                        <div class="flex flex-wrap justify-center">
                            @foreach($product as $rs)
                                <div class="w-full md:w-1/2 lg:h-24 p-4">
                                    <div class="flex justify-center">
                                        <img src="{{ (!empty($rs->pic))? url('storage/images/upload/'.$rs->pic):url('storage/images/no_image.jpg') }}" alt="{{ $rs->menu }}" class="h-40 sm:h-40 md:h-52 xl:h-52 lg:px-4 lg:py-2 hover:underline"/>
                                    </div>
                                    <div class="text-center mt-2">
                                        <ul class="text-hijau text-2xl font-bold">
                                            <li>{{ $rs->menu }}</li>
                                        </ul>
                                        <ul class="text-hijau text-2xl font-base mt-2">
                                            <li>{{ $rs->price }}</li>
                                        </ul>
                                    </div>
                                </div>
                            @endforeach
                                </div>
                        @else
                            <div class="text-center">Product not found, please include them in database with "BV" in $id_product</div>
                    @endif
                </div>
        </div>


        
                    
        <!-- Menu size sm to lg -->
        <div class="hidden md:block py-60">
            <div class="text-center justify-center mt-0 text-4xl font-bold text-hijau tracking-wider">
                <h1 class="">Menu</h1>
            </div>
            <div class="container mt-8 mx-auto">
                @if(isset($product) && $product->count() > 0)
                    <div class="flex flex-wrap justify-center">
                        @foreach($product as $rs)
                            <div class="w-full md:w-1/2 lg:w-1/4 p-4">
                                <div class="flex justify-center">
                                    <img src="{{ (!empty($rs->pic))? url('storage/images/upload/'.$rs->pic):url('storage/images/no_image.jpg') }}" alt="{{ $rs->menu }}" class="md:h-60 lg:h-72 xl:h-60 lg:px-4 lg:py-2 hover:underline"/>
                                </div>
                                <div class="text-center mt-2">
                                    <ul class="text-hijau text-2xl font-bold">
                                        <li>{{ $rs->menu }}</li>
                                    </ul>
                                    <ul class="text-hijau text-2xl font-base mt-2">
                                        <li>{{ $rs->price }}</li>
                                    </ul>
                                </div>
                            </div>
                        @endforeach
                            </div>
                    @else
                        <div class="text-center">Product not found, please include them in database with "BV" in $id_product</div>
                @endif
            </div>
                    <!-- 2 -->
                    <!-- <div class="flex justify-center justify-between md:mx-16 mt-16">
                        <img src="{{ asset('storage/images/avocadojuice.png') }}" alt="ellipse" class="md:h-60 lg:h-72 xl:h-60 hover:underline"/>
                        <img src="{{ asset('storage/images/lemonjuice.png') }}" alt="ellipse" class="md:h-60 lg:h-72 xl:h-60 lg:px-4 lg:py-2 hover:underline"/>
                        <img src="{{ asset('storage/images/mangojuice.png') }}" alt="ellipse" class="md:h-60 lg:h-72 xl:h-60 lg:px-4 lg:py-2 hover:underline"/>
                        <img src="{{ asset('storage/images/cornjuice.png') }}" alt="ellipse" class="md:h-60 lg:h-72 xl:h-60 lg:px-4 lg:py-2 hover:underline"/>
                    </div>
                    <div class="justify-center justify-between md:mx-16 lg:mx-24 xl:mx-24">
                            <ul class="flex justify-center justify-between text-hijau text-2xl md:mx-3 font-bold mt-2">
                                <li class="">Avocado Juice</li>
                                <li class="">Lemon Juice</li>
                                <li class="">Mango Juice</li>
                                <li class="">Corn Juice</li>
                            </ul>
                            <ul class="flex justify-center text-hijau text-2xl font-base justify-between md:mx-6 mt-2">
                                <li class="">Rp 10.000,-</li>
                                <li class="">Rp 10.000,-</li>
                                <li class="">Rp 10.000,-</li>
                                <li class="">Rp 10.000,-</li>
                            </ul>
                    </div> -->
        </div>
    </div>

    <x-footer /> 
</body>
</html>
