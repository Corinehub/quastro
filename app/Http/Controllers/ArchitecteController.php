<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\architecte;


class ArchitecteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $architecte = new Architecte();
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
        $request = $this->validateRequest();
        $architecte = new Architecte();
        $architecte->id = $id;
        $architecte->name = $request->name;
        $architecte->description = $request->description;
        $architecte->save();
        return redirect()->route("")->with("success","");
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request = $this->validateRequest();
        $architecte = new Architecte();
        $architecte->id = $id;
        $architecte->name = $request->name;
        $architecte->description = $request->description;
        $architecte->save();
        return redirect()->route("")->with("success","");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $architecte = new Architecte();
        $architecte->id = $id;
        $architecte->delete();
        return redirect()->route("")->with("success","");
    }
}
