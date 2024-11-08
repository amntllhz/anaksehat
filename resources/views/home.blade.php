<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hello Home</title>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    @vite(['resources/css/app.css','resources/js/app.js','resources/js/navbar.js'])
</head>    
<body class="font-in font-feature-settings-cv11">

  <x-navbar></x-navbar>

  <x-hero></x-hero>

  <x-features></x-features>

  <section class="max-w-6xl mx-auto p-10 sm:w-full sm:p-4">
    <div class="p-10 sm:p-4">

      <div class="space-y-2">
        <h1 class="text-3xl font-bold text-center text-prim sm:text-2xl">Frequently Asked Questions</h1>
        <p class="text-gray-400 text-sm text-center sm:text-xs">Beberapa pertanyaan yang sering diajukan oleh pengguna mengenai platform anaksehat</p>
      </div>
  
      <div class="mt-6">      
        <div id="accordion-flush" data-accordion="collapse" data-active-classes="text-sm bg-white dark:bg-gray-900 text-[#FFA17A] dark:text-white" data-inactive-classes="text-prim dark:text-gray-400">
          <h2 id="accordion-flush-heading-1">
            <button type="button" class=" flex items-center justify-between w-full py-5 font-medium rtl:text-right text-prim border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 gap-3" data-accordion-target="#accordion-flush-body-1" aria-expanded="true" aria-controls="accordion-flush-body-1">
              <span class="text-sm">Apa itu Anaksehat ?</span>
              <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
              </svg>
            </button>
          </h2>
          <div id="accordion-flush-body-1" class="hidden" aria-labelledby="accordion-flush-heading-1">
            <div class="py-5 border-b border-gray-200 dark:border-gray-700">
              <p class="mb-2 text-justify text-prim text-sm dark:text-gray-400">anaksehat merupakan platform yang menyediakan informasi tentang gizi balita, pola makan yang tepat sesuai usia, serta cara mengatasi tantangan yang sering dihadapi dalam memberi makan balita. Selain itu platform ini juga menyediakan layanan Cek status gizi balita dengan sistem otomatis.</p>            
            </div>
          </div>
          <h2 id="accordion-flush-heading-2">
            <button type="button" class=" flex items-center justify-between w-full py-5 font-medium rtl:text-right text-prim border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 gap-3" data-accordion-target="#accordion-flush-body-2" aria-expanded="false" aria-controls="accordion-flush-body-2">
              <span class="text-sm text-left">Apa tujuan utama dari website Anaksehat ?</span>
              <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
              </svg>
            </button>
          </h2>
          <div id="accordion-flush-body-2" class="hidden" aria-labelledby="accordion-flush-heading-2">
            <div class="py-5 border-b border-gray-200 dark:border-gray-700">
              <p class="mb-2 text-justify text-prim text-sm dark:text-gray-400">Tujuan utama website Anaksehat adalah memberikan informasi yang akurat dan terpercaya seputar gizi balita, serta memberikan edukasi kepada orang tua dan pengasuh mengenai cara memberikan makanan yang sehat dan seimbang untuk anak-anak di usia dini. Kami juga berfokus pada penyuluhan tentang dampak kekurangan gizi dan cara-cara mencegahnya.</p>            
            </div>
          </div>
          <h2 id="accordion-flush-heading-3">
            <button type="button" class=" flex items-center justify-between w-full py-5 font-medium rtl:text-right text-prim border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 gap-3" data-accordion-target="#accordion-flush-body-3" aria-expanded="false" aria-controls="accordion-flush-body-3">
              <span class="text-sm text-left">Bagaimana cara mendapatkan informasi gizi yang tepat untuk balita di Anaksehat ?</span>
              <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
              </svg>
            </button>
          </h2>
          <div id="accordion-flush-body-3" class="hidden" aria-labelledby="accordion-flush-heading-3">
            <div class="py-5 border-b border-gray-200 dark:border-gray-700">
              <p class="text-justify mb-2 text-prim text-sm dark:text-gray-400">Anda dapat mengakses berbagai artikel, panduan, dan tips terkait gizi balita berdasarkan usia dan kebutuhan spesifik. Kami menyediakan informasi yang mudah dipahami mengenai jenis makanan yang tepat, jadwal makan yang ideal, serta tanda-tanda apabila anak mengalami kekurangan gizi. Anda juga dapat mencari informasi berdasarkan kategori tertentu, seperti gizi seimbang, menu makan sehat, atau cara meningkatkan nafsu makan balita.</p>              
            </div>
          </div>
        </div>
      </div>

    </div>    
  </section>
  
</body>
</html>