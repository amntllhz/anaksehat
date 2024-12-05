<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>anaksehat - Hasil Gizi</title>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    @vite(['resources/css/app.css','resources/js/app.js','resources/js/navbar.js'])
</head>    
<body class="font-in font-feature-settings-cv11">  

    <x-breadcrumbcekgizi></x-breadcrumbcekgizi>

    <section class="max-w-6xl mx-auto px-10 sm:w-full sm:px-6 mb-24">
        <div class="flex flex-col p-10 w-full mb-10 sm:px-2 bg-white rounded-3xl ring-2 ring-inset ring-prim/20">
            <div class="space-y-2">
                <h1 class="text-2xl text-prim font-bold bg-prim bg-opacity-10 rounded-md text-center py-2 px-4">Hasil Cek Gizi Balita</h1>
                <div class="flex justify-between p-2 w-1/3 sm:w-full">
                    <div class="flex flex-col space-y-1 text-left w-full">
                        <p class="text-gray-700 font-semibold text-sm">Nama</p>
                        <p class="text-gray-700 font-semibold text-sm">Jenis Kelamin</p>
                        <p class="text-gray-700 font-semibold text-sm">Berat Badan</p>
                        <p class="text-gray-700 font-semibold text-sm">Panjang Badan</p>
                    </div>                      
                    <div class="flex flex-col space-y-1 text-left w-full">
                        <p class="text-gray-500 text-sm">{{ $nama }}</p>
                        <p class="text-gray-500 text-sm">{{ $gender }}</p>
                        <p class="text-gray-500 text-sm">{{ $berat }} kg</p>
                        <p class="text-gray-500 text-sm">{{ $panjang }} cm</p>
                    </div>          
                </div>
            </div>

            <!-- Tabel Hasil BB/U -->

            <table class="w-full table-fixed mt-4 border-collapse text-sm text-gray-500 sm:overflow-x-auto">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="border text-gray-700 p-2 text-left">Metode Perhitungan</th>                        
                        <th class="border text-gray-700 p-2 text-center">Z-Score BB/U</th>
                        <th class="border text-gray-700 p-2 text-center">Status Gizi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border p-2 text-justify">Metode BB/U adalah metode untuk menilai status gizi anak berdasarkan berat badan relatif terhadap umurnya</td>                        
                        <td class="border p-2 text-center">{{ number_format($zscoreBbu, 2) }}</td>
                        <td class="border p-2 text-center">{{ $statusBbu }}</td>
                    </tr>
                    <tr>
                        <td class="border p-2 text-justify">Metode PB/U adalah metode untuk menilai status gizi anak berdasarkan Panjang/Tinggi badan relatif terhadap umurnya</td>                        
                        <td class="border p-2 text-center">{{ number_format($zscorePbu, 2) }}</td>
                        <td class="border p-2 text-center">{{ $statusPbu }}</td>
                    </tr>
                </tbody>
            </table>
            
        </div>

        <!-- Tombol Kembali -->
        <div class="mt-6">
            <a href="{{ url('/cekgizi') }}" class="w-fit rounded-lg bg-prim px-6 py-2 text-sm font-semibold text-white shadow-sm hover:bg-gratwo focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-prim">
                Kembali
            </a>
        </div>
    </section>    

    <x-footer></x-footer>

</body>
</html>