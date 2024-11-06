@extends('layouts.master')

@section('title', 'Ver Planos - HostPool')

@section('content')

<div>
    <div class="flex items-center justify-center text-center">
        <div>
            <p class="text-3xl text-white ">Olá <span class="font-bold">{{auth()->user()->name}} </span>, esses são seus
                planos</p>
        </div>
    </div>

    <div class="flex items-center justify-center gap-10 mt-4 ">
        @forelse ($plans as $plan)
        <div
            class="w-full px-2 py-2 duration-150 rounded-md shadow cursor-pointer text-start bg-zinc-50 shadow-indigo-500/50 max-w-56 hover:translate-y-6 ">
            <div class="text-center">
                <div class="flex items-center justify-center gap-2">
                    <h1 class="font-bold text-black">{{$plan->name}}</h1>
                    @if($plan->name == 'Plano D')
                    <img class="w-8" src="{{asset('images/icons8-dead-pool-96.png')}}" alt="">

                    @elseif($plan->name == 'Plano W')
                    <img class="w-8" src="{{asset('images/icons8-carcajou-96.png')}}" alt="">

                    @else
                    <img class="w-8" src="{{asset('images/icons8-x-men-50.png')}}" alt="">
                    @endif
                </div>
            </div>

            <div class="flex flex-col gap-4 mt-2 text-center">
                <div class="">
                    <p class="font-semibold text-black">{{$plan->description}}</p>
                </div>

                <div class="">
                    <p> <span class="font-bold text-black">R$ {{$plan->price}}</span> <span
                            class="font-semibold text-black">/mês</span></p>
                </div>

                <div class="">
                    <form action="{{route('delete.plan', $plan->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="text-white btn bt">Deletar</button>
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