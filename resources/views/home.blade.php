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

  <x-faqs></x-faqs>

  <section class="max-w-6xl mx-auto bg-gradient-to-t from-graone to-gratwo p-10 rounded-3xl mb-10 sm:w-full sm:p-4 sm:rounded-none sm:mb-0">
    <div class="max-w-6xl p-10 mx-auto py-10 grid grid-cols-5 gap-x-10 sm:max-w-sm sm:grid-cols-1 sm:gap-y-8 sm:p-4">

      <!-- company -->

      <div class=" flex flex-col col-span-2 gap-y-6 sm:col-span-1">
        <svg class="sm:w-1/2" width="210" height="42" viewBox="0 0 210 42" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M15.5709 2.58269L1.073 17.077C1.02574 17.1244 0.964254 17.1549 0.897964 17.164C0.831673 17.173 0.764239 17.1601 0.706003 17.1272C0.647768 17.0942 0.601945 17.0431 0.57556 16.9816C0.549175 16.9202 0.543687 16.8517 0.559934 16.7869C1.29278 13.8068 2.70136 11.0351 4.67675 8.68611C5.05335 8.2388 5.45218 7.80401 5.87326 7.38175C6.19457 7.06138 6.52366 6.75353 6.86052 6.45821C9.27481 4.34103 12.1633 2.83583 15.282 2.06976C15.3468 2.05394 15.415 2.05974 15.4762 2.08628C15.5374 2.11281 15.5883 2.15862 15.621 2.21673C15.6537 2.27484 15.6665 2.34205 15.6575 2.40812C15.6485 2.47419 15.6181 2.5355 15.5709 2.58269Z" fill="#92E48B"/>
          <path d="M7.47297 36.9766C6.73242 36.4679 6.02648 35.9105 5.35982 35.3083C5.29202 35.2461 5.22724 35.1813 5.16548 35.114C2.0632 31.6874 0.239636 27.2949 0.0030945 22.6792C-0.0150261 22.3002 0.0465866 21.9217 0.18395 21.5681C0.321314 21.2144 0.531371 20.8935 0.800546 20.6261L6.78046 14.6477C7.03402 14.3942 7.33503 14.1931 7.66632 14.0559C7.9976 13.9188 8.35268 13.8481 8.71126 13.8481C9.06984 13.8481 9.42491 13.9188 9.7562 14.0559C10.0875 14.1931 10.3885 14.3942 10.6421 14.6477L15.6114 19.6197C16.0663 20.0732 16.3464 20.6728 16.4022 21.3127C16.458 21.9525 16.286 22.5916 15.9165 23.117C13.4716 26.5908 12.0233 30.6668 11.7284 34.9041C11.5801 37.0019 9.21169 38.1722 7.47297 36.9766Z" fill="#63D69B"/>
          <path d="M17.768 17.3624L12.8446 12.4403C12.5911 12.1869 12.39 11.886 12.2528 11.5548C12.1155 11.2237 12.0449 10.8688 12.0449 10.5103C12.0449 10.1519 12.1155 9.79695 12.2528 9.4658C12.39 9.13465 12.5911 8.83377 12.8446 8.58034L19.1284 2.29817C19.4214 2.00481 19.7776 1.78227 20.1697 1.64758C20.5619 1.51288 20.9797 1.46959 21.3912 1.521L21.456 1.52877C26.4253 2.16349 31.042 4.43335 34.5786 7.98062C34.7898 8.19175 34.9958 8.40591 35.1966 8.62309C35.2794 8.71283 35.3558 8.80827 35.4253 8.9087L35.4557 8.95209C36.66 10.6968 35.5205 13.0867 33.4048 13.235C29.0351 13.5372 24.8393 15.0655 21.2992 17.6441C20.7734 18.0252 20.1289 18.2061 19.4816 18.1545C18.8343 18.1028 18.2267 17.822 17.768 17.3624Z" fill="#35C6A8"/>
          <path d="M33.099 34.6001C32.6779 35.0215 32.243 35.4202 31.7943 35.7963C27.8129 39.1374 22.6917 40.8066 17.5056 40.4535C16.8436 40.4097 16.22 40.127 15.7509 39.658C15.2817 39.189 14.999 38.5656 14.9552 37.9037C14.602 32.7189 16.2716 27.599 19.6136 23.6186C19.9893 23.1709 20.3881 22.7361 20.8101 22.3142C21.1314 21.993 21.4605 21.6852 21.7973 21.3907C23.7869 19.6488 26.1009 18.3166 28.6066 17.4706C31.1123 16.6246 33.7603 16.2815 36.3989 16.4608C37.0623 16.5041 37.6874 16.7871 38.1575 17.257C38.6276 17.727 38.9106 18.3519 38.9539 19.0151C39.1331 21.6531 38.7898 24.3004 37.9436 26.8054C37.0975 29.3105 35.765 31.6239 34.0228 33.6131C33.7287 33.9498 33.4207 34.2789 33.099 34.6001Z" fill="#00B4AF"/>
          <path d="M53.784 23.16C53.784 21.5547 54.0827 20.1453 54.68 18.932C55.296 17.7187 56.1267 16.7853 57.172 16.132C58.2173 15.4787 59.384 15.152 60.672 15.152C61.7733 15.152 62.7347 15.376 63.556 15.824C64.396 16.272 65.04 16.86 65.488 17.588V15.376H70.276V31H65.488V28.788C65.0213 29.516 64.368 30.104 63.528 30.552C62.7067 31 61.7453 31.224 60.644 31.224C59.3747 31.224 58.2173 30.8973 57.172 30.244C56.1267 29.572 55.296 28.6293 54.68 27.416C54.0827 26.184 53.784 24.7653 53.784 23.16ZM65.488 23.188C65.488 21.9933 65.152 21.0507 64.48 20.36C63.8267 19.6693 63.024 19.324 62.072 19.324C61.12 19.324 60.308 19.6693 59.636 20.36C58.9827 21.032 58.656 21.9653 58.656 23.16C58.656 24.3547 58.9827 25.3067 59.636 26.016C60.308 26.7067 61.12 27.052 62.072 27.052C63.024 27.052 63.8267 26.7067 64.48 26.016C65.152 25.3253 65.488 24.3827 65.488 23.188ZM83.2599 15.208C85.0892 15.208 86.5452 15.8053 87.6279 17C88.7292 18.176 89.2799 19.8 89.2799 21.872V31H84.5199V22.516C84.5199 21.4707 84.2492 20.6587 83.7079 20.08C83.1666 19.5013 82.4386 19.212 81.5239 19.212C80.6092 19.212 79.8812 19.5013 79.3399 20.08C78.7986 20.6587 78.5279 21.4707 78.5279 22.516V31H73.7399V15.376H78.5279V17.448C79.0132 16.7573 79.6666 16.216 80.4879 15.824C81.3092 15.4133 82.2332 15.208 83.2599 15.208ZM91.6551 23.16C91.6551 21.5547 91.9538 20.1453 92.5511 18.932C93.1671 17.7187 93.9978 16.7853 95.0431 16.132C96.0884 15.4787 97.2551 15.152 98.5431 15.152C99.6444 15.152 100.606 15.376 101.427 15.824C102.267 16.272 102.911 16.86 103.359 17.588V15.376H108.147V31H103.359V28.788C102.892 29.516 102.239 30.104 101.399 30.552C100.578 31 99.6164 31.224 98.5151 31.224C97.2458 31.224 96.0884 30.8973 95.0431 30.244C93.9978 29.572 93.1671 28.6293 92.5511 27.416C91.9538 26.184 91.6551 24.7653 91.6551 23.16ZM103.359 23.188C103.359 21.9933 103.023 21.0507 102.351 20.36C101.698 19.6693 100.895 19.324 99.9431 19.324C98.9911 19.324 98.1791 19.6693 97.5071 20.36C96.8538 21.032 96.5271 21.9653 96.5271 23.16C96.5271 24.3547 96.8538 25.3067 97.5071 26.016C98.1791 26.7067 98.9911 27.052 99.9431 27.052C100.895 27.052 101.698 26.7067 102.351 26.016C103.023 25.3253 103.359 24.3827 103.359 23.188ZM121.159 31L116.399 24.448V31H111.611V10.28H116.399V21.732L121.131 15.376H127.039L120.543 23.216L127.095 31H121.159ZM135.276 31.224C133.913 31.224 132.7 30.9907 131.636 30.524C130.572 30.0573 129.732 29.4227 129.116 28.62C128.5 27.7987 128.154 26.884 128.08 25.876H132.812C132.868 26.4173 133.12 26.856 133.568 27.192C134.016 27.528 134.566 27.696 135.22 27.696C135.817 27.696 136.274 27.584 136.592 27.36C136.928 27.1173 137.096 26.8093 137.096 26.436C137.096 25.988 136.862 25.6613 136.396 25.456C135.929 25.232 135.173 24.9893 134.128 24.728C133.008 24.4667 132.074 24.196 131.328 23.916C130.581 23.6173 129.937 23.16 129.396 22.544C128.854 21.9093 128.584 21.06 128.584 19.996C128.584 19.1 128.826 18.288 129.312 17.56C129.816 16.8133 130.544 16.2253 131.496 15.796C132.466 15.3667 133.614 15.152 134.94 15.152C136.9 15.152 138.44 15.6373 139.56 16.608C140.698 17.5787 141.352 18.8667 141.52 20.472H137.096C137.021 19.9307 136.778 19.5013 136.368 19.184C135.976 18.8667 135.453 18.708 134.8 18.708C134.24 18.708 133.81 18.82 133.512 19.044C133.213 19.2493 133.064 19.5387 133.064 19.912C133.064 20.36 133.297 20.696 133.764 20.92C134.249 21.144 134.996 21.368 136.004 21.592C137.161 21.8907 138.104 22.1893 138.832 22.488C139.56 22.768 140.194 23.2347 140.736 23.888C141.296 24.5227 141.585 25.3813 141.604 26.464C141.604 27.3787 141.342 28.2 140.82 28.928C140.316 29.6373 139.578 30.1973 138.608 30.608C137.656 31.0187 136.545 31.224 135.276 31.224ZM159.261 22.936C159.261 23.384 159.233 23.8507 159.177 24.336H148.341C148.416 25.3067 148.724 26.0533 149.265 26.576C149.825 27.08 150.506 27.332 151.309 27.332C152.504 27.332 153.334 26.828 153.801 25.82H158.897C158.636 26.8467 158.16 27.7707 157.469 28.592C156.797 29.4133 155.948 30.0573 154.921 30.524C153.894 30.9907 152.746 31.224 151.477 31.224C149.946 31.224 148.584 30.8973 147.389 30.244C146.194 29.5907 145.261 28.6573 144.589 27.444C143.917 26.2307 143.581 24.812 143.581 23.188C143.581 21.564 143.908 20.1453 144.561 18.932C145.233 17.7187 146.166 16.7853 147.361 16.132C148.556 15.4787 149.928 15.152 151.477 15.152C152.989 15.152 154.333 15.4693 155.509 16.104C156.685 16.7387 157.6 17.644 158.253 18.82C158.925 19.996 159.261 21.368 159.261 22.936ZM154.361 21.676C154.361 20.8547 154.081 20.2013 153.521 19.716C152.961 19.2307 152.261 18.988 151.421 18.988C150.618 18.988 149.937 19.2213 149.377 19.688C148.836 20.1547 148.5 20.8173 148.369 21.676H154.361ZM171.391 15.208C173.183 15.208 174.62 15.8053 175.703 17C176.785 18.176 177.327 19.8 177.327 21.872V31H172.567V22.516C172.567 21.4707 172.296 20.6587 171.755 20.08C171.213 19.5013 170.485 19.212 169.571 19.212C168.656 19.212 167.928 19.5013 167.387 20.08C166.845 20.6587 166.575 21.4707 166.575 22.516V31H161.787V10.28H166.575V17.476C167.06 16.7853 167.723 16.2347 168.563 15.824C169.403 15.4133 170.345 15.208 171.391 15.208ZM179.702 23.16C179.702 21.5547 180.001 20.1453 180.598 18.932C181.214 17.7187 182.045 16.7853 183.09 16.132C184.135 15.4787 185.302 15.152 186.59 15.152C187.691 15.152 188.653 15.376 189.474 15.824C190.314 16.272 190.958 16.86 191.406 17.588V15.376H196.194V31H191.406V28.788C190.939 29.516 190.286 30.104 189.446 30.552C188.625 31 187.663 31.224 186.562 31.224C185.293 31.224 184.135 30.8973 183.09 30.244C182.045 29.572 181.214 28.6293 180.598 27.416C180.001 26.184 179.702 24.7653 179.702 23.16ZM191.406 23.188C191.406 21.9933 191.07 21.0507 190.398 20.36C189.745 19.6693 188.942 19.324 187.99 19.324C187.038 19.324 186.226 19.6693 185.554 20.36C184.901 21.032 184.574 21.9653 184.574 23.16C184.574 24.3547 184.901 25.3067 185.554 26.016C186.226 26.7067 187.038 27.052 187.99 27.052C188.942 27.052 189.745 26.7067 190.398 26.016C191.07 25.3253 191.406 24.3827 191.406 23.188ZM208.366 26.94V31H205.93C204.194 31 202.841 30.58 201.87 29.74C200.899 28.8813 200.414 27.4907 200.414 25.568V19.352H198.51V15.376H200.414V11.568H205.202V15.376H208.338V19.352H205.202V25.624C205.202 26.0907 205.314 26.4267 205.538 26.632C205.762 26.8373 206.135 26.94 206.658 26.94H208.366Z" fill="white"/>
        </svg>                                 

        <div class="flex flex-col ring-2 ring-inset ring-prim/20 bg-prim bg-opacity-40 w-fit rounded-2xl gap-x-4 p-6 gap-y-2 sm:p-6">
          <h3 class="text-base text-white font-bold">Kritik & saran</h3>
          <p class="text-white text-xs text-justify">Kirim pertanyaan, laporan atau saran dan kami dengan senang hati merespons dalam waktu dekat.</p>
          <form action="" class="flex flex-col gap-y-3">
            <div class="">              
              <input type="email" id="email" class=" bg-gray-50 border border-gray-300 text-gratwo text-xs rounded-lg placeholder:text-gray-400 placeholder:text-xs focus:ring-prim focus:border-prim block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-300 dark:text-white dark:focus:ring-prim dark:focus:border-prim" placeholder="name@gmail.com" required />
            </div>
            <div class="">
              <textarea id="about" name="about" rows="3" class="block w-full rounded-lg border-0 py-2.5 text-xs text-gratwo placeholder:text-gray-400 placeholder:text-xs focus:ring-2 focus:ring-inset focus:ring-prim sm:text-sm" placeholder="Tuliskan pesanmu disini"></textarea>
            </div>
            <button type="submit" class="w-fit rounded-lg bg-prim px-6 py-2 text-sm font-semibold text-white shadow-sm hover:bg-prim/20 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-prim">Kirim</button>
          </form>
        </div>

      </div>

      <!-- sitemap1 -->

      <div class="flex flex-col gap-y-6 mt-14 sm:mt-0">
        <h3 class="text-white font-bold text-lg">Informasi Publik</h3>
        <ul class="flex flex-col gap-y-2">
          <li>
            <a href="#" class="text-sm text-white hover:text-foot sm:text-sm">
              Berita
            </a>
          </li>
          <li>
            <a href="#" class="text-sm text-white hover:text-foot sm:text-sm">
              Buku Panduan
            </a>
          </li>
          <li>
            <a href="#" class="text-sm text-white hover:text-foot sm:text-sm">
              Cek Status Gizi
            </a>
          </li>
          <li>
            <a href="#" class="text-sm text-white hover:text-foot sm:text-sm">
              Himbauan
            </a>
          </li>
        </ul>
      </div>

      <!-- sitemap2 -->

      <div class="flex flex-col gap-y-6 mt-14 sm:mt-0">
        <h3 class="text-white font-bold text-lg">Tentang</h3>
        <ul class="flex flex-col gap-y-2">
          <li>
            <a href="#" class="text-sm text-white hover:text-foot sm:text-sm">
              Profil
            </a>
          </li>
          <li>
            <a href="#" class="text-sm text-white hover:text-foot sm:text-sm">
              Visi & Misi
            </a>
          </li>
          <li>
            <a href="#" class="text-sm text-white hover:text-foot sm:text-sm">
              Kontributor
            </a>
          </li>
          <li>
            <a href="#" class="text-sm text-white hover:text-foot sm:text-sm">
              Referensi
            </a>
          </li>
        </ul>
      </div>

      <!-- sitemap3 -->

      <div class="flex flex-col gap-y-6 mt-14 sm:mt-0">
        <h3 class="text-white font-bold text-lg">Bantuan</h3>
        <ul class="flex flex-col gap-y-2">
          <li>
            <a href="../src/guide.html" class="text-sm text-white hover:text-foot sm:text-sm">
              Panduan Pengguna
            </a>
          </li>
          <li>
            <a href="../src/report.html" class="text-sm text-white hover:text-foot sm:text-sm">
              Lapor Kendala Layanan
            </a>
          </li>            
          <li>
            <a href="../src/contributors.html" class="text-sm text-white hover:text-foot sm:text-sm">
              Kontributor
            </a>
          </li>
        </ul>
      </div>
      
    </div>
    <div class="mt-2 flex items-center justify-center gap-x-6">                  
      <h3 class="text-sm sm:text-xs text-center text-white sm:mb-4"><span>&#169</span> 2024 anaksehat - Fakultas Teknik dan Ilmu Komputer</h3>
    </div>
  </section>
  
</body>
</html>