@extends('layouts.app')
<div class="container">
    <h1 class="form-heading"></h1>
    <div class="login-form">
    <div class="main-div">
        <div class="panel">
            <h2>Risk Test Covid-19</h2>
       <h2>Login</h2>
       <p>Please enter your email and password</p>
       </div>
        <form  method="POST" action="{{ route('login') }}">
    
            <div class="form-group">
                @csrf
                <div class="col-md-12">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email Address">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
            </div>
    
            <div class="form-group">
                <div class="col-md-12">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Passowrd">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div><br>
            <button type="submit" class="btn btn-info">Login</button>
             <!-- Remind Passowrd -->
    <div id="formFooter">
        <a class="underlineHover" href="{{route('register')}}">Register</a>
      </div>

      
        </form>
       
        </div>
    </div></div></div>