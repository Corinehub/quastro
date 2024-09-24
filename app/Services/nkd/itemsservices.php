<?php


namespace App\Services\Nkd;
use App\Models\Item;

class itemsservices
{
    
    public function getitems(){
        // $dao = DAO::find(1);
        $items= Item::all();
        return $items; 
    }

    public function finditemsById($id){
        // $dao = DAO::find(1);
        $items = Item::find($id);
        return $items;
    }
    public function storeitems($request){
        // $dao = DAO::find(1);

        $saveitems = Item::create([
            "id" => $request->id,
            "title" => $request->title,
            "start_ad" => $request->start_ad,
            "end_ad" => $request->end_ad,
            "domaine" => $request->domaine,
            "description" => $request->description,
            "color" => $request->end_ad,
            "prices" => $request->prices,
        ]);

        // 'id' => 'required',
        //   'name' => 'required|max:100',
        //    'adress' => 'required',
        //    'phone' => 'required',
        //    'email' => 'required|email|unique:users',
        //    'password' => 'required|min:8'
        return $saveitems;
    }
    public function updateitems($request ,$items){
        $updateitems =$items->update([ 
            "id" => $request->id,
            "title" => $request->title,
            "start_ad" => $request->start_ad,
            "end_ad" => $request->end_ad,
            "domaine" => $request->domaine,
            "description" => $request->description,
            "color" => $request->end_ad,
            "prices" => $request->prices,
         ]);
         return $updateitems;
}
}