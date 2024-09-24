<?php

namespace App\Http\Controllers\CorineHub;


use App\Services\Nkd\UserServices;
use Illuminate\Http\Request;
use App\Models\User;
use Validator;
class UserController extends Controller
{
   
    // public function Register()
    // {
    //     return view("auth.register");
    // }
    
    // public function store(Request $request)
    // {

    //     // dd($validator);

    //     $validator = Validator::make($request->all(),[
    //         'username'  => 'required',
    //         'email'  => 'required',
    //         'password' => 'required'
    //     ]);

    // //     $validator = $request->validate([
    // //         'name'  => 'required',
    // // 'email'  => 'required',
    // // 'password' => 'required',]);

    // // dd($validator);

    // try {

    //     $service = new UserServices();
    //     // dd($request->username);
    //     $saveuser = $service->storeUser($request);
    //     // return response()->json(
    //     //     [
    //     //         "success" => true,
    //     //         "data" => $saveuser
    //     //     ]

        
    //     return view("auth.sign-in-cover");

    // } catch (\Exception $exception) {

    //     return response()->json([
    //         "success" => false,
    //         "message" => $exception->getMessage()
    //     ]);
    // //     return view("pages.corine.dao");
    //  }

        
    // }
    
}
