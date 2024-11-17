<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>anaksehat - Berita</title>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    @vite(['resources/css/app.css','resources/js/app.js','resources/js/navbar.js'])
</head>
<body class="font-in font-feature-settings-cv11">    
    
    <x-breadcrumb></x-breadcrumb>

    <section class="max-w-6xl mx-auto px-10 sm:w-full sm:p-4">
        <div class="grid grid-cols-3 gap-6 sm:grid-cols-1">

            <a href="/">
                <div class="w-full bg-white p-4 rounded-3xl ring-2 ring-inset ring-prim/20 space-y-2 hover:shadow-md hover:shadow-prim/20">
                    <img class="object-cover w-full h-32 rounded-xl" src="{{ asset('img/contoh.jpg') }}" alt="">
                    <div class="space-y-0">
                        <div class="flex flex-row w-full justify-between items-center ">
                            <p class="text-gray-400 text-xs py-1.5 px-1">Author</p>
                            <p class="text-gray-400 text-xs py-1.5 px-1">2 week ago</p>
                        </div>
                        <h1 class="text-xl text-prim font-bold text-justify sm:text-xl">Manfaat Makanan Bergizi Bagi Balita Indonesia</h1>                    
                    </div>                
                </div>            
            </a>         

        </div>
    </section>

</body>
</html>