<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubdomainController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'subdomain' => 'required|string|max:255',
            'plan' => 'required|string',
        ]);

        return redirect()->back()->with('success', 'تم اختيار الخطة بنجاح!');
    }
}
