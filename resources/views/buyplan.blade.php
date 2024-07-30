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
    <div class="container p-4 mx-auto">
        <h2 class="mb-4 text-xl font-bold">Planos Disponíveis</h2>
        <div class="grid grid-cols-1 gap-4 md:grid-cols-3">
            @foreach($plans as $plan)
                <div class="p-4 border rounded-lg">
                    <h3 class="text-lg font-bold">{{ $plan->name }}</h3>
                    <p>{{ $plan->description }}</p>
                    <p>Preço: {{ $plan->price }}</p>
                    <form action="{{ route('plan.buy', $plan->id) }}" method="POST">
                        @csrf
                        <button type="submit" class="text-blue-500 hover:underline">Comprar</button>
                    </form>
                </div>
            @endforeach
        </div>
    </div>
</section>

</html>
@endsection