<?php

namespace App\Http\Controllers\CorineHub;

use App\Models\DaoDocument;
use App\Models\Subscribe;
use App\Services\Nkd\DAOServices;
use Illuminate\Http\Concerns\InteractsWithInput;
use Illuminate\Http\Request;
use App\Models\Dao;
use PhpParser\Node\Stmt\TryCatch;

class DaoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $daos = Dao::all();
        // dd($daos)
        return view("pages.home", ['daos' => $daos]);

    }
    public function dashboard()
    {
        $daos = Dao::all();
        // dd($daos)
        return view("pages.corine.dao.index", ['daos' => $daos]);

    }
    public function listSouscription()
    {
        $subscribes = Subscribe::with('providers')
                        ->with("subscription_dao_documents")
                        ->get();
            // dd($subscribes);
        return view("pages.corine.dao.listsouscription", ['subscribes' => $subscribes]);

    }


    public function Dao()
    {
        $daoResults = Dao::all();
        return view('pages.corine.dao', ['daoResults' => $daoResults]);

    }


    public function create()
    {
        return view("pages.corine.dao.create");
    }
    //     public function Dashboard ()
//     {
//     return view("pages.dashboard");
// }
    public function zzz(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'start_at' => 'required',
            'end_at' => 'required',
            'max_number_subscribe' => 'required',
            'category' => 'required',
            'prices' => 'required',
            'project_description' => 'required',
            'instruction' => 'required',
            'dao_submission_confirmation_message' => 'required',
            'country' => 'required',
            "city" => 'required',
            'postal' => 'required',
            'state/province' => 'required',


        ]);

    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

   

        // $validator = $request->validate([
        //     'name' => 'required',
        //     'start_at' => 'required',
        //     'end_at' => 'required',
        //     'max_number_subscribe' => 'required',
        //     'category' => 'required',
        //     'prices' => 'required',
        //     'projects_description' => 'required',
        //     'instruction' => 'required',
        //     'dao_submission_confirmation_message' => 'required',
        //     'country' => 'required',
        //     "city" => 'required',
        //     'postal' => 'required',
        //     'state/province' => 'required',

        // ]);

        

        try {

            $service = new DAOServices();
            $savedao = $service->storeDAO($request); 
            return redirect()->route('dao');


        } catch (\Exception $exception) {

            return response()->json([
                "success" => false,
                "message" => $exception->getMessage()
            ]);


        }


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       

        // ]);
        //    return redirect()->route('dao');
        // $result = Dao::with("daoDocuments")->where("daos.id", $id)->get();
        // dd($result);
        // $daoResults = Dao::join("dao_documents", 'daos.id','dao_documents.dao_id')
        // ->where('daos.id', $id)
        // ->select('daos.*', 'dao_documents.*')
        // ->get();

        // $result = DaoDocument::with("dao")->where("dao_documents.dao_id", $id)->get();
        // dd($daoResults);

        $documentResults = DaoDocument::where("dao_id", $id)->get();
        $daoResult = Dao::find($id);

        return view('pages.corine.dao.show', compact('daoResult', "documentResults"));



    }

    public function showSouscription($id)
    {
        
        $subscribes = Subscribe::with('providers')
        ->with("subscription_dao_documents")
        ->with('daos')
        ->where('id',$id)
        ->get();
        // dd($subscribes);
        return view('pages.corine.dao.detailssouscription', compact('subscribes'));

        // $subscribeResult = Subscribe::with("providers")
        // ->where('id', $id)
        // ->first();
        // $providerId = $subscribeResult->providers->id;
        // $subscribes = Subscribe::with('providers', function ($query) use ($providerId){
        //     $query->where('id', $providerId)
        //     ->first();
        // })
        // ->with("subscription_dao_documents")
        // ->with('daos')
        // ->where('id',$id)
        // ->get();
        // dd($subscribes);

    }
    /**
     * Update the specified resource in storage.
     */
    public function edit(string $id)
    {
        $daoResults = Dao::find($id);
        return view('pages.corine.dao.update', compact('daoResults'));

    }
    public function update(Request $request, $id)
    {

        $updatedao = Dao::find($id);

        // dd($updatedao);
        $request = $updatedao->update(
            [
                "name" => $request->input('name'),
                "start_at" => $request->input('start_at'),
                "end_at" => $request->input('end_at'),
                "max_number_subscribe" => $request->input('max_number_subscribe'),
                "category" => $request->input('category'),
                "prices" => $request->input('prices'),
                "project_description" => $request->input('project_description'),
                "instruction" => $request->input('instruction'),
                "dao_submission_confirmation_message" => $request->input('dao_submission_confirmation_message'),
                "country" => $request->input('country'),
                "city" => $request->input('city'),
                "postal" => $request->input('postal'),
                "state/province" => $request->input('state/province'),
                "worker_id" => $request->input('worker_id'),

            ]
        );
        return redirect()->route('dao');




    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $id = Dao::destroy($id);

        return redirect()->route('dao');
    }

    public function delete($id)
    {
        $id = Dao::find($id);

        $id->delete();
        $daoResults = Dao::all();
        return view('pages.corine.dao.show', ['daoResults' => $daoResults]);

    }

}



