<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorebidaiakRequest;
use App\Http\Requests\UpdatebidaiakRequest;
use App\Models\bidaiak;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class BidaiakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bidaiak = bidaiak::all();
        return view('bidaiak.index', compact('bidaiak'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function form(): View
    {
        return view('bidaiak.formulario');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        bidaiak::create($request->all());

        return redirect()->route('bidaiak.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(bidaiak $bidaiak): View
    {
        return view('bidaiak.show', compact('bidaiak'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(bidaiak $bidaiak): View
    {
        return view('bidaiak.edit', compact('bidaiak'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, bidaiak $bidaiak): RedirectResponse
    {
        $bidaiak->update($request->all());
        return redirect()->route('bidaiak.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(bidaiak $bidaiak): RedirectResponse
    {
        $bidaiak->delete();
        return redirect()->route('bidaiak.index');
    }
}
