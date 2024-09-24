<?php

namespace App\Http\Controllers\CorineHub;

use App\Services\Nkd\lotservices;
use Illuminate\Http\Concerns\InteractsWithInput;
use Illuminate\Http\Request;
use App\Models\Lot;
use PhpParser\Node\Stmt\TryCatch;

class LotController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $service = new lotservices();
        $alllot = $service->getlot();
        return response()->json([
            "success" => true,
            "data" => $alllot
            ]) ;
    }

    public function create(Request $request)
     {
         $request->validate([
         'id' => 'required',
           'name' => 'required',
           'guid' => 'required',
           'slug' => 'required',
           'description' => 'required',
           'short_description' => 'required',
           'color' => 'required',
           'default_lot' => 'required',
           "created_ad" => ['required'],
           "updated_ad" => ['required'],
           "project_id" => ['required'],
         ]);

    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validator= $request->validate([
              'id' => 'required',
           'name' => 'required',
           'guid' => 'required',
           'slug' => 'required',
           'description' => 'required',
           'short_description' => 'required',
           'color' => 'required',
           'default_lot' => 'required',
           "created_ad" => ['required'],
           "updated_ad" => ['required'],
           "project_id" => ['required'],
            ]);

            // if ( $validator){
                // $validated=$validator->validated();
                // $validated=$validator->safe();
                try{

                    $service = new lotservices();
                    $savelot = $service->storelot($request); 
                        return response()->json([
                            "success" => true,
                            "data" => $savelot
                            ]
        
                        ); 
                   
                }catch(\Exception $exception){

                    return response()->json([
                        "success" => false,
                        "message" =>  $exception->getMessage()
                    ]);
                }
            // }
           
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $Service = new lotservices();
        
        $lot = $Service->findlotById($id);
        // $data = $Service->Models()->find($id);
        // return view("", $data);
        return response()->json([
            "success"=>true,
            "data"=>$lot,
            ]);
    }

    /**
     * Update the specified resource in storage.
          */
          public function update(Request $request, lot $lot )
          {
              // La validation de données
              $this->validate($request, [
                'id' => 'required',
           'name' => 'required',
           'guid' => 'required',
           'slug' => 'required',
           'description' => 'required',
           'short_description' => 'required',
           'color' => 'required',
           'default_lot' => 'required',
           "created_ad" => ['required'],
           "updated_ad" => ['required'],
           "project_id" => ['required'],
              ]);
          
              
              // On modifie les informations de l'utilisateur
              try{
              $service = new lotservices();
              $id = $service->updatelot($request,$lot);
            //   $id->updatedao([
            //                "id" => $request->id,
            //                "type" => $request->type,
            //                "dateofpublication" =>$request->dateofpublication,
            //                "dateend" =>$request->dateend,
            //                "status" =>$request->status,
            //                "workers_id" =>$request->workers_id,
            //         ]);
          
              // On retourne la réponse JSON
            
              return response()->json([
                "success" => true,
                "message" => "félicitations"
            ]);
        }catch(\Exception $exception){
            return response()->json([
                "success" => false,
                "message" =>  $exception->getMessage()
            ]);

//          
          }
        }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(lot $lot)
    {
        $lot->delete();
        return response()->json([
            "success" => true,
            "message" => "suppréssion réussie"
        ]);
    }
   
}   

