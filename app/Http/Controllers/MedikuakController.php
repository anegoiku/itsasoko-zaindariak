<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoremedikuakRequest;
use App\Http\Requests\UpdatemedikuakRequest;
use App\Models\medikuak;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class MedikuakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $medikuak = medikuak::all();
        return view('medikuak.index', compact('medikuak'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function form(): View
    {
        return view('medikuak.formulario');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        medikuak::create($request->all());

        return redirect()->route('medikuak.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(medikuak $medikuak): View
    {
        return view('medikuak.show', compact('medikuak'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(medikuak $medikuak): View
    {
        return view('medikuak.edit', compact('medikuak'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, medikuak $medikuak): RedirectResponse
    {
        $medikuak->update($request->all());
        return redirect()->route('medikuak.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(medikuak $medikuak): RedirectResponse
    {
        $medikuak->delete();
        return redirect()->route('medikuak.index');
    }
}
