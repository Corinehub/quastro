<?php

namespace App\Http\Controllers\CorineHub;


use App\Models\Dao;
use App\Models\DaoDocument;
use App\Models\DaoPayment;
use App\Models\Subscribe;
use App\Models\User;
use Arr;
use Illuminate\Http\Request;
use Stripe\PaymentIntent;
use Stripe\Stripe;
use Stripe\Charge;
use Stripe\Card;
use Stripe\StripeClient;
class Dao_PaymentsController extends Controller
{
    public function showPaymentForm()
    {
        return view('pages.corine.payement.payment');
    }

    public function processPayment(Request $request, $id)
    {
        Stripe::setApiKey("sk_test_51PxRttBLfKWYHmGkg5olWeJU2yW4Etw6GiULJhlhHo4poLykKXGNBzc58mmggXULUPgpC86VaLaI9OWzhqs2vkEs001ox6wpP8");

        try {
            $dao = Dao::find($id);

            $intent = PaymentIntent::create(
                [
                    'amount' => $dao->prices, // Amount in cents
                    'currency' => 'usd',
                    // 'source' => $request->stripeToken,
                    'description' => $dao->project_description,
                ]
            );

            if (auth()->check()) {

                $subscribe_id = User::join("providers", 'providers.id', 'users.provider_id')
                    ->where('users.id', auth()->user()->id)
                    ->select('users.*', 'providers.*')
                    ->first();


                // dd($provider_id);

                $subscribe = new Subscribe();
                $subscribe->dao_id = $id;
                $subscribe->provider_id = $subscribe_id->provider_id;
                $subscribe->comments = auth()->user()->username . " a souscrit à la DAO " . $dao->name;
                $subscribe->validated='En Attente';
                $subscribe->save();

                DaoPayment::create([
                    'name' => "Payement de la DAO " . $dao->name,
                    'cost' => $dao->prices,
                    'state' => 'paid',
                    'paid_at' => now(),
                    'subscribe_id' => $subscribe->id
                ]);
               return redirect()->route('document.list',$id)->with('message','Votre paiement a ete effectue avec success');
                
            } else {
               return redirect()->route('dashboard');
            }

        } catch (\Exception $e) {
            dd($e->getMessage());
            $request->session()->flash('error', $e->getMessage());
            return redirect()->route('payment.failure')->with('error', $e->getMessage());
        }
    }

    public function index()
    {
        // Récupérer tous les paiements
        // $subscribe = DaoPayment::all();
        $userProvider = User::with("provider")
        ->where("id", auth()->user()->id)
        ->first();

        
        $mesPaiements= Subscribe::with('dao_payments')
        ->where('provider_id', $userProvider->provider_id)
        ->get();
        // dd($mesPaiements);
        // Retourner la vue avec les paiements
        return view('pages.corine.payement.payement_index', compact('mesPaiements'));
    }
}
