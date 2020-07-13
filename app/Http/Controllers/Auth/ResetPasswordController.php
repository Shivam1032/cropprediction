<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
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
}
