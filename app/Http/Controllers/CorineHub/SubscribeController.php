<?php

namespace App\Http\Controllers\CorineHub;

use App\Models\Dao;
use App\Models\Provider;
use App\Models\Subscribe;
use App\Notifications\SubscriptionRejected;
use Auth;
use Illuminate\Http\Request;
class SubscribeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $souscrire = Subscribe::all();
        return view("", compact(""));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $souscrire = Subscribe::create($request->all());
        return redirect()->route("")->with("success", "");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $souscrire = Subscribe::find($id);
        return view("", compact(""));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $souscrire = Subscribe::find($id);
        $souscrire->update($request->all());
        return redirect()->route("")->with("success", "");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $souscrire = Subscribe::find($id);
        $souscrire->delete();
        return redirect()->route("")->with("success", "");
    }
    public function subscribe($dao_id)
    {
        // $subscribeResults = Subscribe::all();
        // $documentResults = Subscribe::all();
        $subscribeResults = Provider::join('subscribes', 'providers.id', 'subscribes.provider_id')
            ->join("users", 'users.provider_id', 'providers.id')
            ->where('subscribes.dao_id', $dao_id)
            ->select('providers.*', "users.*")
            ->distinct()
            ->get();

        //    dd($subscribeResults);
        return view('pages.corine.dao.souscription', compact('subscribeResults'));
        // return view('pages.corine.dao.souscription', ['documentResults' => $documentResults]);


    }

    public function soumission()
    {

        return view("soumission.loginsoumission");

    }

    public function soumissionLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|min:3',
            'password' => 'required'
        ]);
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->remember_me)) {

            return redirect()->route("provider.index");

        } else {
            return back()->with('fail', 'Email ou mot de passe incorrect!');
        }

    }
    public function reject($id)
    {
        // Trouver l'enregistrement
        $subscribeResult = Subscribe::find($id);

        // Vérifier si l'enregistrement existe
        if (!$subscribeResult) {
            return redirect()->back()->with('error', 'Souscription non trouvée.');
        }

        // Mettre à jour l'enregistrement
        $subscribeResult->validated = 'Rejetée';
        $subscribeResult->save(); // Utilisez save() pour enregistrer les changements

        // Redirection avec message de succès
        return redirect()->back()->with('message', 'Souscription rejetée et fournisseur notifié.');
    }
    public function valider($id)
    {
         // Trouver l'enregistrement
         $subscribeResult = Subscribe::find($id);

         // Vérifier si l'enregistrement existe
         if (!$subscribeResult) {
             return redirect()->back()->with('error', 'Souscription non trouvée.');
         }
 
         // Mettre à jour l'enregistrement
         $subscribeResult->validated = 'Validée';
         $subscribeResult->save(); // Utilisez save() pour enregistrer les changements
 
         // Redirection avec message de succès


        return redirect()->back()->with('message', 'Souscription validée et fournisseur notifié.');
    }

}
