@extends('layouts.app')

@section('content')
<style>
     .container {
         width: 75vw;
         height: 70vh;
         background: #ffffff;
         display: flex;
         flex-direction: row;
         justify-content: center;
         align-items: center
     }
     .box {
         width: 300px;
         height: 300px;
         background: #fff;
     }
     body {
        margin: 150px;
        background-image: url("img/fundo.jpg"); 
 }
 </style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <br>
            <center>
                <div class="card-header"><h2> Faça seu Login </h2></div>
            </center>

<div class="container">
                <div class="row" >
    <form  class="col s12" method="POST" action="{{ route('login') }}">
    @csrf

      <div class="row">
    
        <div class="input-field col s12">
          <i class="material-icons prefix">email</i>
          
          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
          <label for="icon_telephone">Email</label>
          @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
        </div>

        <div class="input-field col s12">
          <i class="material-icons prefix">lock</i>
          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
          <label for="icon_telephone">Senha</label>
          @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
      </div>


      <br><br>
      <center>
      <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
     </center>
    </form>
  </div>


@endsection
