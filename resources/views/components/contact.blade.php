<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body class="bg-yellow min-h-screen">
<x-navbar />
    <!-- 1 -->
    <div>
        <div class="flex flex-col items-left ml-24 sm:ml-28 lg:ml-48 mt-12 sm:mt-16 lg:mt-24">
            <div class="flex flex-col items-left">
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-hijau">Contact Us</h1>
            </div>
            <div class="mt-16 text-hijau font-semibold text-base text-xl sm:text-2xl md:text-2xl lg:text-3xl">
                <p>+62-1234-5678-910 </p>
                <p>Baloi-Sei Ladi, Jl. Gajah Mada, Tiban Indah, Kec.</p>
                <p>Sekupang, Kota Batam, Kepulauan Riau 29426</p>
            </div>
        </div>
        <div class="flex gap-12">
            <img src="{{ asset('storage/images/whatsapp.png') }}" alt="ellipse" class="size-20 lg:size-20 -mt-72 sm:-mt-64 md:-mt-96 lg:mt-4 ml-8 lg:ml-44 px-4 py-2 hover:underline"/>
            <img src="{{ asset('storage/images/instagram.png') }}" alt="ellipse" class="size-20 lg:size-20 -mt-72 sm:-mt-64 md:-mt-96 lg:mt-4 ml-8 lg:-ml-16 px-4 py-2 hover:underline"/>
            <img src="{{ asset('storage/images/contactxtra.png') }}" alt="ellipse" class="size-4/12 lg:size-4/12 -mt-72 sm:-mt-64 md:-mt-96 lg:-mt-72 -ml-8 lg:ml-auto lg:mr-36 px-4 py-2 hover:underline"/>
        </div>
    </div>
    <!-- 2 -->
    <div class="mt-32 text-hijau font-semibold text-base text-xl sm:text-2xl md:text-2xl lg:text-3xl ml-24 sm:ml-28 lg:ml-48">
        <p>Your opinion is important to us !</p>
    </div>
    <div class="flex items-center justify-center min-h-screen">
        <form action="{{ route('review.save') }}" method="POST" class="mt-20 mr-36 w-full max-w-lg bg-white p-2 border border-gray-300 rounded-lg items-center">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 text-lg font-bold mb-2" for="name">Name</label>
                <input class="shadow appearance-none border border-green-500 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" name="name" type="text" placeholder="Your Name">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-lg font-bold mb-2" for="email">Email</label>
                <input class="shadow appearance-none border border-green-500 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" name="email" type="email" placeholder="Your Email">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-lg font-bold mb-2" for="review">Review</label>
                <textarea class="shadow appearance-none border border-green-500 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="review" name="review" rows="4" placeholder="Your Review"></textarea>
            </div>
            <div class="flex items-center justify-end">
                <button class="ring-lime-600 bg-lime-600 text-white rounded-full font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                    Submit
                </button>
            </div>
        </form>
    </div>
</body>
</html>
<x-footer /> 