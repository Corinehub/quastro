<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\souscrire;
class SouscrireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $souscrire = Souscrire::all();
        return view("", compact(""));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $souscrire = Souscrire::create($request->all());
        return redirect()->route("")->with("success","");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $souscrire = Souscrire::find($id);
        return view("", compact(""));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $souscrire = Souscrire::find($id);
        $souscrire->update($request->all());
        return redirect()->route("")->with("success","");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $souscrire = Souscrire::find($id);
        $souscrire->delete();
        return redirect()->route("")->with("success","");
    }
}
