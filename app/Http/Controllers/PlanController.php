<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlanController extends Controller
{
    public function freePlan()
    {
        return view('free');
    }

    public function Plan1()
    {
        return view('plan1');
    }

    public function Plan2()
    {
        return view('plan2');
    }
}
