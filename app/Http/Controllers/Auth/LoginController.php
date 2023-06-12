<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Carbon\Carbon;
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

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
    	return view('auth.login');
	}

    protected function credentials(Request $request)
    {
		$credentials = $request->only('user', 'password');
		return $credentials;
	}

    protected function validateLogin(Request $request)
	{
		$request->validate([
			'user'     => 'required|string',
			'password'      => 'required|string',
		]);
	}

    public function login(Request $request)
    {
        $credentials = $this->validate(request(), array(
            'user'              => 'required|string',
            'password'          => 'required|string'
        ), array(
            'user.required'     => 'Tienes que ingresar tu correo corporativo.',
            'password.required' => 'Tienes que ingresar tu contraseña.'
        ));

        if (Auth::attempt($credentials)) {
            return redirect()->route('home');
        }else{
            return back()
                ->withErrors(['user' => trans('auth.failed')])
                ->withInput(request(['user']));
        }
	}

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->forget('box_id');
        return redirect('/');
    }

    public function timer(Request $request)
    {
        $today = new Carbon('2021-12-23 19:00:00');
        $rest = $today->diffInMinutes(new Carbon());
        $timer = $today->diffForHumans();
        return response()->json($timer, 200);
    }
}
