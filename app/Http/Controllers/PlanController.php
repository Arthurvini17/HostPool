<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    public function buyPlanIndex(){
        $plans = Plan::all(); 
        return view('buyPlan', compact('plans')); 
    }


    public function buy(Request $request, $planId)
{
    // Recuperar o plano com base no ID
    $plan = Plan::find($planId);

    // Verificar se o plano foi encontrado
    if (!$plan) {
        return redirect()->route('plans.index')->with('error', 'Plano não encontrado!');
    }

    // Recuperar o usuário autenticado
    $user = auth()->user();

    // Associar o plano ao usuário
    $plan->user_id = $user->id;

    // Salvar as alterações no banco de dados
    $plan->save();

    // Redirecionar com sucesso
    return redirect()->route('plans.index')->with('success', 'Plano comprado com sucesso!');
}

    }

