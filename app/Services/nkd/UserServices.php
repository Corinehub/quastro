<?php


namespace App\Services\Nkd;
use App\Models\User;

class UserServices 
{
    // public const super_admin_name ='admin';
    // public const client_name ='client';

    // /**
    //  *
    //  * return bool
    //  *
    //  */
    // public static function matchPrivilege(User $role, string $privilege_name){

    //     if($role->name === self::super_admin_name)
    //         return true;

    //     foreach($role->privilege as $p){
    //         if($p->name === $privilege_name)
    //             return true;
    //     }

    //     return false;
    // }

    public function storeUser($request){
        // $dao = DAO::find(1);

        $saveuser = User::create([
           
            "username" => $request->username,
            "email" => $request->email,
            "password" =>  bcrypt($request->password)
            ,

        ]);
        return $saveuser;
    }
    public function updateUser($request ,$user){
        $updateuser =$user->update([ 
            "username" => $request->username,
            "email" => $request->email,
            "password" => bcrypt($request->password),
          
         ]);
         return $updateuser;
}

}
