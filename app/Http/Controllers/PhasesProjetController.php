<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\phasesProjet;

class PhasesProjetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $phases = phasesProjet::orderBy("id","desc")->paginate(10);
        return view("", compact(""));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $phases = phasesProjet::find($id);
        return view("", compact(""));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $phases = phasesProjet::find($id);
        $phases->update($request->all());
        return redirect()->route("")->with("success","");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $phases = phasesProjet::find($id);
        $phases->delete();
        return redirect()->route("")->with("success","");
    }
}
