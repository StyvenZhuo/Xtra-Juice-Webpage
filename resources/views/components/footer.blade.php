<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Footer</title>
</head>
<body>
  <footer class="pt-[4rem] pb-[2rem] bg-hijau">
    <div class="grid border-b-[1px] pb-[5rem] grid-cols-1 lg:grid-cols-1 md:grid-cols-1 w-[80%] mx-auto">
      <div class="flex items-center">
        <div class=" flex items-center justify-center">
          <img src="{{ asset('storage/images/map1.png') }}" alt="ellipse" class="h-[100px] w-[150px] md:h-[140px] md:w-[240px] lg:h-[200px] lg:w-[200px] hover:underline"/>
        </div>
        <div class="text-white ml-4">
            <h1 class="text-xl sm:text-4xl xl:text-5xl font-bold text-left tracking-wider">Kantin Universitas Internasional</h1>
            <p class="text-md sm:text-2xl xl:text-3xl">Baloi-Sei Ladi, Jl. Gajah Mada, Tiban Indah, Kec. Sekupang, Kota Batam, Kepulauan Riau 29426</p>
        </div>
        <div class="flex mt-40 lg:mt-56 gap-2">
          <a href="https://wa.me/082387535653/?text=urlencodedtext" class="text-white hover:underline"><img src="{{ asset('storage/images/whatsappfooter.png') }}" alt="ellipse" class="h-[30px] w-[60px] md:h-16 2xl:h-28 2xl:w-28 hover:underline"/></a>
          <a href="https://www.instagram.com/_xtrajuice?igsh=MnB3NTR4ajdybzJp" class="text-white hover:underline"><img src="{{ asset('storage/images/instagramfooter.png') }}" alt="ellipse" class="h-[30px] w-[60px] md:h-16 2xl:h-28 2xl:w-28 hover:underline"/></a>
        </div>


      </div>

    </div>


  </footer>
</body>
</html>