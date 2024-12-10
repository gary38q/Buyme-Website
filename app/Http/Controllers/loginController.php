<?php

namespace App\Http\Controllers;

use App\Services\internal\loginService;
use Illuminate\Http\Request;

class loginController extends Controller
{

    protected $loginService;

    public function __construct(loginService $loginService)
    {
        parent::__construct();
        $this->loginService = $loginService;
    }

    public function index()
    {
        return view('internalPages.login');
    }

    public function login(Request $request)
    {

        return view('pages.dashboard');
    }

    public function viewInternalLogin()
    {   
        return view('internalPages.login');
    }

    public function postInternalLogin(Request $request)
    {
        $username = $request->username;
        $password = $request->password;

        // $user = $this->loginService->internalLogin($username, $password);

        // if ($user)
        // {
        //     session()->put('user', $user);
        
        // session()->forget('error');
        // }
        // else
        // {
            session()->put('error', "Username atau Password Salah!!!");
            return redirect()->to('/internal-login');
        // }


        dd($username, $password);

        return ;
    }
}
