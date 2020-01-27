<link href="{{ asset('css/app.css') }}" rel="stylesheet">


<script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
<body>
<div class="container">

<div class="card bg-info border-0 shadow-lg p-0 mb-5 rounded">
  <div class="card-body">
    <h1 class="font-weight-bold text-dark text-center">AJOUT D'UN <span class="badge badge-secondary">VISITEUR</span></h1>
  </div>
</div>

@if (Route::has('login'))
                <div class="top-right links shadow-lg p-3 mb-4 bg-white rounded">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('login') }}">Login</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }} ">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                <div class="card-header"><h2 class="text-center">INFOS VISITEUR</h2></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('NOM') }}</label>

                            <div class="col-md-6">
                                <input id="nom" type="text">


                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="prenom" class="col-md-4 col-form-label text-md-right">{{ __('PRENOM') }}</label>

                            <div class="col-md-6">
                                <input id="prenom" type="text">

                                
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="numero" class="col-md-4 col-form-label text-md-right">{{ __('N CNIB') }}</label>

                            <div class="col-md-6">
                                <input id="numero" type="text">

                                
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="date" class="col-md-4 col-form-label text-md-right">{{ __('DELIVRE LE') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="date">

                                
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('TELEPHONE') }}</label>

                            <div class="col-md-6">
                                <input id="telephone" type="int" >

                                
                            </div>
                        </div>

                        

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('SERVICE') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                
                            </div>
                        </div>

                        <div class="form-group">
    <label for="exampleFormControlTextarea1">MOTIF</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>

                        <div class="col-md-8 offset-md-4 ">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('ENREGISTRER') }}
                                </button>
                         
                                     <a href="/tab" class="btn btn-secondary offset-md-2" role="button" >{{ __('ANNULER') }}</a>

                            </div>

                            
                       
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>