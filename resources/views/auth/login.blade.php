@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="text-align:center; font-family:cursive;">{{ __('Login') }}</div>
                
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row mb-3">
                            <label for="email" style="font-size: 16px; font-family:cursive;" 
                            class="col-md-4 col-form-label text-md-end" 
                            required>{{ __('Email Address or Username') }}</label>
                            <div class="col-md-6">
                                <input id="username" style="text-align:center; font-family:cursive" placeholder="Eg : example@123.com or example123" type="username" class="form-control 
                                @error('username') is-invalid @enderror
                                @error('email') is-invalid @enderror"
                                name="username" 
                                value="{{ old('username') }}" required autocomplete="username" autofocus>
                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="password" style="font-size:16px; font-family:cursive;" 
                            class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input placeholder="*******" style="text-align:center; 
                                    font-family:cursive;" id="password" type="password"
                                        class="form-control2 @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">
                                    <button type="button" style="font-family:cursive;" id="show-password-toggle" 
                                    class="btn btn-outline-secondary">
                                        Show Password
                                    </button>
                                </div>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        <hr style="margin-bottom: 3em;"/>
                        </div>
                        <div class="row mb-3">
                            <div style="width:100%" class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" style="border-color: blue; border-style: solid; border-width: thin;" 
                                        type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}/>
                                    <label class="form-check-label" for="remember">
                                        <a style="margin:right:10em; font-size: 15px; font-family: cursive;"> {{ __('Remember Me') }}</a>
                                    </label>
                                    <a style="margin-left:1em; margin-right:1em;"> | </a>
                                    <a style="font-size: 15px; font-family: cursive;">Don't have an account yet? 
                                        @if (Route::has('register'))
                                            <a style="font-size: 15px; font-family: cursive;" href="{{ route('register') }}">
                                                {{ __('Register') }}
                                            </a>
                                            <span style="font-size: 15px; font-family: cursive;">here.</span>
                                        @endif
                                    </a>
                                    <a style="margin-left:1em; margin-right:1em;"> | </a>
                                    @if (Route::has('password.request'))
                                        <a style="font-size: 15px; font-family: cursive;" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                                <br>
                                <br>
                                <div>
                                    <button style="background-color:#3982c3; color:white; display:flex; justify-content:center;
                                    font-size:18px; font-family:cursive; width:50%;" 
                                    class="btn btn-outline-secondary" type="submit">
                                        {{ __('Login') }}
                                    </button>
                                </div>
                            </div>
                        </div>


                        <style>
                            #show-password-toggle {
                                color: #333; /* Change this color to the desired color */
                            }
                        </style>
                        <script>
                            document.addEventListener("DOMContentLoaded", function() {
                                const passwordInput = document.getElementById("password");
                                const showPasswordToggle = document.getElementById("show-password-toggle");
                                    
                                showPasswordToggle.addEventListener("click", function() {
                                    if (passwordInput.type === "password") {
                                        passwordInput.type = "text";
                                        showPasswordToggle.textContent = "Hide Password";
                                    } else {
                                        passwordInput.type = "password";
                                        showPasswordToggle.textContent = "Show Password";
                                    }
                                });
                            });
                        </script>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
