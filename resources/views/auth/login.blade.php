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
                                        Show
                                    </button>
                                </div>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        <hr/>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div>
                                    <input class="form-check-input" style="margin-top:0.4em; border-color:black" 
                                    type="checkbox" name="remember" 
                                    id="remember" {{ old('remember') ? 'checked' : '' }}/>
                                    <label class="form-check-label" for="remember">
                                        <a style="font-size:18px; font-family:cursive;"> {{ __(' <- Remember Me') }}</a>
                                    </label>
                                </div>
                                <br>
                                <div>
                                    @if (Route::has('password.request'))
                                        <a style="font-size:18px; font-family:cursive;" 
                                        href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                                <br>
                                <br>
                                <div>
                                    <button style="background-color:#3982c3; color:white; font-size:18px; font-family:cursive; width:50%;" 
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
                                        passwordInput.type = "text";                                            showPasswordToggle.textContent = "Hide";
                                    } else {
                                        passwordInput.type = "password";
                                        showPasswordToggle.textContent = "Show";
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
