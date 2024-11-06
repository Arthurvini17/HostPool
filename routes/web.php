<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PlanController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [AuthController::class, 'home_index'])->name('home.index');

Route::get('/register', [AuthController::class, 'register_index'])->name('register.index');
Route::post('/register', [AuthController::class, 'register_create'])->name('register.create');

Route::get('/login', [AuthController::class, 'login_index'])->name('login.index');
Route::post('/login', [AuthController::class, 'login_auth'])->name('login.auth');

Route::get('/plans', [PlanController::class, 'showUserPlans'])->name('plans.index')->middleware('auth');

//arruma essa rota
Route::get('/buyplan', [PlanController::class, 'buyPlanIndex'])->name('buy.plan.index')->middleware('auth');

Route::post('/plans/buy/{plan}', [PlanController::class, 'buy'])->name('plan.buy');
Route::delete('/plans/{plan}', [PlanController::class, 'delete'])->name('delete.plan');


Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
