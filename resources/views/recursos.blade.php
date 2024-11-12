<html data-theme="light" class="">

@extends('layouts.master')

@section('title', 'Home - HostPool')

@section('content')


<div class="grid justify-between grid-cols-3 gap-20 p-2 mt-10">
    <div class="px-2 py-2 font-semibold duration-150 border-2 cursor-pointer hover:translate-y-6 bg-slate-100">
        <div class="flex truncaret-teal-50">
            <img class="w-10" src="{{asset('images/icons8-livre-50.png')}}" alt="">
            <h1>Blog</h1>
        </div>
        <div class="text-sm">
            <p>Conteudos para te ajudar a criar, divulgar e ter sucesso com seu site, blog ou loja virtual</p>
        </div>

        <a href=""></a>
    </div>

    <div class="px-2 py-2 font-semibold duration-150 border-2 cursor-pointer hover:translate-y-6 bg-slate-100">
        <div>
            <h1 class="">Guias especiais</h1>
        </div>
        <p>Tudo sobre hospedagem e criação de sites</p>
    </div>

    <div class="px-2 py-2 font-semibold duration-150 border-2 cursor-pointer hover:translate-y-6 bg-slate-100">
        <div>
            <h1>Programa de afiliados HostGator</h1>
        </div>
        <div>
            <p>Recomenda a HostGator e ganhe até R$ 175,00 por indicação</p>
        </div>
    </div>

    <div
        class="flex flex-col w-1/2 col-span-3 px-2 py-2 font-semibold duration-150 border-2 cursor-pointer hover:translate-y-6 bg-slate-100">
        <div class="">
            <h1>Hub de Ferramentas</h1>
        </div>

        <div class="">
            <p>Descubra uma variedade de ferramentas gratuitas essenciais para impulsionar seu negócio.</p>
        </div>

        <div class="flex items-start justify-start text-start">
            <a href="#">Ver ferramentas -></a>
        </div>
    </div>

    <input type="text">

</div>
@endsection

</html>