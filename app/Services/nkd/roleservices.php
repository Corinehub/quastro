<?php


namespace App\Services\Nkd;
use App\Models\Role;

class roleservices implements IRole
{
    public const super_admin_name ='admin';
    public const client_name ='client';

    /**
     *
     * return bool
     *
     */
    public static function matchPrivilege(Role $role, string $privilege_name){

        if($role->name === self::super_admin_name)
            return true;

        foreach($role->privilege as $p){
            if($p->name === $privilege_name)
                return true;
        }

        return false;
    }



}
