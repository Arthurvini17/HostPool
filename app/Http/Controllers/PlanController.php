<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Models\User;
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
        $plans = $user->plans()->orderBy('id', 'desc')->get();
    
        return view('showuserplan', ['plans' => $plans], ['users' => $user]);
    }


    public function buy(Request $request, $planId)
    {
        $user = auth()->user(); // Obtem o usurio logado
        $plan = Plan::findOrFail($planId); // Obtém o plano pelo ID

        // Verifica se o ususrio ja possui o plano
        if ($user->plans->contains($plan)) {
            return redirect()->back()->with('error', 'Você já possui este plano.');
        }

        // Add o plano ao usuario
        $user->plans()->attach($plan);

        return redirect()->back()->with('success', 'Plano comprado com sucesso!');
    }


    public function delete($planId){
        $user = auth()->user();
        $plan = Plan::findOrFail($planId);

        $user->plans()->detach($plan);

        return redirect()->route('plans.index');
    }
}



