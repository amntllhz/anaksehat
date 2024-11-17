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

    <section class="max-w-6xl mx-auto px-10 sm:w-full sm:px-7 mb-10">
        <div class="grid grid-cols-3 gap-6 sm:grid-cols-1">

            @foreach ( $articles as $article )
                <a href="{{ url('/berita/' . $article->id) }}">
                    <div class="w-full bg-white p-5 rounded-3xl space-y-4 ring-2 ring-inset ring-prim/20 hover:shadow-xl hover:ease-in-out hover:duration-300 hover:shadow-prim/20 sm:p-4">
                        @if ($article->gambar)
                            <img class="object-cover w-full h-32 rounded-xl" src="{{ asset('storage/' . $article->gambar) }}" alt="">                            
                        @endif                        
                        <div class="space-y-2">                            
                            <div class="flex flex-row w-full justify-between items-center">
                                <p class="text-prim font-semibold text-xs py-1 px-3 bg-prim bg-opacity-10 rounded-md">Author</p>
                                <p class="text-gray-400 text-xs py-1.5 px-1">{{ $article->updated_at }}</p>
                            </div>
                            <h1 class="text-xl text-prim font-bold sm:text-xl">{{ $article->judul }}</h1>                    
                            <p class="text-gray-500 text-sm text-justify line-clamp-3 sm:text-xs">{{ $article->deskripsi }}</p>
                        </div>                
                    </div>            
                </a>  
            @endforeach                   

        </div>
    </section>

</body>
</html>