<link href="{{ asset('css/app.css') }}" rel="stylesheet">


<script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
<body>
<div class="container">
     <div class="col">
                  <div class="card" style="width: 18rem;">
  
                    @include('layouts/partials/menu')
                  </div>
              </div>

<div class="card bg-info border-0 shadow-lg p-0 mb-5 rounded">
  <div class="card-body">
    <h1 class="font-weight-bold text-dark text-center">AJOUT D'UN <span class="badge ">PARTENAIRE</span>
     <div class=" text-md-right ">
            <a class="btn btn-primary col-md-1" href="/home" role="button">Home</a>            
        </div></h1>
  </div>
</div>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                <div class="card-header"><h2 class="text-center">INFOS PARTENAIRE</h2></div>

                <div class="card-body">
                    <form method="POST" action="{{url('Engin')}}">
                       @csrf
                        {{ csrf_field() }}

                        <div class="form-group row">
                            <label for="nom" class="col-md-4 col-form-label text-md-right">{{ __('CNIB') }}</label>

                            <div class="col-md-6">
                                <input id="immatricule"  name="immatricule" type="text">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="prenom" class="col-md-4 col-form-label text-md-right">{{ __('NOM') }}</label>

                            <div class="col-md-6">
                                <input id="marque" name="marque" type="text">

                            </div>
                       
                         </div>

                        <div class="form-group row">
                            <label for="numero" class="col-md-4 col-form-label text-md-right">{{ __('PRENOM') }}</label>

                            <div class="col-md-6">
                                <input id="couleur" type="text" name="couleur">
                            </div>
                        </div>

                        <div class="col-md-8 offset-md-3 ">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('ENREGISTRER') }}
                                </button>
                         
                         <button type="reset" class="btn btn-danger offset-md-2">
                                    {{ __('ANNULER') }}
                                </button>
                                     
                            </div>

                            
                       
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>