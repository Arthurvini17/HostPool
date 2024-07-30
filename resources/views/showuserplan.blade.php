<p>Nome do usuário logado: {{ Auth::user()->name }}</p>
@forelse ($plans as $plan)
    <p>Nome do plano: {{$plan->name}}</p>
@empty
    <p>Nenhum plano encontrado.</p>
@endforelse
