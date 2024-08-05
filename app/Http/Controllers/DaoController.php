<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DAO;

class DaoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DAO::getAll();
        return view("", $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data[""] = $request->input("");
        $data["name"] = $request->input("name");
        $data[""] = $request->input("");
        $data["email"] = $request->input("email");
        $data[""] = $request->input("");
        $data["status"] = $request->input("status");
        $data[""] = $request->input("");
        $data["created_at"] = $request->input("created_at");
        $data["updated_at"] = $request->input("updated_at");
        $data[""] = $request->input("");
        $data["status"] = $request->input("status");
        $data[""] = $request->input("");
        $data["status"] = $request->input("");
        $data[""] = $request->input("");
        $data["status"] = $request->input("");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = $this->Models()->find($id);
        return view("", $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->Models()->delete($id);
        return redirect()->route("")->with("success","");
    }
}
