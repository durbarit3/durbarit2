<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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

    public function showLoginForm()
    {
        return view('frontend.accounts.login');
    }

    public function login(Request $request)
    {
        $this->validate($request,[
            'email' => 'required',
            'password' => 'required'
        ]);

        $user = User::where('email', $request->email)->first();
        if ($user) {
            if ($user->status == 1) {
                $checkInformation = Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password]);
                if ($checkInformation) {
                    return redirect()->intended(route('customer.account'));
                }else {
                    session()->flash('errorMsg', 'Email ID or Password not matched!');
                    return redirect()->back();
                }
            }else {
                session()->flash('errorMsg', 'You Email ID Is Not Verified!');
                return redirect()->back();
            }
        }else {
            session()->flash('errorMsg', 'Email ID or Password not matched!');
            return redirect()->back();
        }
    }



}
