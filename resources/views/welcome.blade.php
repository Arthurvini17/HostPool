@extends('layouts.master')

@section('title', 'Home - HostPool')

@section('content')

<body class=" bg-slate-50">


    <div class="flex items-center m-40 font-squada sm-min-h-screen ">
        <div class=" sm:w-full md:flex-1">
            <div>
                <h3 class=" sm-text-md">Hospedagem de site</h3>
                {{-- @svg('camera', 'w-6 h-6') --}}
            </div>
            <div>
                <h1 class="sm-text-md md:text-5xl sm: text-deadpool-black">Hospedagem de site <br> consolidada <span>
                        com tudo </span>
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
                    class="px-10 py-5 font-semibold text-black border rounded-tr-lg rounded-bl-lg shadow-lg outline-none bg-deadpool-yellow hover:border-deadpool-red hover:animate-pulse">Comece
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

        <div class="flex items-center flex-1 gap-10 ">
            {{-- <img src="{{ asset('images/home.png') }}" alt="Hospedagem" class="w-1/2 "> --}}
            <div class="flex flex-col items-center justify-center p-4 py-4 shadow-2xl rounded-xl ">
                <div class="p-5 ">
                    <div class="text-2xl text-center">
                        <p class="font-black text-black ">Aproveite</p>
                    </div>
                    <div class="flex items-center text-black">
                        <h1 class="font-serif text-3xl font-black font-squada"> <span class="text-red-500">55%
                                OFF</span> em todos nossos planos </h1>
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

    <div class="flex items-center justify-center p-10 overflow-x-scroll font-squada rounded-box">

        <div class="flex items-center justify-center gap-10">

            <div
                class="items-start p-4 duration-300 bg-white border rounded-lg shadow cursor-pointer h-50 w-80 hover:border-deadpool-red hover:ease-in hover:shadow-lg">

                <img src="" alt="">
                <div class="m-2">
                    <div class="flex flex-row">
                        <img class="w-8" src="{{asset('images/icons8-dead-pool-96.png')}}" alt="">
                        <h2 class="text-2xl font-medium text-deadpool-black">Plano P</h2>
                    </div>
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
                    <div class="flex">
                        <img class="w-8" src="{{asset('images/icons8-carcajou-96.png')}}" alt="">
                        <h2 class="text-2xl text-deadpool-black ">Plano W</h2>
                    </div>

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
                    <div class="flex">
                        <img class="w-8" src="{{asset('images/icons8-x-men-50.png')}}" alt="">
                        <h2 class="text-2xl text-deadpool-black">Plano X</h2>
                    </div>
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
            <h1 class="text-4xl font-medium">Veja o que os clientes estão dizendo sobre nossos serviços de hospedagem
            </h1>
        </div>
        <div class="flex items-center justify-center p-2 ">
            <div class="w-1/2 gap-10 carousel rounded-box">
                <div class="flex flex-col flex-shrink-0 w-1/2 p-4 bg-white border shadow-lg carousel-item">
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

                <div class="flex flex-col items-start flex-shrink-0 w-1/2 p-4 bg-white border shadow-lg carousel-item">
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

                <div class="flex flex-col items-start flex-shrink-0 w-1/2 p-4 bg-white border shadow-lg carousel-item">
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






    <div class="flex flex-col items-center gap-4 mb-40 place-items-center">
        <div class="flex items-center justify-center text-center">
            <div class="mb-20">
                <h1 class="text-3xl font-semibold text-deadpool-black">
                    Junte-se à HostPool e aos 7 milhões de clientes de nosso grupo líder em tecnologia no mundo
                </h1>
            </div>
        </div>

        <div x-data="{ open: false }"
            class="flex flex-col items-center justify-center w-1/2 p-5 rounded-md shadow cursor-pointer hover:bg-slate-100">
            <div class="flex flex-col items-start w-full">
                <div class="flex justify-between w-full">
                    <button @click="open = !open"
                        class="items-end font-bold text-slate-950 place-items-end place-self-end">
                        É fácil hospedar sites na HostPool?
                    </button>
                    <div x-show="!open" x-transition class="items-end ">
                        <img src="{{asset('images/icons8-flecha-50.png')}}" class="w-5 rotate-90 " alt="">
                    </div>

                    <div x-show="open">
                        <img src="{{asset('images/icons8-seta-longa-acima-50.png')}}" class="w-5 font-bold" alt="">
                    </div>
                </div>
            </div>

            <div x-show="open" x-transition class="text-left">
                <p class="font-medium text-black">
                    Sim, as soluções de hospedagem de site da HostGator são intuitivas e fáceis de usar...
                </p>
            </div>
        </div>

        <div x-data="{ open: false }"
            class="flex flex-col items-center justify-center w-1/2 p-5 rounded-md shadow cursor-pointer hover:bg-slate-100">
            <div class="flex flex-col items-start w-full">
                <div class="flex justify-between w-full">
                    <button @click="open = !open" class="font-bold text-left text-slate-950">
                        Por que eu preciso de uma hospedagem de sites?
                    </button>
                    <div class="">
                        <div x-show="!open" x-transition class="items-end ">
                            <img src="{{asset('images/icons8-flecha-50.png')}}" class="w-5 rotate-90 " alt="">
                        </div>
                    </div>

                    <div x-show="open">
                        <img src="{{asset('images/icons8-seta-longa-acima-50.png')}}" class="w-5" alt="">
                    </div>
                </div>
            </div>


            <div x-show="open" x-transition class="text-center">
                <p class="font-medium text-black">
                    A internet é o lugar em que a maioria das pessoas busca por produtos e serviços...
                </p>
            </div>
        </div>

        <div x-data="{ open: false }"
            class="flex flex-col items-center justify-center w-1/2 p-5 rounded-md shadow cursor-pointer hover:bg-slate-100">
            <div class="flex flex-col items-start w-full">
                <div class="flex justify-between w-full">
                    <button @click="open = !open" class="font-bold text-slate-950">
                        Por que Comprar domínio com a HostPool?
                    </button>

                    <div>
                        <div x-show="!open" x-transition class="items-end ">
                            <img src="{{asset('images/icons8-flecha-50.png')}}" class="w-5 rotate-90 " alt="">
                        </div>
                    </div>

                    <div x-show="open">
                        <img src="{{asset('images/icons8-seta-longa-acima-50.png')}}" class="w-5 font-bold" alt="">
                    </div>
                </div>

              
            </div>

            <div x-show="open" x-transition class="text-center">
                <p class="font-medium text-black">
                    A HostPool atua como empresa autorizada pelas entidades de registro nacional...
                </p>
            </div>
        </div>
    </div>


    <div>
        <div class="flex items-center p-10 text-start bg-slate-900 justify-evenly">
            <div class="text-start">
                <h1 class="text-4xl font-bold text-white ">Hospedagem de <br> site com até 71% <br>OFF</h1>
            </div>
            <div class="">
                <p class="text-xl font-semibold text-white">A partir de </p>
                <p class="text-4xl font-bold text-blue-600">R$ 9,59/mês*</p>
                <p class="text-2xl font-bold text-white">+ Dominio Grátis</p>
            </div>

            <button class="p-2 text-2xl font-bold rounded-sm bg-deadpool-yellow text-slate-800">Começar agora</button>
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
        <input type="checkbox" class="toggle" />
    </div>



</body>

@endsection