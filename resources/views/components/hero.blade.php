<section id="hero" class="h-screen bg-linear-to-b/hsl from-graone from-20% to-gratwo items-center flex flex-col justify-center pt-0 sm:pt-24 relative overflow-hidden">
    
    <img id="circle-fx" class="w-2/3 absolute -left-96 z-0" src="{{ asset('img/circle-fx.png') }}" alt="">

    <div class="flex flex-row max-w-5xl justify-between w-full mx-auto items-center sm:flex-col sm:p-8">      

      <div class="flex flex-col gap-y-4 w-1/2 z-20 sm:w-full">

        <div class="small-badge w-fit gap-x-2 flex flex-row ring-2 ring-inset ring-prim/10 bg-prim/10 rounded-lg py-1.5 px-4 sm:py-1 items-center">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 text-white">
            <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
          </svg>                              
          <p class="text-xs font-medium text-white sm:text-xs">Halo Keluarga Sehat</p>
        </div>
  
        <div class="flex flex-col gap-y-2 sm:text-center">
          <h1 class="font-in text-5xl font-semibold text-white leading-none sm:text-left sm:text-3xl md:text-3xl">Mari Bersama-sama<br>Cegah Stunting !</h1>
          <p class="max-w-md text-sm leading-5 text-gray-300 sm:text-left sm:text-xs sm:max-w-xs sm:leading-5 md:leading-5 md:text-xs">Informasi Gizi Balita, Cek status gizi balita, Buku Panduan Gizi, serta Layanan untuk Konsultasi Gizi bagi Ibu Pintar Indonesia</p>
        </div>
  
        <a href="#features" class=" w-fit text-sm bg-prim text-white py-2 rounded-lg font-semibold px-8 hover:bg-gratwo transition-all ease-in-out duration-300">Mulai</a>

      </div>

      {{-- gambar --}}
      <div class="flex flex-col w-1/2 z-10 sm:w-full">
        <img class="w-80 mx-auto pointer-events-none" src="{{ asset('img/hero-img.png') }}" alt="">
      </div>
      
    </div>

</section>