@extends('layouts.app')
<div class="container">
    <h1 class="form-heading"></h1>
    <div class="login-form">
    <div class="main-div">
        <div class="panel">
       <h2>Register</h2>
       <p>Mohon register terlebih dahulu</p>
       </div>
        <form  method="POST" action="{{ route('register') }}">
    
            <div class="form-group">
                @csrf
            <div class="col-md-12">
                <input id="name" type="text" class="form-control  @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nama">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>
            </div>
    
            <div class="form-group">
                 <div class="col-md-12">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email Address">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
            </div>
                
                <div class="form-group">
                    <div class="col-md-12">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Password Confirm">            
                    </div><br>
                    <button type="submit" class="btn btn-info" value="Register">register</button>
                
                
                
                
                
                
                
                
                
                
                <br>
        </form>
       
        </div>
    </div></div></div>