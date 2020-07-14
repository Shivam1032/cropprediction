
@extends('layouts.app')

@section('content')


<div class="container">

    <div class="row justify-content-center">

        <div class="col-md-8">

            <div class="card">

                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">

                    <form method="POST"  action="{{ route('register') }}">
                        @csrf
                <!--USER NAME -->
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                           <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Mohit Agrawal">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                <!-- EMAIL ADDRESS -->
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="someone@example.com">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>      
                        </div>

                <!-- ROLE -->
                <div class="form-group row">
                            <label for="role" class="col-md-4 col-form-label text-md-right">{{ __('Role') }}</label>

                            <div class="col-md-6">
                                <select id="role" class="form-control @error('mobile') is-invalid @enderror" name="role" value="{{ old('role') }}" required autocomplete="role">
                                <option value="5">{{ __('Farmer') }}</option>
                                
                                <option value="4">{{ __('Buyer') }}</option>

                                </select>
                                @error('role')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>      
                </div>

                <!-- MOBILE NUMBER -->
                <div class="form-group row">
                            <label for="mobile" class="col-md-4 col-form-label text-md-right">{{ __('Mobile Number') }}</label>

                            <div class="col-md-6">
                                <input id="mobile" type="tel" class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{ old('mobile') }}" required autocomplete="mobile" placeholder="+91 9998887776">

                                @error('mobile')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>      
                </div>

                <!-- AADHAR CARD -->
                <div class="form-group row">
                            <label for="aadhar_card" class="col-md-4 col-form-label text-md-right">{{ __('Aadhar Card No') }}</label>

                            <div class="col-md-6">
                                <input id="aadhar_card" type="number" class="form-control @error('aadhar_card') is-invalid @enderror" name="aadhar_card" value="{{ old('aadhar_card') }}" required autocomplete="aadhar_card" placeholder="XXXX-XXXX-XXXX-XXXX">

                                @error('aadhar_card')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>      
                </div>


                <!-- FARMER ID CARD -->
                <div class="form-group row">
                            <label for="farmer_id_card" class="col-md-4 col-form-label text-md-right">{{ __('Farmer Card No') }}</label>
                        
                            <div class="col-md-6">
                                <input id="farmer_id_card" type="text" class="form-control @error('farmer_id_card') is-invalid @enderror" name="farmer_id_card" value="{{ old('farmer_id_card') }}" autocomplete="farmer_id_card" placeholder="ABC1234567890 (For Farmer)">

                                @error('farmer_id_card')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>      
                </div>
                
                 <!--PASSWORD-->
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Enter Your Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                <!--PASSWORD CONFIRM-->
                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Re-Enter Your Password to confirm">
                            </div>
                        </div>


                <!-- REGISTER BUTTON -->
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>        
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
