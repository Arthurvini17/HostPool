<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        href="https://fonts.googleapis.com/css2?family=Pridi:wght@200;300;400;500;600;700&family=Squada+One&display=swap"
        rel="stylesheet">

    <title>@yield('title', 'HostPool')</title>
    @vite('resources/css/app.css')
</head>
<body>
    <header class="p-4 text-white bg-deadpool-black font-pridi">
        <div class="flex gap-24">
            <div>
                <h1 class="text-2xl font-bold">HostPool</h1>
            </div>
            <nav class="flex items-center space-x-4">
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
                    <li><a href="{{ route('plans.index') }}" class="hover:text-gray-400">Meus Planos</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="">
        @yield('content')
    </main>
</body>
</html>
