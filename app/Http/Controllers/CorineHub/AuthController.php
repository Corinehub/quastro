<?php

namespace App\Http\Controllers\CorineHub;


use App\Models\Dao;
use App\Models\Provider;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //Registration
    public function register($dao)
    {
        $daoResult = Dao::find($dao);
        // dd($daoResult);
        return view("auth.register" ,compact('daoResult'));
    }
    public function store(Request $request,$dao)
    {
        $request->validate([
            'username' => 'required|alpha_dash',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
            'name' => 'required|min:3|unique:providers',
            'address' => 'required',
            'phone' => 'required',
        ]);


        //    creation du provider,./
        $provider = new Provider();
        $provider->name = $request->name;
        $provider->address = $request->address;
        $provider->phone = $request->phone;
        $provider->save();

        $user = new User();
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->remember_token = bcrypt($request->remember_token);
        $user->provider_id = $provider->id;
        $user->save();


        if ($user) {
            $daoResult = $dao;
            return redirect()->route("login.dao",$daoResult);
        } else {
            return back()->with('fail', 'Something wrong!');
        }
    }
    public function profileUpdate(Request $request, $id)
    {

        $updateprofile = User::find($id);

        // dd($updatedao);
        $request = $updateprofile ->update(
            [
                "name" => $request->input('name'),
                "address" => $request->input('address'),
                "phone" => $request->input('phone'),
                "username" => $request->input('username'),
                "email" => $request->input('email'),
                "password" => $request->input('password'),
                "remember_token" => $request->input('remember_token'),
               
                "provider_id" => $request->input('provider_id'),

            ]
        );
        return redirect()->route('profile');




    }
    ////Login
    public function loginDao($id)
    {
        $daoResult = Dao::find($id);
        // dd($daoResult);
        return view("auth.login",compact('daoResult'));
    }
    public function login()
    {
        return view("auth.login");
    }
    public function loginProvider()
    {
        // $daoResult = Dao::find($id);
        return view("auth.loginprovider");
    }
    public function loginWorker()
    {
      
        return view("auth.loginworker");
    }
    public function loginWork(Request $request)
    {
        $request->validate([
            'email' => 'required|min:3',
            'password' => 'required'
        ]);
        $pass = Hash::make($request->password);
        // dd($pass);
// dd($dao);
// $daoResult = $dao;
        // session('fail')= '';
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->remember_me)) {
                // return redirect()->route("dao");
                return redirect()->route("dao");

        } else {
            return back()->with('fail', 'Email ou mot de passe incorrect!');
        }

        // return view("auth.loginworker");
    }
    public function loginProv(Request $request)
    {
        $request->validate([
            'email' => 'required|min:3',
            'password' => 'required'
        ]);
        $pass = Hash::make($request->password);
        // dd($pass);
// dd($dao);
// $daoResult = $dao;
        // session('fail')= '';
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->remember_me)) {
                // return redirect()->route("dao");
                return redirect()->route("provider.dashboard");

        } else {
            return back()->with('fail', 'Email ou mot de passe incorrect!');
        }

        // return view("auth.loginworker");
    }

    public function loginUser(Request $request ,Dao $dao)
    {
        $request->validate([
            'email' => 'required|min:3',
            'password' => 'required'
        ]);
// dd($dao);
$daoResult = $dao;
        // session('fail')= '';
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->remember_me)) {
                // return redirect()->route("dao");
                return view("pages.corine.payement.payment",compact('daoResult'));

        } else {
            return back()->with('fail', 'Email ou mot de passe incorrect!');
        }

    }
    //// Dashboard
    public function dashboard()
    {
        // return "Welcome to your dashabord.";
        $data = array();
        if (Session::has('loginId')) {
            $data = User::where('id', '=', Session::get('loginId'))->first();
        }
        return view('dao', compact('data'));
    }
    ///Logout
    public function logout()
    {
        Auth()->logout(); 
        return redirect()->route('dashboard');
         
    }
    public function profile()
    {

        // $request->validate([
        //     'username' => 'required|alpha_dash',
        //     'email' => 'required|email|unique:users',
        //     'password' => 'required|min:6|confirmed',
        //     'name' => 'required|min:3|unique:providers',
        //     'address' => 'required',
        //     'phone' => 'required',
        // ]);


        // $provider = new Provider;
        // $provider->name = $request->name;
        // $provider->address = $request->address;
        // $provider->phone = $request->phone;
        // $provider->save();

        // $user = new User();
        // $user->username = $request->username;
        // $user->email = $request->email;
        // $user->password = bcrypt($request->password);
        // $user->remember_token = bcrypt($request->remember_token);
        // $user->provider_id = $provider->id;
        // $user->save();

        return view("auth.profile");
    }
    public function profileProvider()
    {
        return view("auth.profileprovider");
    }
}
