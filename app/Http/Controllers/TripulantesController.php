<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoretripulantesRequest;
use App\Http\Requests\UpdatetripulantesRequest;
use App\Models\tripulantes;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class TripulantesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tripulantes = tripulantes::all();
        return view('tripulantes.index', compact('tripulantes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function form(): View
    {
        return view('tripulantes.formulario');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        tripulantes::create($request->all());

        return redirect()->route('tripulantes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(tripulantes $tripulantes): View
    {
        return view('tripulantes.show', compact('tripulantes'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(tripulantes $tripulantes): View
    {
        return view('tripulantes.edit', compact('tripulantes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, tripulantes $tripulantes): RedirectResponse
    {
        $tripulantes->update($request->all());
        return redirect()->route('tripulantes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(tripulantes $tripulantes): RedirectResponse
    {
        $tripulantes->delete();
        return redirect()->route('tripulantes.index');
    }
}
