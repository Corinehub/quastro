<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contenir;

class ContenirController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contenir = Contenir::all();
        return view("", compact(""));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $contenir = Contenir::create($request->all());
        return redirect()->route("")->with("success","");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $contenir = Contenir::findOrFail($id);
        return view("", compact(""));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $contenir = Contenir::
        findOrFail($id);
        $contenir->update($request->all());
        return redirect()->route("")->with("success","");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $contenir = Contenir::
        findOrFail($id);
        $contenir->delete();
        return redirect()->route("")->with("success","");
    }
}
