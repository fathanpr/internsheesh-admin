<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
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

    // protected $redirectTo = RouteServiceProvider::ADMIN;
    


    protected function redirectTo()
    {
        if (auth()->user()->role_id == 1) {
            return '/admin';  
        } else if (auth()->user()->role_id == 2){
            return '/mahasiswa';
        } else if (auth()->user()->role_id == 3){
            return '/dosen';
        } else if (auth()->user()->role_id == 4){
            return '/kaprodi';
        } else {
            return '/magangadm';
        }
    }


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            if (auth()->user()->role_id == 1) {
                $request->session()->regenerate();
                return redirect()->to('/admin');
            } else if (auth()->user()->role_id == 2) {
                $request->session()->regenerate();
                return redirect()->to('/mahasiswa');
            }
            else if (auth()->user()->role_id == 3) {
                $request->session()->regenerate();
                return redirect()->to('/dosen');
            }
            else if (auth()->user()->role_id == 4) {
                $request->session()->regenerate();
                return redirect()->to('/kaprodi');
            }
            else if (auth()->user()->role_id == 5) {
                $request->session()->regenerate();
                return redirect()->to('/magangadm');
            }
        }

        return redirect()->route('/login'); 
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }

    public function index(){
        return redirect('/login');
    }
}
