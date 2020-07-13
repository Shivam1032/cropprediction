<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ConfirmsPasswords;

class ConfirmPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Confirm Password Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password confirmations and
    | uses a simple trait to include the behavior. You're free to explore
    | this trait and override any functions that require customization.
    |
    */

    use ConfirmsPasswords;

    /**
     * Where to redirect users when the intended url fails.
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
        $this->middleware('auth');
    }
}
