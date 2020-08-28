<?php

namespace App\Http\Controllers\Seguridad;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;
    protected $redirectTo = "inventario";
    private $maxAttempts = 3;
    private $decayMinutes = 20;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function index(){
        return view('auth.login');
    }

    protected function authenticated(Request $request, $user)
    {   
        $roles = $user->roles()->get();
        if ($roles->isNotEmpty()) {
            $user->setSession($roles->toArray());
        } else {
            $this->guard()->logout();
            $request->session()->invalidate();
            return redirect('welcome')->withErrors(['error' => 'Este usuario no tiene un rol activo']);
        }
    }
    public function username()
    {
        return 'user';
    }
}
