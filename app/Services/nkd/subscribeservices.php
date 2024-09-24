<?php


namespace App\Services\Nkd;
use App\Models\Subscribe;

class subscribeservices
{
    
    public function getsubscribe(){
        // $dao = DAO::find(1);
        $subscribe = subscribe::all();
        return $subscribe; 
    }

    public function findsubscribeById($id){
        // $dao = DAO::find(1);
        $subscribe = subscribe::find($id);
        return $subscribe;
    }
    public function storesubscribe($request){
        // $dao = DAO::find(1);

        $savesubscribe = subscribe::create([
            "id" => $request->id,
            "dao_id" => $request->dao_id,
            "providers_id" => $request->providers_id,
            "created_ad" => $request->created_ad,
            "updated_ad" => $request->updates_ad,
        ]);

        // 'id' => 'required',
        //   'name' => 'required|max:100',
        //    'adress' => 'required',
        //    'phone' => 'required',
        //    'email' => 'required|email|unique:users',
        //    'password' => 'required|min:8'
        return $savesubscribe;
    }
    public function updatesubscribe($request ,$subscribe){
        $updatesubscribe =$subscribe->update([ 
            "id" => $request->id,
            "dao_id" => $request->dao_id,
            "providers_id" => $request->providers_id,
            "created_ad" => $request->created_ad,
            "updated_ad" => $request->updates_ad,
         ]);
         return $updatesubscribe;
}
}