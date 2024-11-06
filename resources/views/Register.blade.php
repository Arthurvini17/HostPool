<html data-theme="light" class="">
<div>

    <link
        href="https://fonts.googleapis.com/css2?family=Pridi:wght@200;300;400;500;600;700&family=Squada+One&display=swap"
        rel="stylesheet">

    @vite('resources/css/app.css')


    <div class="flex flex-col items-center justify-center min-h-screen p-5 font-pridi sm:min-h-screen ">

        <div class="max-w-lg ">
            <div class="mb-5 text-center ">
                <h1 class="text-2xl font-bold">Crie seu cadastro</h1>
                <p>Para ser cliente é necessário preencher corretamente o formulário abaixo com os respectivos dados cadastrais. Os campos com * são de preenchimento obrigatório e essenciais para criar sua conta.</p>
            </div>
    
            <form action="{{route('register.create')}}" method="POST" class="grid grid-cols-2 gap-5 p-5 bg-white rounded-lg shadow-md">
                @csrf
                <div class="">
                    <label for="name" class="block text-sm font-medium text-gray-700">Nome do usuário *</label>
                    <input class="w-full p-2 mt-1 border rounded-lg" type="text" name="name" id="name">
                    @error('name')
                    <div class="w-full mt-2 font-medium rounded-md bg-deadpool-red">{{ $message }}</div>
                    @enderror
                </div>
    
                <div class="grid col-span-1">
                    <label for="sobrenome" class="block text-sm font-medium text-gray-700">Sobrenome do usuário</label>
                    <input class="w-full p-2 mt-1 border rounded-lg" type="text" name="sobrenome" id="sobrenome">
                    @error('sobrenome')
                    <div class="w-full mt-2 font-medium text-center rounded-md bg-deadpool-red">{{ $message }}</div>
                    @enderror
                </div>
    
                <div class="col-span-2">
                    <label for="cpf" class="block text-sm font-medium text-gray-700">CPF *</label>
                    <input class="w-full p-2 mt-1 border rounded-lg" type="text" name="cpf" id="cpf">
                    @error('cpf')
                    <div class="w-40 mt-2 font-medium text-center rounded-md bg-deadpool-red">{{ $message }}</div>
                    @enderror
                </div>
    
                <div class="col-span-2">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email *</label>
                    <input class="w-full p-2 mt-1 border rounded-lg" type="email" name="email" id="email">
                    @error('email')
                    <div class="w-full mt-2 font-medium text-center rounded-md bg-deadpool-red">{{ $message }}</div>
                    @enderror
                </div>
    
                <div class="col-span-2">
                    <label for="password" class="block text-sm font-medium text-gray-700">Senha do usuário *</label>
                    <input class="w-full p-2 mt-1 border rounded-lg" type="password" name="password" id="password">
                    @error('password')
                    <div class="w-40 mt-2 font-medium text-center rounded-md bg-deadpool-red">{{ $message }}</div>
                    @enderror
                </div>
    
                <div class="col-span-2">
                    <button class="w-full py-2 text-white rounded-lg bg-deadpool-red">Registrar-se</button>
                </div>
            </form>

        </div>

        
    </div>
    

</html>




</body>