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
    <section class="container flex">
        <div class="flex">
            <div class="mt-28 ml-16 sm:ml-32 md:ml-48 xl:mx-12">
                <div>
                    <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold font-sans text-hijau tracking-wider">Contact Us</h1>
                </div>
                <div class="mt-2">
                    <p class="text-md md:text-xl text-hijau font-semibold tracking-widen">+62-1234-5678-910</p>
                    <p class="text-md md:text-xl text-hijau font-semibold justify-between tracking-widen">Baloi-Sei Ladi, Jl. Gajah Mada, Tiban Indah, Kec.Sekupang, Kota Batam, Kepulauan Riau 29426</p>
                </div>
                <div class="flex gap-4 mt-2 ">
                    <img src="{{ asset('storage/images/whatsapp.png') }}" alt="ellipse" class="size-12 md:size-16  hover:underline"/>
                    <img src="{{ asset('storage/images/instagram.png') }}" alt="ellipse" class="size-12 md:size-16 hover:underline"/>
                </div>
            </div>
        </div>
        <div class="mt-12 mx-8 sm:mx-16 md:mx-8 md:mr-12">
            <img src="{{ asset('storage/images/contactxtra.png') }}" alt="ellipse" class="h-60 sm:h-72 md:h-96  hover:underline"/>
        </div>
    </section>

    <!-- 2 -->
    <div class="mt-72 text-hijau font-bold text-xl sm:text-2xl md:text-2xl lg:text-3xl ml-24 sm:ml-28 lg:ml-48 tracking-wider">
        <p>Your opinion is important to us !</p>
    </div>
    <div class="flex items-center justify-center mx-36">
        <form action="{{ route('review.save') }}" method="POST" class="mt-20 w-full max-w-lg bg-yellow p-2 rounded-lg items-center right-0 left 0">
            @csrf
            <div class="mb-4">
                <label class="block text-2xl text-hijau font-bold mb-2 tracking-wider" for="name">Name</label>
                <input class="shadow appearance-none border border-green-500 rounded w-full py-2 px-3 text-gray-700 leading-tight  focus:outline-none focus:shadow-outline" id="name" name="name" type="text" placeholder="Your Name">
            </div>
            <div class="mb-4">
                <label class="block text-2xl text-hijau font-bold mb-2 tracking-wider" for="email">Email</label>
                <input class="shadow appearance-none border border-green-500 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" name="email" type="email" placeholder="Your Email">
            </div>
            <div class="mb-4">
                <label class="block text-2xl text-hijau font-bold mb-2 tracking-wider" for="review">Review</label>
                <textarea class="shadow appearance-none border border-green-500 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="review" name="review" rows="4" placeholder="Your Review"></textarea>
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