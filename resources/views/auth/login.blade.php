@extends('layouts.auth') @section('body')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8" id="image">
            <div id="logo">
                <img src="{{asset('/storage/myAssets/logo.png')}}" alt="">
            </div>
        </div>
        <div class="col-md-4" id="forms">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="text-center nav-link active" id="signIn-tab" data-toggle="tab" href="#signIn" role="tab" aria-controls="signIn"
                        aria-selected="true">Sign In</a>
                </li>
                <li class="nav-item">
                    <a class="text-center nav-link" id="signUp-tab" data-toggle="tab" href="#signUp" role="tab" aria-controls="signUp" aria-selected="false">Sign Up</a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">

                <!-- SignIn Tab -->
                <div class="tab-pane active" id="signIn" role="tabpanel" aria-labelledby="signIn-tab">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-7">
                                <input autocomplete="off" id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                                    value="{{ old('email') }}" required> @if ($errors->has('email'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-7">
                                <input autocomplete="off" id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                    name="password" required> @if ($errors->has('password'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
                {{-- ------------------------------------------------------------------------------------------ --}}
                <!-- SignUp Tab -->
                <div class="tab-pane" id="signUp" role="tabpanel" aria-labelledby="signUp-tab">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-7">
                                <input autocomplete="off" id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name"
                                    value="{{ old('name') }}" required> @if ($errors->has('name'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-7">
                                <input autocomplete="off" id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                                    value="{{ old('email') }}" required> @if ($errors->has('email'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="contact" class="col-md-4 col-form-label text-md-right">{{ __('Contact') }}</label>

                            <div class="col-md-7">
                                <input autocomplete="off" id="contact" type="number" maxlength="11" minlength="11" class="form-control{{ $errors->has('contact') ? ' is-invalid' : '' }}"
                                    name="contact" value="{{ old('contact') }}" required> @if ($errors->has('contact'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('contact') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                            <div class="col-md-7">
                                <input autocomplete="off" id="address" type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}"
                                    name="address" value="{{ old('address') }}" required> @if ($errors->has('address'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('address') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-7">
                                <input autocomplete="off" id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                    name="password" required> @if ($errors->has('password'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-7">
                                <input autocomplete="off" id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-7 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- SignIn Tab End-->
            </div>
            <!-- tab-Content End -->
        </div>
        <!-- forms End -->
    </div>
    <!-- row end -->
</div>
<!-- container-fluid End -->
@endsection
