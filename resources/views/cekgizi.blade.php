<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>anaksehat - Cek Gizi</title>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    @vite(['resources/css/app.css','resources/js/app.js','resources/js/navbar.js','resources/js/formval.js'])
</head>
<body class="font-in font-feature-settings-cv11">

    <section class="max-w-6xl p-10 mx-auto sm:w-full sm:p-6">
        <div class="flex font-semibold text-prim">                    
            {{ Breadcrumbs::render('cekgizi') }}    
        </div>
    </section>

    <section class="max-w-6xl mx-auto px-10 sm:w-full sm:px-6 mb-20">        
        <div class="flex flex-col w-full">
            <div class="space-y-4">
                <h1 class="text-3xl text-prim font-bold sm:text-xl">Cek Gizi Balita</h1>
                <p class="text-gray-500 text-sm text-justify">Platform ini hadir untuk menyediakan informasi tentang makanan bergizi,
                    pola makan yang tepat sesuai usia, serta cara mengatasi tantangan yang
                    sering dihadapi dalam memberi makan balita. <span class="font-bold text-prim">Cek status gizi</span>  balita Anda
                    secara langsung untuk memastikan mereka mendapatkan kebutuhan
                    nutrisi yang optimal
                </p>            
            </div>
            <form method="POST" action="{{ route('cekgizi.hitung') }}" class="mt-10 grid grid-cols-6 gap-6 sm:grid-cols-1">
                @csrf
                <div class="col-span-3">
                    <label for="nama" class="block mb-2 text-sm font-medium text-gray-400">Nama</label>            
                    <input name="nama" id="nama" type="text" class=" bg-gray-50 border border-gray-300 text-gratwo text-xs rounded-lg placeholder:text-gray-400 placeholder:text-xs focus:ring-prim focus:border-prim block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-300 dark:text-white dark:focus:ring-prim dark:focus:border-prim" placeholder="Tuliskan nama" required autocomplete="off"/>
                </div>
                <div class="col-span-3">
                    <label for="gender" class="block mb-2 text-sm font-medium text-gray-400">Jenis Kelamin</label>            
                    <select id="gender" name="gender" class="bg-gray-50 border border-gray-300 text-prim text-xs rounded-lg focus:ring-prim focus:border-prim block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">                        
                        <option class="text-xs" value="laki-laki">Laki-laki</option>
                        <option class="text-xs" value="perempuan">Perempuan</option>                        
                    </select>
                </div>
                <div class="col-span-2 sm:col-span-3">
                    <label for="umur" class="block mb-2 text-sm font-medium text-gray-400">Umur ( Dalam bulan )</label>            
                    <input name="umur" id="umur" type="number" min="0" max="60" class=" bg-gray-50 border border-gray-300 text-gratwo text-xs rounded-lg placeholder:text-gray-400 placeholder:text-xs focus:ring-prim focus:border-prim block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-300 dark:text-white dark:focus:ring-prim dark:focus:border-prim" placeholder="Tuliskan Umur" required autocomplete="off" inputmode="numeric"/>
                </div>
                <div class="col-span-2 sm:col-span-3">
                    <label for="berat" class="block mb-2 text-sm font-medium text-gray-400">Berat Badan</label>            
                    <input name="berat" id="berat" type="text" step="0.1" min="0" class=" bg-gray-50 border border-gray-300 text-gratwo text-xs rounded-lg placeholder:text-gray-400 placeholder:text-xs focus:ring-prim focus:border-prim block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-300 dark:text-white dark:focus:ring-prim dark:focus:border-prim" placeholder="Tuliskan Berat Badan" required autocomplete="off" />
                </div>
                <div class="col-span-2 sm:col-span-3">
                    <label for="panjang" class="block mb-2 text-sm font-medium text-gray-400">Panjang Badan</label>            
                    <input name="panjang" id="panjang" type="text" step="0.1" min="0" class=" bg-gray-50 border border-gray-300 text-gratwo text-xs rounded-lg placeholder:text-gray-400 placeholder:text-xs focus:ring-prim focus:border-prim block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-300 dark:text-white dark:focus:ring-prim dark:focus:border-prim" placeholder="Tuliskan Berat Badan" required autocomplete="off" />
                </div>

                <button type="submit" class="w-fit rounded-lg bg-prim px-6 py-2 text-sm font-semibold text-white shadow-sm hover:bg-gratwo focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-prim">Cek Status Gizi</button>
            </form>
        </div>
    </section>

    <x-footer></x-footer>

</body>
</html>