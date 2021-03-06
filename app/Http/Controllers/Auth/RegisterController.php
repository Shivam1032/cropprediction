<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Auth;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */

    protected function validator(array $data)
    {   
        return Validator::make($data, [   
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'mobile' => ['required','string','max:12','unique:users'],
            'role'=>['required'],
            'farmer_id_card'=>['required_if:role,5|alpha_num|max:13|unique:users'],
            'aadhar_card'=>['required','string','max:20','unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
     
    }

    /**s
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'mobile' => $data['mobile'],
            'farmer_id_card' =>$data['farmer_id_card'],
            'aadhar_card'=>$data['aadhar_card'],
            'role'=>$data['role'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
