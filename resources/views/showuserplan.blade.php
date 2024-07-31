@extends('layouts.master')

@section('title', 'Comprar Planos - HostPool')

@section('content')

<div>
<p>olá {{auth()->user()->name}}</p>
<h2 class="mb-4 text-xl font-bold">Esses são seus planos</h2>
<div class="flex items-center justify-center gap-10 md:grid-cols-3">

    @forelse ($plans as $plan)
    <div class="px-2 py-2 rounded-md text-start bg-zinc-50 max-w-56">
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
                <button class="px-2 py-2 rounded-lg bg-deadpool-red">Comprar agora</button>
            </div>
        </div>
    </div>
        
    @empty
        <p>Sem planos para comprar</p>
    @endforelse
    
</div>
</div>

@endsection