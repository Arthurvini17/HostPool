<html data-theme="light" class="">
<div>

    <link
        href="https://fonts.googleapis.com/css2?family=Pridi:wght@200;300;400;500;600;700&family=Squada+One&display=swap"
        rel="stylesheet">

    @vite('resources/css/app.css')


    <div class="flex items-center justify-center min-h-screen font-pridi">

        <div class="">
            {{-- <div class="absolute -z-10 top-7">
                <img src="{{asset('images/deadpool-down.jpg')}}" alt="">
            </div> --}}
    
            <div class="mb-5 text-center">
                <h1 class="text-2xl font-bold">Faça seu login</h1>
            </div>
            <form action="{{route('login.auth')}}" method="POST" class="grid gap-5 p-10 bg-white rounded-lg shadow-md ">

                @csrf
                <div class="grid col-span-2 ">
                    <label for="name" class="block text-sm font-medium text-gray-700">Nome do usuário *</label>
                    <input class="w-full p-2 mt-1 border rounded-lg "  type="text" name="name" id="name">
                    @error('name')
                    <div class="mt-2 font-medium rounded-md bg-deadpool-red">{{ $message }}</div>
                    @enderror
                </div>
    
    
    
                <div class="">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email *</label>
                    <input class="w-full p-2 mt-1 border rounded-lg" type="email" name="email" id="email">
                    @error('email')
                    <div class="w-40 mt-2 font-medium text-center rounded-md bg-deadpool-red">{{ $message }}</div>
                    @enderror
                </div>
    
                <div class="">
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