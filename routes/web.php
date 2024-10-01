<?php

use App\Http\Controllers\PlanController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\SubdomainController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/pricing', [PricingController::class, 'index'])->name('pricing');
Route::post('/pricing/submit', [PricingController::class, 'submit'])->name('pricing.submit');
Route::post('/subdomain', [SubdomainController::class, 'store'])->name('subdomain');

Route::get('/free-plan', [PlanController::class, 'freePlan'])->name('free.plan');
Route::get('/plan-1', [PlanController::class, 'Plan1'])->name('plan.1');
Route::get('/plan-2', [PlanController::class, 'Plan2'])->name('plan.2');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
