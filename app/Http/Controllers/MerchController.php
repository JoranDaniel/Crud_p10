<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Merch;

class MerchController extends Controller
{
    public function index()
    {
        // You can modify this method to retrieve and display merch items
        return view('merch');
    }

    public function create()
    {
        return view('merch.create');
    }

    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'required|string',
        ]);

        // Create a new merch item in the database
        Merch::create($validatedData);

        // Redirect back or to a success page
        return redirect()->back()->with('success', 'Merch item added successfully!');
    }
}
