<html data-theme="light" class="">

<link href="https://fonts.googleapis.com/css2?family=Pridi:wght@200;300;400;500;600;700&family=Squada+One&display=swap"
    rel="stylesheet">

@vite('resources/css/app.css')



<div class="flex items-center justify-center min-h-screen text-center font-pridi ">
    
    <div class="">
        <div class="col-span-2 ">
            <h1 class="text-xl">Faça seu login</h1>
            <p class="text-md">Para melhores promoções ative as notificações do email</p>
        </div>

        <div class="flex items-center justify-center">
            <form action="" method="POST" class="flex flex-col gap-2 p-4 rounded-md shadow-md">
                @csrf
                <div class="text-start">
                    <label for="name">Seu nome</label>
                    <input class="w-full px-1 py-1 border rounded-md " type="text" name="name">
                </div>

                <div class="text-start">
                    <label for="email">Seu Email</label>
                    <input class="w-full px-1 py-1 border rounded-md " type="email" name="email">
                </div>

                <div class="text-start">
                    <label for="password">Sua senha</label>
                    <input class="w-full px-1 py-1 border rounded-md " type="password" name="password">
                </div>

                <div class="items-start justify-start text-start">
                    <label for="name">Lembrar-me</label>
                    <input class="px-1 py-1 rounded-md text-start" type="checkbox" name="remember">
                </div>

                <div>
                    <button class="px-2 py-2 rounded-md w-96 bg-deadpool-red">Logar</button>
                </div>
            </form>
        </div>
    </div>
</div>

</html>