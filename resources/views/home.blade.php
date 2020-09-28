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


<div class="card">
            <br>
            <center>
                <div class="card-header"><h2> Cadastro de Produtos   </h2></div>
            </center>
<br>
<div class="container">
                <div class="row" >
                <section class="jumbotron text-center">
          <form method="POST" action="/home" enctype="multipart/form-data">
            @csrf
            <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s12">
          <input placeholder="nome do produto" name="nome" id="nome" type="text" class="validate">
          <label for="Nome">Nome</label>
        </div>
        </div>
    
      <div class="row">
        <div class="input-field col s12">
          <input id="mensagem" name="mensagem" type="text" class="validate">
          <label for="mensagem">mensagem</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input placeholder="R$" id="valor" name="valor" type="text" class="validate">
          <label for="email">Valor</label>
        </div>
      </div>
      <div class="row">
       
       
      </div>
      <button type="submit" class="btn btn-primary my-2">Enviar</button>
    </form>
    
  </div>


          </form>
        </div>
      </section>
               

                                   
                                
                               

                            
                   
                </div>
            </div>



      

<div>
@endsection
