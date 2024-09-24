<?php

namespace App\Http\Controllers\CorineHub;
use Illuminate\Http\Concerns\InteractsWithInput;
use Illuminate\Http\Request;
use App\Services\Nkd\workersservices;
use App\Models\Worker;

class WorkersController extends Controller
{
    public function index()
    {
        $architecte = new Worker();
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
        $architecte = new workersservices();
        $architecte->id = $id;
        $architecte->name = $request->name;
        $architecte->description = $request->description;
        $architecte->saveworkers();
        return redirect()->route("")->with("success","");
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request = $this->validateRequest();
        $architecte = new workersservices();
        $architecte->id = $id;
        $architecte->name = $request->name;
        $architecte->description = $request->description;
        $architecte->updateworkers();
        return redirect()->route("")->with("success","");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $architecte = new workersservices();
        $architecte->id = $id;
        $architecte->destroyworkers();
        return redirect()->route("")->with("success","");
    }

}
