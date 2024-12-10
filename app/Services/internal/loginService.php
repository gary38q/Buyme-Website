<?php

namespace App\Services\internal;

use App\Models\User;
use App\Services\BaseService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class loginService extends BaseService
{
    public function internalLogin($username, $password)
    {
        $user = User::where('username', $username)->first();

        if(!$user)
        {
            return false;            
        }

        if(!Hash::check($password, $user->password))
        {
            return false;
        }

        return $user;
    }
}
