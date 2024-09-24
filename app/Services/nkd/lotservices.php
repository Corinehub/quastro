<?php


namespace App\Services\Nkd;
use App\Models\Lot;

class lotservices 
{
    
    public function getlot(){
        $lot = lot::all();
        return $lot;
    }
    

    public function findlotById($id){
        // $dao = DAO::find(1);
        $lot = lot::find($id);
        return $lot;
    }
    public function storelot($request){
        // $dao = DAO::find(1);

        $savelot = lot::create([
            "id" => $request->id,
            "name" => $request->name,
            "guid" => $request->guid,
            "slug" => $request->slug,
            "descrription" => $request->description,
            "color" => $request->color,
            "project_id" => $request->project_id,
        ]);
        return $savelot;
    }
    public function updatelot($request ,$lot){
        $updatelot =$lot->update([ 
           "id" => $request->id,
            "name" => $request->name,
            "guid" => $request->guid,
            "slug" => $request->slug,
            "descrription" => $request->description,
            "color" => $request->color,
            "project_id" => $request->project_id,
         ]);
         return $updatelot;
        }

    
}
