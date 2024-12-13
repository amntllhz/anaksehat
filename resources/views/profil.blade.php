<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>anaksehat - Beranda</title>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    @vite(['resources/css/app.css','resources/js/app.js','resources/js/navbar.js','resources/js/success.js'])
</head>    
<body class="font-in font-feature-settings-cv11">

    <section class="max-w-6xl p-10 mx-auto sm:w-full sm:p-6">
        <div class="flex font-semibold text-prim">                    
            {{ Breadcrumbs::render('profil') }}    
        </div>
    </section>

    <x-footer></x-footer>

</body>
</html>