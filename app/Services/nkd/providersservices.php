<?php


namespace App\Services\Nkd;
use App\Models\Provider;

class providersservices 
{
    
    public function getproviders(){
        // $dao = DAO::find(1);
        $providers = Provider::all();
        return $providers; 
    }

    public function findprovidersById($id){
        // $dao = DAO::find(1);
        $providers = Provider::find($id);
        return $providers;
    }
    public function storeproviders($request){
        // $dao = DAO::find(1);

        $saveproviders = Provider::create([
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
        return $saveproviders;
    }
    public function updateproviders($request ,$providers){
        $updateproviders =$providers->update([ 
            "id" => $request->id,
            "name" => $request->name,
            "adress" => $request->adress,
            "phone" => $request->phone,
         ]);
         return $updateproviders;
}
}