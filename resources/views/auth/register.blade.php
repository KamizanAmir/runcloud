@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div style="text-align:center; font-family:cursive;" class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" style="font-family:cursive; font-size:18px;"
                            class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" placeholder="Please input your full name." style="text-align:center; font-family:cursive"
                                class="form-control @error('name') is-invalid @enderror" 
                                name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="username" style="font-family:cursive; font-size:18px;"
                            class="col-md-4 col-form-label text-md-end">{{ __('Username') }}</label>

                            <div class="col-md-6">
                                <input id="username" type="username" placeholder="Make a simple username that you can remember"
                                style="text-align:center"
                                class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username">

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" style="font-family:cursive; font-size:18px;"
                            class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
                            <div class="col-md-6">
                                <input id="email" type="email" placeholder="Use a valid email, eg : example@123.com"
                                style="text-align:center"
                                class="form-control @error('email') is-invalid @enderror" 
                                name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="password" style="font-family:cursive; font-size:18px;"
                            class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" placeholder="Please use stronger password with symbol characters"
                                style="text-align:center;"
                                class="form-control @error('password') is-invalid @enderror" 
                                name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" style="font-family:cursive; font-size:18px;"
                            class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" placeholder="Please retype your password"
                                style="text-align:center;"
                                class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <hr/>
                        <div style="display:flex; justify-content:center">
                            <button style="width:50%; background-color:#3982c3; color:white; font-size:18px; font-family:cursive; width:50%;" 
                                class="btn" type="submit">
                                    {{ __('Register') }}
                            </button>
                        </div>
                        <br>
                        <div style="display:flex; justify-content:center">
                            <b style="font-family:cursive; font-size:15px; text-align:center">Or</b>
                        </div>
                        <br>
                        <div style="display:flex; justify-content:center">
                            <a href="/login" style="background-color:#3982c3; color:white; font-size:18px; font-family:cursive; width:50%;" 
                                class="btn">
                                {{ __('Login') }}
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
