<link href="{{ asset('css/materialize.min.css') }}" rel="stylesheet">
<link href="{{ asset('iconfont/material-icons.css') }}" rel="stylesheet">

<script src="{{ asset('js/materialize.min.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
<div class="row">
  
<header>
    <ul id="slide-out" class="sidenav sidenav-fixed blue darken-3">
        @guest
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/accueil') }}">{{ __('Login') }}</a>
        </li>
        @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
        @endif
        @else
            <br>
            <li>
                <a href="#user" class="white-text">
                    <i class="material-icons large white-text">account_circle</i><br>
                  <p>BIENVENU:  {{ Auth::user()->name }}</p>
                </a>
            </li>
            <br><br>
            <li><div class="divider"></div></li>
            <li><a href="#" class="white-text"><i class="material-icons white-text">home</i>Accueil</a></li>
            <li><a class="waves-effect white-text" href="#"><i class="material-icons white-text">archive</i>Archives</a></li>
            <div class="divider"></div>
        <div>
            <br>
            <!-- Dropdown Trigger -->
            
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
        @endguest
        
    </ul>
</header>
<link href="{{ asset('css/materialize.min.css') }}" rel="stylesheet">
<link href="{{ asset('iconfont/material-icons.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="{{ asset('js/materialize.min.js') }}" defer></script>

<div class="card w-75">
  <div class="card-body">
    <div class="container">
<table class="striped">
        <thead class="blue">
          <tr>
              <th>Name</th>
              <th>Item Name</th>
              <th>Item Price</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Alvin</td>
            <td>Eclair</td>
            <td>$0.87</td>
          </tr>
          <tr>
            <td>Alan</td>
            <td>Jellybean</td>
            <td>$3.76</td>
          </tr>
          <tr>
            <td>Jonathan</td>
            <td>Lollipop</td>
            <td>$7.00</td>
          </tr>
          <tr>
            <td>Jonathan</td>
            <td>Lollipop</td>
            <td>$7.00</td>
          </tr>
          <tr>
            <td>Jonathan</td>
            <td>Lollipop</td>
            <td>$7.00</td>
          </tr>
        </tbody>
      </table>
      <div class="row">
        <div class="cols3 right">
          <a class="btn-floating btn-large waves-effect waves-light blue pulse"  href="/visiteur"><i class="material-icons">add</i></a>
         
        </div>
        <div class="cols3 left">
         <a class="blue pulse" href="/scanner"><i class="fa fa-barcode" style="font-size:55px"></i></a>
        </div>
        
      </div>
</div>
  </div>
</div>

</div>