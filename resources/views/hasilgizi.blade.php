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

    <x-breadcrumbdetail></x-breadcrumbdetail>

    <section class="max-w-6xl mx-auto px-10 sm:w-full sm:px-4 mb-24">
        <div class="flex flex-col p-10 w-full space-y-4 mb-10 sm:px-2 bg-white rounded-3xl ring-2 ring-inset ring-prim/20">
            <h1 class="text-2xl text-prim font-bold">Hasil Cek Gizi Balita</h1>
            <p class="text-gray-600 text-sm">Berikut adalah hasil perhitungan status gizi balita Anda.</p>

            <!-- Tampilkan Hasil -->
            <div class="mt-6 ">
                <table class="w-full border-collapse text-sm text-gray-700 sm:overflow-x-auto">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="border p-2 text-left">Nama</th>
                            <th class="border p-2 text-left">Jenis Kelamin</th>
                            <th class="border p-2 text-left">Umur (Bulan)</th>
                            <th class="border p-2 text-left">Berat Badan (kg)</th>
                            <th class="border p-2 text-left">Z-Score</th>
                            <th class="border p-2 text-left">Status Gizi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border p-2">{{ $nama }}</td>
                            <td class="border p-2">{{ $gender }}</td>
                            <td class="border p-2">{{ $umur }}</td>
                            <td class="border p-2">{{ $berat }}</td>
                            <td class="border p-2">{{ number_format($zscore, 2) }}</td>
                            <td class="border p-2">{{ $status }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Tombol Kembali -->
            <div class="mt-6">
                <a href="{{ url('/cekgizi') }}" class="w-fit rounded-lg bg-prim px-6 py-2 text-sm font-semibold text-white shadow-sm hover:bg-prim/20 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-prim">Kembali ke form cek gizi</a>
            </div>
        </div>
    </section>

    <x-footer></x-footer>

</body>
</html>