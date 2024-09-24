<?php

namespace App\Http\Controllers\CorineHub;

use App\Models\Dao;
use App\Models\DaoDocument;
use App\Models\Provider;
use App\Models\Subscribe;
use App\Models\User;
use App\Services\Nkd\dao_documentsservices;
use App\Services\Nkd\Documentsservices;
use Illuminate\Http\Request;
use App\Models\Document;
use Storage;

class Dao_DocumentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $service = new dao_documentsservices();
        $alldocuments = $service->getdocuments();
        return response()->json([
            "success" => true,
            "data" => $alldocuments
        ]);
    }
    public function download($id)
{
    $documentResult = DaoDocument::find($id);
    
    if (!$documentResult) {
        return response()->json(['error' => 'Document not found'], 404);
    }
    
    // Chemin correct pour le fichier
    $path = 'documentsdao/' . $documentResult->type;

    // Vérifie si le fichier existe dans le stockage
    if (!Storage::disk('public')->exists($path)) {
        return response()->json(['error' => 'File not found at location'], 404);
    }

    // Télécharge le fichier
    return Storage::disk('public')->download($path);
}
    
    public function list($id)
    {

        $provider = User::join("providers", 'providers.id','users.provider_id')
         ->where('users.id', auth()->user()->id)
         ->select('users.*', 'providers.*')
         ->first();
  
        $subscribe = Subscribe::where("provider_id", $provider->provider_id)->first();
 
        $documentResults = DaoDocument::where('dao_id', $id)->get();
            // dd($documentResults);
            return view('pages.corine.dao.listdocument', ['documentResults' => $documentResults])->with('message','Votre paiement a ete effectue avec success');
    }
    // public function list()
    // {
    //     $documents = DaoDocument::all();
    //     return view('pages.corine.dao', ['daoResults' => $daoResults]);

    // }

    // public function create()
    // {
    //     return view("pages.corine.dao.document");
    // }
    public function create($id)
    {
        // dd("id : ". $id);
        $dao_id = $id;
        return view("pages.corine.dao.document", compact("dao_id"));
    }
    public function store(Request $request)
    {

        $validator = $request->validate([

            'name' => 'required',
            'link' => 'required',
            'type' => 'required',

        ]); 

        try {
            $service = new dao_documentsservices();
            $savedocuments = $service->storedocuments($request); 
            $path = $request->file('type')->storeAs('documentsdao', $request->type->getClientOriginalName(), 'public');
            return redirect()->route('dao.show', ['id' => $request->dao_id]);
        } catch (\Exception $exception) {

            return response()->json([
                "success" => false,
                "message" => $exception->getMessage()
            ]);
        }

    }



    public function edit(string $id)
    {
        $documentResult = DaoDocument::find($id);
        return view('pages.corine.dao.updatedoc', compact('documentResult'));

    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $Service = new dao_documentsservices();
        $document = $Service->finddocumentsById($id);
        return response()->json([
            "success" => true,
            "data" => $document,
        ]);


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,int $id)
    {
        $documentResult = DaoDocument::find($id);
        // dd($id);

        $request = $documentResult->update([
            "name" => $request->input('name'),
            "link" => $request->input('link'),
            "type" => $request->input('type'),
            // "dao_id" => $request->input('dao_id'),

          
        ]);
        // $service = new dao_documentsservices();
        // $id = $service->updatedocuments($request, $documents);
        $dao_id = $id;
        return redirect()->route('dao.show' , ['id'=>$documentResult->dao_id]);

    }

    // public function update(Request $request, string $id)
    // {

    //     $id = Dao::find($id);

    //     $request = $id->update(
    //         
    //         ]
    //     );
    //     return redirect()->route('dao');




    // }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DaoDocument $documents)
    {
        $documents->delete();
        return response()->json([
            "success" => true,
            "message" => "suppréssion réussie"
        ]);
    }

    public function delete($id)
    {
        $document = DaoDocument::find($id);
        $document->delete();
        return redirect()->route('dao.show', $document->dao_id);

    }
}
