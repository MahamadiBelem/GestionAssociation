 <link href="{{ asset('css/materialize.min.css') }}" rel="stylesheet">

<link href="{{ asset('css/acc.css') }}" rel="stylesheet">   

<link href="{{ asset('iconfont/material-icons.css') }}" rel="stylesheet">
<link href="{{ asset('icofont/icofont.css') }}" rel="stylesheet">
<link href="{{ asset('icofont/icofont.min.css') }}" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="{{ asset('js/materialize.min.js') }}" defer></script> <!--  -->

 <!--Bootstrap core CSS 
  <link href="{{asset('doc2/lib/bootstrap/css/bootstrap.min.css}')}}" rel="stylesheet">
  <!--external css 
  <link href="{{asset('doc2/lib/font-awesome/css/font-awesome.css') }}" rel="stylesheet" />
  <link rel="{{asset('doc2/stylesheet" type="text/css') }}" href="{{asset('doc2/css/zabuto_calendar.css')}}">
  <link rel="{{asset('doc2/stylesheet" type="text/css') }}" href="{{asset('doc2/lib/gritter/css/jquery.gritter.css')}}" />
  <!-- Custom styles for this template 
  <link href="{{asset('doc2/css/style.css') }}" rel="stylesheet">
  <link href="{{asset('doc2/css/style-responsive.cs')}}" rel="stylesheet">
  <script src="{{asset('doc2/lib/chart-master/Chart.js') }}"></script> -->
  

<header>
    <ul id="slide-out" class="sidenav sidenav-fixed green darken-2">
                
          @guest
           <div class="row">
          <li class="nav-item">
            <a class=" btn-large " href="login"><i class="material-icons left">account_circle</i>IDENTIFIER VOUS</a>
            
             <!--<img src="img/log2.jpg"  id="logo">
               image of logi is made here-->
          </li>
          </div> 
        <!--   
      <aside>
      <div id="sidebar" class="nav-collapse ">
        <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-desktop"></i>
              <span>ACTIVITE</span>
              </a>
            <ul class="sub">
              <li><a href="general.html">CE</a></li>
              <li><a href="buttons.html">CGK</a></li>
              <li><a href="panels.html">SECTION</a></li>
              <li><a href="font_awesome.html">FEDERER</a></li>
            </ul>
         </li>
          </div>
        </aside>    -->


          <div class="row" class="sub-menu">
          <li class="nav-item">
            <i class="fa fa-desktop"></i>
            <a class="btn btn-primary waves-red large " href="/home"><i class="material-icons left">accessibility</i>ACTIVITE EN COURS</a>
        <!--  <ul class="sub">
              <li><a href="general.html">CE</a></li>
              <li><a href="buttons.html">CGK</a></li>
              <li><a href="panels.html">SECTION</a></li>
              <li><a href="font_awesome.html">FEDERER</a></li>
            </ul>  -->
          </li>
          </div>

          <div class="row">
          <li class="nav-item">
            <a class="btn btn-primary waves-red large " href="/home"><i class="material-icons left">accessibility</i>FAIRE SUGGESTION</a>
          </li>
          </div>

          <div class="row">
          <li class="nav-item">
            <a class="btn btn-primary waves-red large " href="/home"><i class="material-icons left">book</i>CONSULTER DOCUMENT</a>
          </li>
          </div>
          @endguest
          @auth
         
          @if(Auth::user())
            <div class="row">
          <li class="nav-item">
            <a class="btn btn-primary waves-red large " href="/home"><i class="material-icons left">accessibility</i>INSCRIRE DES MILITANTS</a>
          </li>
          </div>
          @endif


            @if(Auth::user())
            <div class="row">
          <li class="nav-item">
            <a class="btn btn-primary waves-effect waves-light large " href="scanner"><i class="material-icons left">list</i>SUIVI MATERIEL DU CG</a>
          </li>
            </div>
        
            @endif

            
            <div class="row">
          <li class="nav-item">
            <a class="btn btn-primary waves-effect waves-light large" href="casuspect"><i class="material-icons left">view_list </i>GERER DES ENCADREURS</a>
          </li>
            </div>
            
            
            <div class="row">
          <li class="nav-item">
            <a class="btn btn-primary waves-effect waves-light large" href="partenaire"><i class="material-icons left">face </i>GERER DES PARTENAIRES</a>
          </li>
            </div>
            <div class="row">
          <li class="nav-item">
            <a class="btn btn-primary waves-effect waves-light large" href="modal"><i class="material-icons left">phone </i>CONTACTER UN SERVICE</a>
          </li>
            </div>

            <div class="row">
          <li class="nav-item">
            <a class="btn btn-primary waves-effect waves-light large" href="modal"><i class="material-icons left">swap_vert </i>EDITER UNE LISTE </a>
          </li>
            </div>

             <div class="row">
          <li class="nav-item">
            <a class="btn btn-primary waves-effect waves-light large" href="modal"><i class="material-icons left">book </i>CONSULTER PROGRAMME </a>
          </li>
            </div>
            @endauth
        </ul>
          </header>