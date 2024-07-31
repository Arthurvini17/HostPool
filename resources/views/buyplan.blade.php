@extends('layouts.master')

@section('title', 'Comprar Planos - HostPool')

@section('content')
<html data-theme="light">
<section class="bg-zinc-900">
    <div class="flex items-start justify-center text-white font-pridi">
        <div class="flex flex-col gap-4">
            <div class="flex items-start justify-start">
                <h1 class="text-xl ">Hospedagem de Site</h1>
            </div>
            <div>
                <p>Hospedagem de site especialista que cresce com você</p>
            </div>
            <div>
                <p>Todas as facilidades para transformar sua ideia em um projeto online de sucesso</p>
            </div>
            <div class="grid grid-cols-2">
                <div class="">
                    <button class="w-1/2 px-2 py-2 rounded-md bg-deadpool-yellow">Ver planos</button>
                </div>
                <div>
                    <p>a partir de <span class="text-xl text-deadpool-red">R$ 10,99/mês*</span> Planos com até 2
                        domínios grátis</p>
                </div>

                <div class="grid col-span-1 mt-2">
                    <p class="w-1/2 border-2 border-dotted">Até 30 dias para reembolso</p>
                </div>
            </div>
        </div>
        <div class="w-20">
            <img src="{{ asset('images/deadpool-hearth.png') }}" alt="">
        </div>
    </div>
</section>


<section>
    <div class="container mx-auto font-pridi">
        <h2 class="mb-4 text-xl font-bold">Planos Disponíveis</h2>
        <div class="flex items-center justify-center gap-10 md:grid-cols-3">

            @forelse ($plans as $plan)
            <div class="px-2 py-2 text-white rounded-md bg-zinc-900 text-start max-w-56">
                <div class="">
                    <h1>{{$plan->name}}</h1>
                </div>

                <div class="flex flex-col gap-4 mt-2 text-center">
                    <div class="">
                        <p>{{$plan->description}}</p>
                    </div>

                    <div class="">
                        <p>R$ <span>{{$plan->price}}</span> <span>/mês</span></p>
                    </div>

                    <div class="">
                        <form action="{{route('plan.buy', $plan->id)}}" method="POST">
                            @csrf
                        <button class="px-2 py-2 rounded-lg bg-deadpool-red">Comprar agora</button>
                    </form>
                    </div>
                </div>
            </div>
                
            @empty
                <p>Sem planos para comprar</p>
            @endforelse
            {{-- @foreach($plans as $plan)
                <div class="p-4 border rounded-lg">
                    <h3 class="text-lg font-bold">{{ $plan->name }}</h3>
                    <p>{{ $plan->description }}</p>
                    <p>Preço: {{ $plan->price }}</p>
                    <form action="{{ route('plan.buy', $plan->id) }}" method="POST">
                        @csrf
                        <button type="submit" class="text-blue-500 hover:underline">Comprar</button>
                    </form>
                </div>
            @endforeach --}}
        </div>
    </div>
</section>

</html>
@endsection