<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Auth;
use Symfony\Component\HttpFoundation\Response;
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

    protected $redirectTo;
   

    public function redirectTo()
    {
        
        switch (Auth::user()->role)
        {
            case 0:
                $this->redirectTo = '/superadmin';
                return $this->redirectTo;
                break;
            case 1:
                $this->redirectTo = '/admin';
                return $this->redirectTo;
                break;
            case 2:
                $this->redirectTo = '/seeddistribution';
                return $this->redirectTo;
                break;
            case 3:
                $this->redirectTo = '/soiltester';
                return $this->redirectTo;
                break;

            case 4:
                $this->redirectTo = '/buyer';
                return $this->redirectTo;
                break;

            case 5:  
                $this->redirectTo = '/farmer';
                return $this->redirectTo;
                break;
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

    
        /**
     * Get the failed login response instance.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    protected function sendFailedLoginResponse(\Illuminate\Http\Request $request)
    {
        throw \Illuminate\Validation\ValidationException::withMessages([
            $this->username() => [trans('auth.failed')],
        ]);
    }

        public function username(){
            $login = request()->input('username');
            if(is_numeric($login)){
                $field = 'mobile';
            } elseif(filter_var($login,FILTER_VALIDATE_EMAIL)){
                $field='email';
            }else{
                $field = 'email';
            }
            request()->merge([$field=>$login]);
            return $field;
        }

}
