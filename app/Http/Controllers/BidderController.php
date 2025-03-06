<?php

namespace App\Http\Controllers;

use App\Models\Bidder;
use Illuminate\Http\Request;
use Inertia\Inertia;

class BidderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bidders = Bidder::all();
        return Inertia::render('Bidders', ['bidders' => $bidders]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'address' => 'required|string',
            'email' => 'required|email|unique:bidders',
        ]);

        Bidder::create($request->all());

        return redirect('/bidders')->with('message', 'Bidder added successfully!');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */

    /**
     * Display the specified resource.
     */
    public function show(Bidder $bidder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bidder $bidder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Bidder $bidder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bidder $bidder)
    {
        //
    }
}
