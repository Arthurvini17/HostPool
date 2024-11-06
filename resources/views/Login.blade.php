<html data-theme="light" class="">

<link href="https://fonts.googleapis.com/css2?family=Pridi:wght@200;300;400;500;600;700&family=Squada+One&display=swap"
    rel="stylesheet">

@vite('resources/css/app.css')

<div class="flex items-center justify-center min-h-screen mx-auto text-center font-pridi">
    <div class="w-full p-4 md:w-1/2 lg:w-1/3">
        <div class="mb-6">
            <h1 class="text-2xl md:text-3xl lg:text-4xl">Faça seu login</h1>
            <p class="text-md md:text-lg lg:text-xl">Para melhores promoções ative as notificações do email</p>
        </div>

        <div class="flex items-center justify-center">
            <form action="" method="POST" class="flex flex-col w-full gap-4 p-4 rounded-md shadow-md">
                @csrf
                <div class="text-start">
                    <label for="name">Seu nome</label>
                    <input class="w-full px-3 py-2 border rounded-md" type="text" name="name">
                </div>

                <div class="text-start">
                    <label for="email">Seu Email</label>
                    <input class="w-full px-3 py-2 border rounded-md" type="email" name="email">
                </div>

                <div class="text-start">
                    <label for="password">Sua senha</label>
                    <input class="w-full px-3 py-2 border rounded-md" type="password" name="password">
                </div>

                <div class="flex items-center text-start">
                    <input class="mr-2" type="checkbox" name="remember">
                    <label for="remember">Lembrar-me</label>
                </div>

                <div>
                    <button class="w-full px-4 py-2 text-white rounded-md bg-deadpool-red">Logar</button>
                </div>
            </form>
        </div>
    </div>
</div>

</html>
