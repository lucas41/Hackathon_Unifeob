@extends('layouts.app')

@section('content')


<body class="yellow darken-3"> 
           <a href="#" data-target="slide-out" class="sidenav-trigger "><i class="medium material-icons yellow darken-3">menu</i></a>   

           
         

<ul id="slide-out" class="sidenav">
     
  <li><div class="user-view">
    <div class="background">
      <img src="img/carina.jpg">
    </div>
    <a href="#user"><img class="circle" src="img/lucas.jpg"></a>
    <a href="#name"><span class="white-text name">{{ Auth::user()->name }}</span></a>
    <a href="#email"><span class="white-text email">{{ Auth::user()->email }}</span></a>
  </div></li>
  <li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
  <li><a href="#!">Second Link</a></li>
  <li><div class="divider"></div></li>
  <li><a class="subheader">Subheader</a></li>
  <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>


<br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br>



&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn-floating btn-large waves-effect waves-light red" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                       <i class="material-icons">cancel</i> {{ __('Logout') }}
                                    </a> <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                    
</ul>



               

                                   
                                
                               

                            
                   
                </div>
            </div>
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
 
</div>
</div>
</div>
<div>
<a class="btn-floating btn-large waves-effect waves-light red" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                       <i class="material-icons">cancel</i> {{ __('Logout') }}
                                    </a> <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
<div>
@endsection
