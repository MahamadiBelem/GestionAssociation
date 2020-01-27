<link href="{{ asset('css/app.css') }}" rel="stylesheet">

<link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
<script src="{{ asset('js/app.js') }}" defer></script>
<script src="{{ asset('js/jquery-3.3.1.min.js') }}" defer></script>
<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
<body>
<div class="row">
    <div class="col">
                  <div class="card" style="width: 18rem;">
  
                    @include('layouts/partials/menu')
                  </div>
              </div>

<div class="col-9">
<div class="container">

<div class="card bg-info border-0 shadow-lg p-3 mb-5 rounded">
  <div class="card-body">
    <h1 class="font-weight-bold text-dark text-center">AJOUT D'UN VISITEUR
     <div class=" text-md-right ">
            <a class="btn btn-primary col-md-1" href="/home" role="button">
             Home</a>            
        </div></h1>
  </div>
</div>

    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                <div class="card-header"><h2 class="text-center">INFOS VISITEUR</h2></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        

                        <div class="form-group">
    <label for="barcode">SCANNER INFOS</label>
    <input type="text" name="barcode" placeholder="placer le curseur ici avant de scanner">
  </div>

                        

                        <div class="col-md-8 offset-md-4 right">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('ENREGISTRER') }}
                                </button>

                                 <a href="/home" class="btn btn-secondary offset-md-2" role="button" >{{ __('ANNULER') }}</a>
                                
                            </div>

                       
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

</body>