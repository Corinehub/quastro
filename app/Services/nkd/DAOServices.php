<?php


namespace App\Services\Nkd;
use App\Models\Dao;

class DAOServices 
{
    
    public function getDAO(){
        // $dao = DAO::find(1);
        $dao = DAO::all();
        return $dao; 
    }

    public function findDAOById($id){
        // $dao = DAO::find(1);
        $dao = DAO::find($id);
        return $dao;
    }
    public function storeDAO($request){
       
        $savedao = DAO::create([
           
            "name" => $request->name,
            "start_at" => $request->start_at,
            "end_at" => $request->end_at,
            "max_number_subscribe" => $request->max_number_subscribe,
            "category" => $request->category,
            "prices" => $request->prices,
            "projects_description" => $request->project_description,
            "instruction" => $request->instruction,
            "dao_submission_confirmation_message" => $request->dao_submission_confirmation_message,
            "country" => $request->country,
            "city" => $request->city,
            "postal" => $request->postal,
            "state/province" => $request->state,
            "worker_id" => auth()->user()->worker_id,

        ]);
         
        return $savedao;
    }
    public function updateDAO($request ,$dao){

        $updatedao =$dao->update([ 

            "name" => $request->name,
            "start_at" => $request->start_at,
            "end_at" => $request->end_at,
            "max_number_subscribe" => $request->max_number_subscribe,
            "category" => $request->category,
            "prices" => $request->prices,
            "project_description" => $request->project_description,
            "instruction" => $request->instruction,
            "dao_submission_confirmation_message" => $request->dao_submission_confirmation_message,
            "country" => $request->country,
            "city" => $request->city,
            "postal" => $request->postal,
            "state/province" => $request->state,
            "worker_id" => auth()->user()->worker->id,
          
         ]);
         return $updatedao;
}
}