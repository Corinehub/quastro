<?php


namespace App\Services\Nkd;
use App\Models\Worker;


class workersservices
{
    
    public function getworkers(){
        // $dao = DAO::find(1);
        $workers = Worker::all();
        return $workers; 
    }

    public function findworkersById($id){
        // $dao = DAO::find(1);
        $workers = Worker::find($id);
        return $workers;
    }
    public function storeworkers($request){
        // $dao = DAO::find(1);

        $saveworkers = Worker::create([
            "id" => $request->id,
            "name" => $request->name,
            "adress" => $request->adress,
            "phone" => $request->phone,
        ]);

        // 'id' => 'required',
        //   'name' => 'required|max:100',
        //    'adress' => 'required',
        //    'phone' => 'required',
        //    'email' => 'required|email|unique:users',
        //    'password' => 'required|min:8'
        return $saveworkers;
    }
    public function updateworkers($request ,$workers){
        $updateworkers =$workers->update([ 
            "id" => $request->id,
            "name" => $request->name,
            "adress" => $request->adress,
            "phone" => $request->phone,
         ]);
         return $updateworkers;
    }
}