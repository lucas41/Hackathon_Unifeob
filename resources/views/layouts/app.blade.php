<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
      <!--Import Google Icon Font-->
      <link rel="stylesheet" href="/css/materialize.min.css">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
      <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script>
jQuery(document).ready(function($) { 
    $(".scroll").click(function(event){        
        event.preventDefault();
        $('html,body').animate({scrollTop:$(this.hash).offset().top}, 850);
   });
});
</script>
 

<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    </head>
<body>
    
  <main class="py-4">


            @yield('content')


 </main>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/materialize.min.js"></script>    
    <script type="text/javascript">
     $(document).ready(function(){
     $('.fixed-action-btn').floatingActionButton();
     $(".dropdown-trigger").dropdown();
     $('.sidenav').sidenav();
     $('.slider').slider({
      indicators: false 
     });
     $(document).ready(function(){
    $('.parallax').parallax();
  });
    });
    document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.modal');
    var instances = M.Modal.init(elems);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('.modal').modal();
  });

  
  

    </script>
</body>
</html>
