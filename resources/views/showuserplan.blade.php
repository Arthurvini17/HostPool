@extends('layouts.master')

@section('title', 'Ver Planos - HostPool')

@section('content')

<div>
    <div class="flex flex-col items-center justify-center">
        <div>
            <p class="text-3xl ">Olá {{auth()->user()->name}}</p>
        </div>
        <h2 class="mb-4 text-xl font-bold text-white">Esses são seus planos</h2>
    </div>

    <div class="flex items-center justify-center gap-10 ">
        @forelse ($plans as $plan)
        <div class="w-full px-2 py-2 duration-150 rounded-md cursor-pointer text-start bg-zinc-50 max-w-56 hover:translate-y-6">
            <div class="text-center">
                <h1 class="font-bold text-black">{{$plan->name}}</h1>
            </div>

            <div class="flex flex-col gap-4 mt-2 text-center">
                <div class="">
                    <p class="font-semibold text-black">{{$plan->description}}</p>
                </div>

                <div class="">
                    <p> <span class="font-bold text-black">R$ {{$plan->price}}</span> <span class="font-semibold text-black">/mês</span></p>
                </div>

                <div class="">
                    <form action="{{route('delete.plan', $plan->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="px-4 py-2 font-semibold text-black duration-150 bg-red-500 rounded-lg hover:bg-red-400 ">Deletar</button>
                    </form>
                </div>
            </div>
        </div>

        @empty
        <p>Você não tem planos</p>
        @endforelse
    </div>
</div>

@endsection