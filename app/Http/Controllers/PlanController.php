<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Checkout\Session;
use Stripe\Stripe;

class PlanController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
     */
    public function freePlan()
    {
        return view('free');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
     */
    public function Plan1()
    {
        return view('plan1');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
     */
    public function Plan2()
    {
        return view('plan2');
    }

    public function redirectToStripe(Request $request, $planType)
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));


        $price = 0;
        switch ($planType) {
            case 'free':
                $price = 0;
                break;
            case 'teacher':
                $price = 5000;
                break;
            case 'centers':
                $price = 10000;
                break;
            default:
                return redirect()->back()->withErrors('Invalid plan selected');
        }

        if ($price == 0) {
            return redirect()->route('free.plan')->with('success', 'You have selected the Free Plan.');
        }

        $session = Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price_data' => [
                    'currency' => 'usd',
                    'product_data' => [
                        'name' => ucfirst($planType) . ' Plan',
                    ],
                    'unit_amount' => $price,
                ],
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => route('payment.success'),
            'cancel_url' => route('payment.cancel'),
        ]);


        return redirect($session->url);
    }

    public function paymentSuccess()
    {
        // هنا بعد نجاح الدفع سيتم التوجيه إلى صفحة الـ SUBDOMAIN
        return redirect()->route('show.subdomain.form');
    }

    public function paymentCancel()
    {
        // في حالة إلغاء الدفع
        return redirect()->route('plans');
    }
}
