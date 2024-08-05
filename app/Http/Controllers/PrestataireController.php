<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\prestataire;

class PrestataireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prestataire = prestataire::all();
        return view("", compact(""));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $prestataire = prestataire::find($id);
        return view("", compact(""));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $prestataire = prestataire::find($id);
        $prestataire->update($request->all());
        return redirect()->route("")->with("success","");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $prestataire = prestataire::find($id);
        $prestataire->delete();
        return redirect()->route("")->with("success","");
    }
}
