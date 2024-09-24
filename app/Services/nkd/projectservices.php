<?php


namespace App\Services\Nkd;
use App\Models\project;

class projectservices 
{
    
    public function getproject(){
        // $dao = DAO::find(1);
        $project = project::all();
        return $project; 
    }

    public function findprojectById($id){
        // $dao = DAO::find(1);
        $project  = project::find($id);
        return $project;
    }
    public function storeproject($request){
        // $dao = DAO::find(1);

        $saveproject = project::create([
            "id" => $request->id,
            "title" => $request->title,
            "start" => $request->start,
            "end" => $request->end,
            "prices" => $request->prices,
            "items_id" => $request->items_id,
        ]);
        return $saveproject;
    }
    public function updateproject($request ,$project){
        $updateproject =$project->update([ 
            "id" => $request->id,
            "title" => $request->title,
            "start" => $request->start,
            "end" => $request->end,
            "prices" => $request->prices,
            "items_id" => $request->items_id,
         ]);
         return $updateproject;
}
}