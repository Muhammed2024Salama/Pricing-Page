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
        ]);

        return redirect()->route('dashboard')->with('success', 'Subdomain added successfully!');
    }
}
