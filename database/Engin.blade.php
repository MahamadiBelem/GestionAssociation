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

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                <div class="card-header"><h2 class="text-center">INFOS VISITEUR</h2></div>

                <div class="card-body">
                    <form method="POST" action="{{url('visiteur')}}">
                       @csrf
                        {{ csrf_field() }}

                        <div class="form-group row">
                            <label for="nom" class="col-md-4 col-form-label text-md-right">{{ __('IMATRICULATION') }}</label>

                            <div class="col-md-6">
                                <input  name="nom" type="text">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="prenom" class="col-md-4 col-form-label text-md-right">{{ __('MARQUE') }}</label>

                            <div class="col-md-6">
                                <input id="prenom" name="prenom" type="text">

                            </div>
                       
                         </div>

                       


                        <div class="form-group row">
                            <label for="numero" class="col-md-4 col-form-label text-md-right">{{ __('COULEUR') }}</label>

                            <div class="col-md-6">
                                <input id="numero" type="text" name="numero_cnib">
                            </div>
                        </div>

                        <div class="col-md-8 offset-md-4 ">
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

</body>