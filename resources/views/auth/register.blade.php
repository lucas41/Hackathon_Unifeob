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
        background-image: url("https://kanto.legiaodosherois.com.br/w760-h398-gnw-cfill-q80/wp-content/uploads/2019/03/legiao_zTBhdxM_Iti2oaEOFU0Rbum7KJnN8AfZHlrCQV9vps.jpg.jpeg"); 
 }
 </style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <br>
            <center>
                <div class="card-header"><h2> Faça seu cadastro </h2></div>
            </center>
<div class="container">
                <div class="row" >
    <form  class="col s12" method="POST" action="{{ route('register') }}">
    @csrf

      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
          <label for="icon_prefix">Seu nome</label>
          @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">email</i>
          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
          <label for="icon_telephone">Email</label>
          @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
        </div>

        <div class="input-field col s6 offset-s3">
          <i class="material-icons prefix">lock</i>
          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
          <label for="icon_telephone">Senha</label>
          @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
      </div>

      <div class="input-field col s6 offset-s3">
          <i class="material-icons prefix">lock</i>
          <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
          <label for="icon_telephone">Confirme a sua senha</label>

      </div>
      <br><br>
      <center>
      <div class="input-field col s6 offset-s3">
        <button type="submit" class="btn btn-primary">
                                    {{ __('Cadastro') }}
        </button>
     </div>
     </center>
    </form>
  </div>


@endsection
