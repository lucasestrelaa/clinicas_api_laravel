<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function logar(Request $request)
    {
        $data = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if (!Auth::attempt($data)) {
            return response()->json(['error' => 'Unauthorised'], 401);
        } else {
            //$client_token = md5(substr( md5($data['email']), 0, 4) . '%' . date('H:i:s'));
            $client_token = md5(substr( md5($data['email']), 0, 4) . '%' . date('H:i:s'));
            $token = DB::table('users')->where('email', $request->email)->get('remember_token');

            return response()->json(["logado!" => 'sim', 'tokenuser' => $token, 'token_acesso' => $client_token,  200]);//['token' => $client_token], 200 remember_token
        }
    }
}
