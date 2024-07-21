<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<body>
    <header class=" bg-deadpool-red  text-white p-4">
        <div class="  flex  gap-24 ">
            <div>
                <h1 class="text-2xl font-bold">HostPool</h1>
            </div>
            <nav class="flex items-center space-x-4  ">
                <ul class="flex space-x-4">
                    <li><a href="#" class="text-deadpool-black-400">Home</a></li>
                    <li><a href="#" class="text-deadpool-black">Sobre</a></li>
                    <li><a href="#" class="hover:text-gray-400">Contato</a></li>
                </ul>
            </nav>

            <nav class="flex items-center justify-end space-x-4 ml-auto">
                <ul class="flex space-x-4">
                    <li><a href="#" class="hover:text-gray-400">Login</a></li>
                    <li><a href="#" class="hover:text-gray-400">Sobre</a></li>
                    <li><a href="#" class="hover:text-gray-400">Contato</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="flex flex-col md:flex-row  items-center p-10 ">
        <div class="flex-1 gap-2">
            <div>
                <h3 class="">Hospedagem de site</h3>
            </div>
            <div>
                <h1 class=" text-deadpool-black text-6xl">Hospedagem de site consolidada com tudo <br> para seu sucesso
                </h1>
            </div>
            <p class="text-deadpool-grey text-xl">Há 16 anos garantindo todas as ferramentas para você prosperar</p>
            <div class="mt-2">
                <ul class="flex gap-6  list-disc ">
                    <li>Migração de site grátis</li>
                    <li>Suporte 24h por dia</li>
                    <li>Até 2 domínios grátis</li>
                </ul>
            </div>
        </div>

        <div class="flex-1 flex items-center justify-center">
            {{-- <img src="{{ asset('images/home.png') }}" alt="Hospedagem" class="   w-1/2"> --}}
            <img src="{{ asset('images/deadpool-hearth.png') }}" alt="Hospedagem" class="   w-1/2">

        </div>
    </div>


    <div class="mt-40 p-10  w-full   ">
    <div class=" flex items-center ">
        <img src="{{ asset('images/home-2.jpg') }}" alt="Hospedagem" class="absolute    z-10 ">
    
        <div class="relative z-10 p-4">
            <label for="dominio" class="block text-sm font-medium text-deadpool-white">Domínio:</label>
            <input id="dominio" type="search" placeholder="Digite seu domínio" class="mt-2 p-2 border rounded-md w-full h-full border-x-deadpool-yellow ">
        </div>
    </div>
</div>
    
</body>


</html>