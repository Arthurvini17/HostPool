<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PlanController extends Controller
{
    public function buyPlanIndex(){
        $plans = Plan::all(); 
        return view('buyPlan', compact('plans')); 
    }

    public function showUserPlans()
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }
    
        $user = Auth::user();
        $plans = $user->plans;
    
        return view('showuserplan', ['plans' => $plans], ['users' => $user]); 
    }


    public function buy(Request $request, $planId)
    {
        $user = auth()->user(); // Obtém o usuário logado
        $plan = Plan::findOrFail($planId); // Obtém o plano pelo ID

        // Verifica se o usuário já possui o plano
        if ($user->plans->contains($plan)) {
            return redirect()->back()->with('error', 'Você já possui este plano.');
        }

        // Adiciona o plano ao usuário
        $user->plans()->attach($plan);

        return redirect()->back()->with('success', 'Plano comprado com sucesso!');
    }
}



