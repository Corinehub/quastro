<?php


namespace App\Services\Nkd;
use App\Models\DaoDocument;
use App\Models\Document;

class dao_documentsservices 
{
    
    public function getdocuments(){
        // $dao = DAO::find(1);
        $document = DaoDocument::all();
        return $document; 
    }

    public function finddocumentsById($id){
        // $dao = DAO::find(1);
        $document = DaoDocument::find($id);
        return $document;
    }
    public function storedocuments($request){
        // $dao = DAO::find(1);
        // dd(["dao_id" => $request->dao_id,]);

        $savedocuments = DaoDocument::create([
            "name" => $request->name,
            "link" => $request->link,
            "type" => $request->type->getClientOriginalName(),
            "dao_id" => $request->dao_id,

            
        ]);
        return $savedocuments;
    }

    // public function storeDAO($request){
       
    //     $savedao = DAO::create([
           
    //         "name" => $request->name,
    //         "start_at" => $request->start_at,
    //         "end_at" => $request->end_at,
    //         "max_number_subscribe" => $request->max_number_subscribe,
    //         "category" => $request->category,
    //         "prices" => $request->prices,
    //         "project_description" => $request->project_description,
    //         "instruction" => $request->instruction,
    //         "dao_submission_confirmation_message" => $request->dao_submission_confirmation_message,
    //         "country" => $request->country,
    //         "city" => $request->city,
    //         "postal" => $request->postal,
    //         "state/province" => $request->state,
    //         "worker_id" => auth()->user()->worker_id,

    //     ]);
    //     return $savedao;
    // }

    public function updatedocuments($request ,$documents ){
        
            $updatedocuments = $documents->update([ 
            "name" => $request->name,
            "type" => $request->type,
            "link" => $request->link,
            "dao_id" => $request->dao_id,
          
            
         ]);
         return $updatedocuments;
}
}