<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<body class=" bg-slate-50">
    <header class="p-4 text-white bg-deadpool-black">
        <div class="flex gap-24 ">
            <div>
                <h1 class="text-2xl font-bold">HostPool</h1>
            </div>
            <nav class="flex items-center space-x-4 ">
                <ul class="flex space-x-4">
                    <li><a href="#" class="text-deadpool-black-400">Dominio</a></li>
                    <li><a href="#" class="hover:text-gray-400">Hospedagem</a></li>
                    <li><a href="#" class="hover:text-gray-400">Loja HostPool</a></li>
                    <li><a href="#" class="hover:text-gray-400">Recursos</a></li>

                </ul>
            </nav>

            <nav class="flex items-center justify-end ml-auto space-x-4">
                <ul class="flex space-x-4">
                    <li><a href="#" class="hover:text-gray-400">Login</a></li>
                    <li><a href="#" class="hover:text-gray-400">Sobre</a></li>
                    <li><a href="#" class="hover:text-gray-400">Contato</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="flex items-center m-40">
        <div class="flex-1 ">
            <div>
                <h3 class="">Hospedagem de site</h3>
            </div>
            <div>
                <h1 class="text-5xl text-deadpool-black">Hospedagem de site <br> consolidada <span> com tudo </span>
                    <br> para seu sucesso
                </h1>
            </div>
            <p class="mt-4 text-xl text-deadpool-gray">Há 16 anos garantindo todas as ferramentas para você prosperar
            </p>
            <div class="m-4">
                <ul class="flex gap-6 list-disc ">
                    <li class="text-deadpool-red">Migração de site grátis</li>
                    <li class="text-deadpool-red">Suporte 24h por dia</li>
                    <li class="text-deadpool-red">Até 2 domínios grátis</li>
                </ul>
            </div>

            <div class="grid grid-cols-2 ">
                <button
                    class="px-10 py-5 font-medium border shadow-lg outline-none bg-deadpool-yellow hover:border-deadpool-red hover:animate-pulse">Comece
                    com até 55% OFF</button>

                <div class="text-center ">
                    <p class="flex items-center justify-center gap-4 font-semibold">A partir de <span
                            class="text-4xl font-bold text-deadpool-red">R$10,99/mês*</span></p>
                </div>
                <div class="mt-2">
                    <p>Até 30 dias para reembolso</p>
                </div>
                
            </div>
        </div>

        <div class="flex items-center flex-1 gap-10">
            {{-- <img src="{{ asset('images/home.png') }}" alt="Hospedagem" class="w-1/2 "> --}}
            <div class="flex flex-col items-center justify-center p-4 py-4 shadow-2xl rounded-xl ">
                <div class="p-5 rounded-md shadow-md">
                    <div class="text-center">
                        <p class="font-black ">Aproveite</p>
                    </div>
                    <div class="flex items-center justify-center gap-5">
                        <div class="flex flex-col items-start justify-start p-1 bg-slate-200 rounded-xl drop-shadow-xl">
                            <p class="font-extrabold text-deadpool-black">OFF</p>
                            <p class="font-extrabold text-deadpool-yellow">OFF</p>
                            <p class="font-extrabold text-deadpool-red">OFF</p>
                        </div>

                        <div class="flex items-center ">
                            <h1 class="font-serif text-3xl font-black">55% OFF</h1>
                        </div>
                    </div>
                </div>

                <div>
                    <img src="{{ asset('images/deadpool-hearth.png') }}" alt="Hospedagem" class="w-1/2 bg-cover">
                </div>
            </div>
        </div>
    </div>


    <div class="p-4 m-40 bg-white drop-shadow-xl rounded-3xl">
        <div class="flex items-center ">
            <img src="{{ asset('images/pngwing.com.png') }}" alt="Hospedagem" class="p-4 -z-1">

            <div class="font-bold tracking-normal ">
                <h3>Encontre seu dominio </h3>
            </div>
            <div class="flex items-center w-full gap-2 rounded-md">
                <input id="dominio" type="search" placeholder="Digite seu domínio"
                    class="w-full h-10 p-5 border rounded-md outline-none drop-shadow-xl border-deadpool-red">

                <img src="{{ asset('images/icon-search.png') }}" alt="" class="w-8 h-8 ml-2 ">
                <ul class="flex items-center gap-3">
                    <li class="px-1 py-1 border rounded-xl border-deadpool-red">.com</li>
                    <li class="px-1 py-1 border rounded-xl border-deadpool-red">.online</li>
                    <li class="px-1 py-1 border rounded-xl border-deadpool-red">.store</li>
                </ul>
            </div>
        </div>
    </div>


    <div class="flex gap-2 p-10 m-40 overflow-x-auto snap-x snap-mandatory">
        <div class="flex-shrink-0 h-40 px-2 py-2 text-center border rounded-lg shadow-md px-2bg-white snap-center w-80 border-deadpool-red">
            <img src="" alt="">
            <div class="text-center">
                <h2>Hospedagem de site</h2>
            </div>
            <div>
                <p>Completo e acessível, com várias ferramentas para criar seu site</p>
            </div>
            <div>
                <p>Comece a partir de R$ 10,99/mês</p>
            </div>
            <div>
                <button>Ver planos</button>
            </div>
        </div>

        <div class="flex-shrink-0 h-40 px-2 py-2 text-center border rounded-lg shadow-md px-2bg-white snap-center w-80 border-deadpool-red">


            <img src="" alt="">
            <div>
                <h2>Loja HostPool</h2>
            </div>
            <div>
                <p>Todos os recursos para facilitar a criação de uma loja virtual criativa</p>
            </div>
            <div>
                <p>Confira os valores <strong>promocionais</strong></p>
            </div>
            <div>
                <button>Ver planos</button>
            </div>
        </div>

        <div class="flex-shrink-0 h-40 px-2 py-2 text-center border rounded-lg shadow-md px-2bg-white snap-center w-80 border-deadpool-red">


            <img src="" alt="">
            <div>
                <h2>E-mail profissional Titan</h2>
            </div>
            <div>
                <p>Impulsione sua marca com um e-mail personalizado</p>
            </div>
            <div>
                <p>Comece a partir de <strong>R$ 8,99/mês</strong></p>
            </div>
            <div>
                <button>Ver planos</button>
            </div>
        </div>

        <div class="flex-shrink-0 h-40 px-2 py-2 text-center border rounded-lg shadow-md px-2bg-white snap-center w-80 border-deadpool-red">


            <img src="" alt="">
            <div>
                <h2>Servidor VPS</h2>
            </div>
            <div>
                <p>Acesso Root em um ambiente de hospedagem totalmente escalável</p>
            </div>
            <div>
                <p>Comece a partir de R$ 82,39/mês</p>
            </div>
            <div>
                <button>Ver Planos</button>
            </div>
        </div>

        <div class="flex-shrink-0 h-40 px-2 py-2 text-center border rounded-lg shadow-md px-2bg-white snap-center w-80 border-deadpool-red">


            <img src="" alt="">
            <div>
                <h2>Servidor VPS</h2>
            </div>
            <div>
                <p>Acesso Root em um ambiente de hospedagem totalmente escalável</p>
            </div>
            <div>
                <p>Comece a partir de R$ 82,39/mês</p>
            </div>
            <div>
                <button>Ver Planos</button>
            </div>
        </div>

               <div class="flex-shrink-0 h-40 px-2 py-2 text-center border rounded-lg shadow-md px-2bg-white snap-center w-80 border-deadpool-red">

            <div>
                <h2>Servidor VPS</h2>
            </div>
            <div>
                <p>Acesso Root em um ambiente de hospedagem totalmente escalável</p>
            </div>
            <div>
                <p>Comece a partir de R$ 82,39/mês</p>
            </div>
            <div>
                <button>Ver Planos</button>
            </div>
        </div>


    </div>


    <p>teste</p>

    <p>teste</p>
    <p>teste</p>

    <p>teste</p>
    <p>teste</p>
    <p>teste</p>
    <p>teste</p>
    <p>teste</p>
    <p>teste</p>




</body>


</html>