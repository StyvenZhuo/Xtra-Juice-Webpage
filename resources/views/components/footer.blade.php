<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Footer</title>
</head>
<body>
<footer class="container bg-green py-4 px-4 mt-72 right-0 left-0 bottom-0">
  <div class="flex flex-col md:flex-row items-center justify-between mx-2 mt-2">
    <div class="flex text-center md:text-left mx-2 sm:mx-8 lg:mx-40">
      <a href="https://www.google.com/maps/place/Universitas+Internasional+Batam/@1.1195485,104.000468,17z/data=!3m1!4b1!4m6!3m5!1s0x31d98be09646b351:0x36a826082690c786!8m2!3d1.1195431!4d104.0030429!16s%2Fg%2F120jxbjn?entry=ttu">
        <img src="{{ asset('storage/images/map1.png') }}" alt="ellipse" class="h-36 sm:h-40 md:size-44 xl:size-60 mb-12 sm:mb-16 lg:mb-0 hover:underline"/>
      </a>
      <div class="ml-4 text-white">
        <h1 class="mt-5 text-xl md:text-2xl xl:text-4xl font-bold text-left">Kantin Universitas Internasional</h1>
        <p class="text-xs md:text-base xl:text-2xl text-left mr-8">Baloi-Sei Ladi, Jl. Gajah Mada, Tiban Indah, Kec. Sekupang, Kota Batam, Kepulauan Riau 29426</p>
      </div>
      <div class="flex mt-20 sm:mt-24 md:mt-28 xl:mt-40 xl:-mr-16  gap-3 xl:gap-4">
        <a href="https://wa.me/082387535653/?text=urlencodedtext" class="text-white hover:underline"><img src="{{ asset('storage/images/whatsappfooter.png') }}" alt="ellipse" class="h-12 md:h-16 hover:underline"/></a>
        <a href="https://www.instagram.com/aming_kho/" class="text-white hover:underline"><img src="{{ asset('storage/images/instagramfooter.png') }}" alt="ellipse" class="h-12 md:h-16 hover:underline"/></a>
      </div>
    </div>
  </div>
</footer> 
</body>
</html>