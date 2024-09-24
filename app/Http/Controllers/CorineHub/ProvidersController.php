<?php

namespace App\Http\Controllers\CorineHub;

use App\Models\Dao;
use App\Models\Provider;
use App\Models\Subscribe;
use App\Models\Subscription_dao_documents;
use App\Models\User;
use App\Services\Nkd\dao_documentsservices;
use App\Services\Nkd\Providersservices;
use Illuminate\Http\Concerns\InteractsWithInput;
use Illuminate\Http\Request;
use App\Models\providers;
use PhpParser\Node\Stmt\TryCatch;

class ProvidersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function dashboard()
    { 
        $daos = Dao::paginate(10);
        return view("pages.corine.Providers.dashboard", compact('daos'));
    }
    public function index()
    {  
        $mesDaos= Subscribe::with('daos')
        ->where('provider_id', auth()->user()->id)
        ->get();
        
        return view("pages.corine.Providers.index", compact('mesDaos'));
    }

    public function soumission($id)
    { 
        $daoResult = Dao::find($id);
        // dd($daoResult);
        return view("pages.corine.Providers.soumission",compact('daoResult'));
    }
    public function mesSoumission()
    { 
        // $daoResult = Dao::all();
        // dd($daoResult);
        

        $userProvider = User::with("provider")
        ->where("id", auth()->user()->id)
        ->first();

        
        $mesSoumissions= Subscribe::with('subscription_dao_documents')
        ->where('provider_id', $userProvider->provider_id)
        ->get();

        // dd($mesSoumissions);

        return view("pages.corine.Providers.messoumissions",compact('mesSoumissions'));
    }
    public function soumissionDao( Request $request, $id)
    { 
        // $daoResult = $id;
        $request->validate([
            
             'name' => 'required|max:100',
              'link' => 'required',
              'type' => 'required',
            //   "description" => ['required'],
            ]);

          Subscription_dao_documents::create([
                // "id" => $request->id,
                "name" => $request->name,
                "link" => $request->link,
                "type" => $request->type,
                "subscribe_id"=>$request->subscribe_id,
            ]);
            try {
                $service = new dao_documentsservices();
                $savedocuments = $service->storedocuments($request); 
                $path = $request->file('type')->storeAs('providerDocuments', $request->type->getClientOriginalName(), 'public');
                return redirect()->route("soumission.dao", $id)->with('message','Soumission Réussie');
            } catch (\Exception $exception) {
    
                return response()->json([
                    "success" => false,
                    "message" => $exception->getMessage()
                ]);
            }
            //   "updated_ad" => ['required']
        // return redirect()->route("soumission.dao", $id)->with('message','Soumission Réussie');
    }
    public function create(Request $request)
     {
         $request->validate([
         'id' => 'required',
          'name' => 'required|max:100',
           'address' => 'required',
           'phone' => 'required',
           "created_ad" => ['required'],
           "updated_ad" => ['required']
         ]);


    //      'name' => 'required|max:100',
    //      'email' => 'required|email|unique:users',
    //      'password' => 'required|min:8'
    //  ]);
 
    //  // On crée un nouvel utilisateur
    //  $user = User::create([
    //      'name' => $request->name,
    //      'email' => $request->email,
    //      'password' => bcrypt($request->password)

    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validator= $request->validate([
            'id' => 'required',
            'name' => 'required|max:100',
             'address' => 'required',
             'phone' => 'required',
             "created_ad" => ['required'],
             "updated_ad" => ['required']

            ]);

            
                try{

                    $service = new Providersservices();
                    $savedao = $service->storeproviders($request); 
                        return response()->json([
                            "success" => true,
                            "data" => $savedao
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
        $Service = new Providersservices();
        
        $dao = $Service->findprovidersById($id);
        // $data = $Service->Models()->find($id);
        // return view("", $data);
        return response()->json([
            "success"=>true,
            "data"=>$dao,
            ]);
    }
    public function details($id)
    {
        $daoResult= Dao::find($id);
        // dd($daoResult);
       return view('pages.corine.Providers.detailsdao',compact("daoResult"));
    }

    /**
     * Update the specified resource in storage.
          */
          public function update(Request $request, Provider  $dao )
          {
              // La validation de données
              $this->validate($request, [
                'id' => 'required',
                'name' => 'required|max:100',
                 'address' => 'required',
                 'phone' => 'required',
                 "created_ad" => ['required'],
                 "updated_ad" => ['required']
              ]);
          
              
              // On modifie les informations de l'utilisateur
              try{
              $service = new Providersservices();
              $id = $service->updateproviders($request,$dao);
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
    public function destroy(Provider $dao)
    {
        $dao->delete();
        return response()->json([
            "success" => true,
            "message" => "suppréssion réussie"
        ]);
    }
   
}   