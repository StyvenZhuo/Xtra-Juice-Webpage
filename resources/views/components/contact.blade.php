<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Contact</title>
</head>
<body class="bg-yellow min-h-screen">
<x-navbar />

    <!-- 1 -->
    <section class="container flex mx-auto mt-0 sm:mt-28">
        <div class="flex flex-col">
            <div class="sm:hidden mx-auto">
                <img src="{{ asset('storage/images/contactxtra.png') }}" alt="ellipse" class="h-60  hover:underline"/> 
            </div>
            <div class="">
                <div class="mt-0 sm:mx-24 xl:mx-48 sm: text-center sm:text-left gap-4">
                    <div class="mx-auto">
                        <h1 class="text-6xl sm:text-3xl md:text-4xl font-bold font-sans text-hijau tracking-wider">Contact Us</h1>
                        <img src="{{ asset('storage/images/Line.png') }}" alt="" class="mx-auto sm:-ml-0 my-4">
                    </div>
                    <div class="flex-col mt-2">
                        <p class="text-3xl md:text-2xl text-hijau tracking-widen italic">+62-1234-5678-910</p>
                        <p class="mt-4 mx-12 sm:mx-auto text-xl md:text-2xl text-hijau font-semibold tracking-widen">Baloi-Sei Ladi, Jl. Gajah Mada, Tiban Indah, Kec.Sekupang, Kota Batam, Kepulauan Riau 29426</p>
                        <div class="flex justify-center sm:justify-start gap-3 mt-3">
                            <img src="{{ asset('storage/images/whatsapp.png') }}" alt="ellipse" class="size-12 md:size-16  hover:underline"/>
                            <img src="{{ asset('storage/images/instagram.png') }}" alt="ellipse" class="size-12 md:size-16 hover:underline"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-24 size-11/12 lg:size-6/12 xl:size-4/12 md:-mt-16 sm:-mt-12 md:mx-8 md:mr-6 lg:mr-36 xl:mr-44 hidden sm:block">
            <img src="{{ asset('storage/images/contactxtra.png') }}" alt="ellipse" class="hover:underline"/>
        </div>
    </section>


    <!-- 2 -->
    <div class="mt-36 text-hijau font-bold text-xl sm:text-2xl md:text-2xl lg:text-3xl text-center md:text-left sm:ml-28 lg:ml-48 tracking-wider">
        <p>Your opinion is important to us !</p>
    </div>
    <div class="flex items-center justify-center mx-36 mb-24">
        <form action="{{ route('review.save') }}" method="POST" class="mt-20 w-full max-w-lg bg-yellow p-2 rounded-lg items-center right-0 left 0">
            @csrf
            <div class="mb-4">
                <label class="block text-2xl text-hijau font-bold mb-2 tracking-wider" for="name">Name</label>
                <input class="shadow appearance-none border border-green-500 rounded w-full py-2 px-3 text-hijau leading-tight  focus:outline-none focus:shadow-outline" id="name" name="name" type="text" placeholder="Your Name">
            </div>
            <div class="mb-4">
                <label class="block text-2xl text-hijau font-bold mb-2 tracking-wider" for="email">Email</label>
                <input class="shadow appearance-none border border-green-500 rounded w-full py-2 px-3 text-hijau leading-tight focus:outline-none focus:shadow-outline" id="email" name="email" type="email" placeholder="Your Email">
            </div>
            <div class="mb-4">
                <label class="block text-2xl text-hijau font-bold mb-2 tracking-wider" for="review">Review</label>
                <textarea class="shadow appearance-none border border-green-500 rounded w-full py-2 px-3 text-hijau leading-tight focus:outline-none focus:shadow-outline" id="review" name="review" rows="4" placeholder="Your Review"></textarea>
            </div>
            <div class="flex items-center justify-end">
                <button class="ring-lime-600 bg-lime-600 text-white rounded-full font-bold py-2 px-4 focus:outline-none focus:shadow-outline" type="submit">
                    Submit
                </button>
            </div>
        </form>
    </div>
</body>
</html>
<x-footer /> 