<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link
        href="https://fonts.googleapis.com/css2?family=Pridi:wght@200;300;400;500;600;700&family=Squada+One&display=swap"
        rel="stylesheet">

    @vite('resources/css/app.css')
    <title>Document</title>

</head>

<body class="bg-slate-50">
    <header class="p-4 text-white bg-deadpool-black font-pridi">
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

    <div class="flex items-center m-40 font-squada bg-slate-50">
        <div class="flex-1 ">
            <div>
                <h3 class="">Hospedagem de site</h3>
                {{-- @svg('camera', 'w-6 h-6') --}}
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

                <div class="mt-2">
                    <p> teste</p>
                </div>
            </div>
        </div>

        <div class="flex items-center flex-1 gap-10 ">
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
                            <h1 class="font-serif text-3xl font-black font-squada">55% OFF</h1>
                        </div>
                    </div>
                </div>

                <div>
                    <img src="{{ asset('images/deadpool-hearth.png') }}" alt="Hospedagem" class="w-1/2 bg-cover">
                </div>
            </div>
        </div>
    </div>


    <div class="p-4 m-40 bg-white drop-shadow-xl rounded-3xl font-squada ">
        <div class="flex items-center ">
            <img src="{{ asset('images/pngwing.com.png') }}" alt="Hospedagem" class="p-4 -z-1">

            <div class="tracking-normal ">
                <h3>Encontre seu dominio </h3>
            </div>
            <div class="flex items-center w-full gap-2 rounded-md">
                <input id="dominio" type="search" placeholder="Digite seu domínio"
                    class="w-full h-10 p-5 font-medium bg-white border rounded-md outline-none text-deadpool-black drop-shadow-xl border-deadpool-red">

                <img src="{{ asset('images/icon-search.png') }}" alt="" class="w-8 h-8 ml-2 ">
                <ul class="flex items-center gap-3">
                    <li class="px-1 py-1 border rounded-xl border-deadpool-red">.com</li>
                    <li class="px-1 py-1 border rounded-xl border-deadpool-red">.online</li>
                    <li class="px-1 py-1 border rounded-xl border-deadpool-red">.store</li>
                </ul>

                <div>
                    <h3 class="text-gray-500 font-extralight "><span
                            class="text-xl font-medium text-black font-squada">66% OFF</span> no pacote de proteção da
                        marca</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="flex items-center gap-2 p-10 m-40 overflow-x-scroll font-squada rounded-box">
        
        <div class="flex items-center justify-center">
           
            <div
                class="items-start flex-shrink-0 p-4 overflow-x-auto duration-300 bg-white border rounded-lg shadow cursor-pointer h-50 w-80 hover:border-deadpool-red hover:ease-in hover:shadow-lg">

                <img src="" alt="">
                <div class="m-2">
                    <h2 class="text-2xl font-medium text-deadpool-black">Hospedagem de site</h2>
                </div>
                <div class="m-2">
                    <p class="text-gray-500 ">Completo e acessível, com várias ferramentas para criar seu site</p>
                </div>
                <div class="m-2">
                    <p>Comece a partir <br> de R$ 10,99/mês</p>
                </div>
                <div class="m-2">
                    <button class="text-xl font-medium hover:underline text-deadpool-red">Ver planos</button>
                </div>

            </div>

            <div
                class="flex-shrink-0 p-4 duration-300 bg-white border rounded-lg shadow cursor-pointer carousel-itemitems-start h-50 w-80 hover:border-deadpool-red hover:ease-in hover:shadow-lg">

                <img src="" alt="">
                <div class="m-2">
                    <h2 class="text-2xl text-deadpool-black ">Loja HostPool</h2>
                </div>
                <div class="m-2">
                    <p class="text-gray-500 ">Todos os recursos para facilitar a criação de uma loja virtual criativa
                    </p>
                </div>
                <div class="m-2">
                    <p>Confira os valores <br> <span>Promocionais</span></p>
                </div>
                <div class="m-2 ">
                    <button class="text-xl font-medium hover:underline text-deadpool-red">Ver planos</button>
                </div>
            </div>

            <div
                class="flex-shrink-0 p-4 duration-300 bg-white border rounded-lg shadow cursor-pointer carousel-itemitems-start h-50 w-80 hover:border-deadpool-red hover:ease-in hover:shadow-lg">

                <img src="" alt="">
                <div class="m-2">
                    <h2 class="text-2xl text-deadpool-black">E-mail profissional Titan</h2>
                </div>
                <div class="m-2">

                    <p class="text-gray-500 ">Impulsione sua marca com um e-mail personalizado</p>
                </div>
                <div class="m-2">

                    <p>Comece a partir de <br> <span>R$ 8,99/mês</span></p>
                </div>
                <div class="m-2">

                    <button class="text-xl font-medium hover:underline text-deadpool-red ">Ver planos</button>
                </div>
            </div>

            <div
                class="flex-shrink-0 p-4 duration-300 bg-white border rounded-lg shadow cursor-pointer carousel-itemitems-start h-50 w-80 hover:border-deadpool-red hover:ease-in hover:shadow-lg">

                <img src="" alt="">
                <div class="m-2">

                    <h2 class="text-2xl font-medium text-deadpool-black">Servidor VPS</h2>
                </div>
                <div>
                    <p class="text-gray-500">Acesso Root em um ambiente de hospedagem totalmente escalável</p>
                </div>
                <div class="m-2">

                    <p>Comece a partir <br> de R$ 82,39/mês</p>
                </div>
                <div class="m-2">

                    <button class="text-xl font-medium hover:underline text-deadpool-red">Ver Planos</button>
                </div>
            </div>

            <div
                class="flex-shrink-0 p-4 duration-300 bg-white border rounded-lg shadow cursor-pointer carousel-itemitems-start h-50 w-80 hover:border-deadpool-red hover:ease-in hover:shadow-lg">

                <img src="" alt="">
                <div class="m-2">
                    <h2 class="text-2xl font-medium text-deadpool-black">Servidor VPS</h2>
                </div>
                <div class="m-2">
                    <p class="text-gray-500 ">Acesso Root em um ambiente de hospedagem totalmente escalável</p>
                </div>
                <div class="m-2">

                    <p>Comece a partir <br> de R$ 82,39/mês</p>
                </div>
                <div class="m-2">

                    <button class="text-xl font-medium hover:underline text-deadpool-red">Ver Planos</button>
                </div>
            </div>
            <div
                class="flex-shrink-0 p-4 duration-300 bg-white border rounded-lg shadow cursor-pointer carousel-itemitems-start h-50 w-80 hover:border-deadpool-red hover:ease-in hover:shadow-lg">

                <div class="m-2">

                    <h2 class="text-2xl font-medium text-deadpool-black">Servidor VPS</h2>
                </div>
                <div class="m-2">
                    <p class="text-gray-500 ">Acesso Root em um ambiente de hospedagem totalmente escalável</p>
                </div>
                <div class="m-2">

                    <p>Comece a partir <br> de R$ 82,39/mês</p>
                </div>
                <div class="m-2">

                    <button class="text-xl font-medium hover:underline text-deadpool-red">Ver Planos</button>
                </div>

            </div>

        </div>
    </div>



    <div class="p-4 m-40 text-6xl text-center font-squada ">
        <div>
            <h1>Eleve o nível do seu projeto online com as <br> melhores tecnologias </h1>
        </div>

        <div class="flex items-center justify-between gap-4 p-4 ">
            <div>
                <img src="{{ asset('images/logo-wordpress.svg') }}" alt="Hospedagem">
            </div>

            <div>
                <img src="{{ asset('images/logo-cpanel.svg') }}" alt="Hospedagem">
            </div>

            <div>
                <img src="{{ asset('images/logo-cisco.svg') }}" alt="Hospedagem">
            </div>

            <div>
                <img src="{{ asset('images/logo-intel.svg') }}" alt="Hospedagem" class="p-4 -z-1">

            </div>

            <div>
                <img src="{{ asset('images/logo-comodo.svg') }}" alt="Hospedagem">
            </div>

            <div>
                <img src="{{ asset('images/logo-letsencrypt.svg') }}" alt="Hospedagem">
            </div>

            <div>
                <img src="{{ asset('images/logo-linux.svg') }}" alt="Hospedagem">
            </div>

            <div>
                <img src="{{ asset('images/logo-windows.svg') }}" alt="Hospedagem">
            </div>
        </div>
    </div>


    <div class="flex flex-col items-center p-10 bg-slate-50">
        <div class="mb-4">
            <h1 class="text-4xl ">Veja o que os clientes estão dizendo sobre nossos serviços de hospedagem</h1>
        </div>
        <div class="flex items-center justify-center p-2 ">
            <div class="w-1/2 border carousel rounded-box">
                <div class="flex flex-col flex-shrink-0 w-1/2 p-4 bg-white shadow-lg carousel-item">
                    <div>
                        <div class="mb-4">
                            <p>Mais completa e segura. É rápido, dinâmico e intuitivo. Recomendo pra quem precisa de um
                                site
                                estável.</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-4">
                        <img src="{{asset('images/reinaldo-yoshino.png')}}" alt="Cliente" class="w-15 h-15">
                        <div class="flex self-end">
                            <p>reinaldo-yoshino</p>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col items-start flex-shrink-0 w-1/2 p-4 bg-white shadow-lg carousel-item">
                    <div class="mb-4">
                        <p>Mais completa e segura. É rápido, dinâmico e intuitivo. Recomendo pra quem precisa de um site
                            estável.</p>
                    </div>
                    <div class="flex items-center gap-4">
                        <img src="{{asset('images/vanessa-rocha.png')}}" alt="Cliente" class="w-15 h-15">
                        <div class="flex self-end">
                            <p>reinaldo-yoshino</p>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col items-start flex-shrink-0 w-1/2 p-4 bg-white shadow-lg carousel-item">
                    <div class="mb-4">
                        <p>Mais completa e segura. É rápido, dinâmico e intuitivo. Recomendo pra quem precisa de um site
                            estável.</p>
                    </div>
                    <div class="flex items-center gap-4">
                        <img src="{{asset('images/ronie-emerson.png')}}" alt="Cliente" class="w-15 h-15">
                        <div class="flex self-end">
                            <p>reinaldo-yoshino</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full p-10 bg-white font-galano ">
        <div class="flex items-start justify-center gap-20">
            <div>
                <img src="{{asset('images/support-ra1000.png')}}" alt="">
            </div>

            <div class="flex flex-col ">
                <div class="">
                    <p class="text-2xl font-thin">24H POR DIA / 7 DIAS POR SEMANA</p>
                </div>

                <div>
                    <h1 class="mt-4 text-4xl font-bold text-deadpool-black ">Suporte humanizado <br>e sempre
                        presente</h1>
                </div>

                <div class="w-30">
                    <p class="mt-4 text-deadpool-black">Você sabia que mais de 2,5 mil sites são criados todos os
                        dias? <br> Conte com a HostPool para se
                        destacar no meio de tudo isso. <br> Junte-se a milhares de clientes e tenha uma experiência
                        completa
                        e apoio no que você precisar.</p>
                </div>

                <div class="mt-2 font-galano text-slate-900">
                    <div class="flex items-start gap-2 py-2">
                        <img class="w-5" src="{{asset('images/correto.png')}}" alt="">
                        <p>Infraestrutura, serviços e muita informação</p>
                    </div>

                    <div class="flex items-start gap-2 py-2 ">
                        <img class="w-5" src="{{asset('images/correto.png')}}" alt="">

                        <p>Seu site preparado para crescer, engajar e converter mais clientes</p>
                    </div>

                    <div class="flex items-start gap-2 py-2 ">
                        <img class="w-5" src="{{asset('images/correto.png')}}" alt="">

                        <p>Aquele suporte humanizado e sempre presente</p>
                    </div>


                    <div class="flex items-start gap-2 py-2">
                        <img class="w-5" src="{{asset('images/correto.png')}}" alt="">

                        <p>E muito mais...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>


</html>