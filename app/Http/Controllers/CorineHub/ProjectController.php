<?php

namespace App\Http\Controllers\CorineHub;

use App\Services\Nkd\Projectservices;
use Illuminate\Http\Concerns\InteractsWithInput;
use Illuminate\Http\Request;
use App\Models\Project;
use PhpParser\Node\Stmt\TryCatch;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $service = new Projectservices();
        $allproject = $service->getproject();
        return response()->json([
            "success" => true,
            "data" => $allproject
            ]) ;
    }

    public function create(Request $request)
     {
         $request->validate([
         'id' => 'required',
           'title' => 'required',
           'start' => 'required',
           'end' => 'required',
           'prices' => 'required',
           "stepproject_id" => ['required'],
         ]);

    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validator= $request->validate([
            'id' => ['required'],
              'type' => ['required'],
              'start' => ['required'],
              'end' => ['required'],
              'prices' => ['required'],
              "stepproject_id" => ['required'],
            ]);

            // if ( $validator){
                // $validated=$validator->validated();
                // $validated=$validator->safe();
                try{

                    $service = new Projectservices();
                    $saveproject = $service->storeproject($request); 
                        return response()->json([
                            "success" => true,
                            "data" =>  $saveproject
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
        $Service = new Projectservices();
        
        $project = $Service->findprojectById($id);
        // $data = $Service->Models()->find($id);
        // return view("", $data);
        return response()->json([
            "success"=>true,
            "data"=>$project,
            ]);
    }

    /**
     * Update the specified resource in storage.
          */
          public function update(Request $request, project $project )
          {
              // La validation de données
              $this->validate($request, [
                 'id' => ['required'],
              'type' => ['required'],
              'start' => ['required'],
              'end' => ['required'],
              'prices' => ['required'],
              "items_id" => ['required'],
              "created_ad" => ['required'],
           "updated_ad" => ['required']
              ]);
          
              
              // On modifie les informations de l'utilisateur
              try{
              $service = new Projectservices();
              $id = $service->updateproject($request,$project);
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
    public function destroy(project $project)
    {
        $project->delete();
        return response()->json([
            "success" => true,
            "message" => "suppréssion réussie"
        ]);
    }
   
}   