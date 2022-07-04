<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Business\SecurityService;
use App\Models\UserModel;

class LoginController extends Controller
{

    public function index(Request $request)
    {
        $this->validateForm($request);

        $securityService = new SecurityService();
        $username = $request->input('username');
        $password = $request->input('password');

        // echo "Username is: " . $username . " Password is: " . $password;

        $user = new UserModel($username, $password);
        $result = $securityService->login($user);
        if ($result) {
            return view('login2')->with('username', $user);
        }
        return view('loginFailed');
    }

    private function validateForm(Request $request)
    {
        $rules = [
            'username' => 'Required | Between:4,10 | Alpha',
            'password' => 'Required | Between:4,10'
        ];
        $this->validate($request, $rules);
    }
}
