<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\VerifiesEmails;

class VerificationController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Email Verification Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling email verification for any
    | user that recently registered with the application. Emails may also
    | be re-sent if the user didn't receive the original email message.
    |
    */

    use VerifiesEmails;

    /**
     * Where to redirect users after verification.
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
        $this->middleware('signed')->only('verify');
        $this->middleware('throttle:6,1')->only('verify', 'resend');
    }
}
