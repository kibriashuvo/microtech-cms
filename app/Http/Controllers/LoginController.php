<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    protected $redirectTo = '/dashboard';
    // protected $redirectAfterLogout = '/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['guest','ifnouser'], ['except' => 'logout']);
    }
    
    protected $redirectAfterLogout = '/login';


    // public function username()
    // {
    //     return 'username';
    // }


    // public function login(Request $request)
    // {
    // $field = filter_var($request->input('login'), FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
    // $request->merge([$field => $request->input('login')]);
    // dd($field);
    // if ($this->Auth::attempt($request->only($field, 'password')))
    // {
    //     return redirect('/dashboard');
    // }

    // return redirect('/login')->withErrors([
    //     'error' => 'These credentials do not match our records.',
    // ]);
    // }



protected function credentials(Request $request){$field = filter_var($request->input($this->username()), FILTER_VALIDATE_EMAIL) ? 'email' : 'username';$request->merge([$field => $request->input($this->username())]);return $request->only($field, 'password');}

public function username()
{
    return 'username';
}

public function logout(Request $request)
{
    $this->guard()->logout();
    $request->session()->flush();
    $request->session()->regenerate();
    return redirect($this->redirectAfterLogout);
}






}
