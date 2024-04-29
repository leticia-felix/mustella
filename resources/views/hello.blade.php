<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

<body class="bg-high-purplle flex justify-center items-center h-screen ">

    <div class="flex flex-col justify-center items-center h-scree">

        <p class="text-orange fs-1 font-bold">Olá</p>
        <p class="text-gray text-xl mb-6 ">Bem vindo(a) ao Mustela sua plataforma de estudos!</p>

        <div>
            <x-application-icon />
            <button
                type="button"
                class="mt-4 block w-full  full rounded-full bg-orange px-6 pb-2 pt-2.5 text-base font-bold uppercase leading-normal text-purplle  ">
                Login
            </button>
        </div>

        <p class="text-gray text-lg	mt-2">Ainda não está cadastrado?</p>
        <p class="text-orange font-bold">CADASTRE-SE</p>

        <div class="flex mt-4">
            <div class="m-2"> <x-instagram-logo/></div>
            <div class="m-2"> <x-instagram-logo/></div>

        </div>



      </div>


</body>
</html>
