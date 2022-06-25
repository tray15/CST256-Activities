<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Business\SecurityService;
use App\Models\UserModel;

class LoginController extends Controller
{
    public function index(Request $request)
    {
        $securityService = new SecurityService();
        $username=$request->input('username');
        $password=$request->input('password');
        
        //echo "Username is: " . $username .  " Password is: " . $password;
        
        $user = new UserModel($username, $password);
        $result = $securityService->login($user);
        if ($result) {
            return view('loginPassed2')->with('username', $user);
        }
        return view('loginFailed');
    }
}
