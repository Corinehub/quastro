<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\documents;

class DocumentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $documents = auth()->user()->documents()->paginate(10);
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
        $document = auth()->user()->documents()->findOrFail($id);
        return view("", compact(""));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $document = auth()->user()->documents()->findOrFail($id);
        $document->update($request->all());
        return redirect()->route("")->with("success","");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $document = auth()->user()->documents()->findOrFail($id);
        $document->delete();
        return redirect()->route("")->with("success","");
    }
}
