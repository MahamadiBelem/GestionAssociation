<link href="{{ asset('css/app.css') }}" rel="stylesheet">


<script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <script src="{{ asset('js/materialize.min.js') }}" defer></script>
    <script src="{{ asset('js/monscript.js') }}" defer></script>
    

    <!-- Styles -->
    <head>
        <script type="text/javascript" language="javascript" src="js/jquery-3.3.1.min.js"></script>
    </head>
<body>

    <div class="row">
        
            <div class="col">
                  <div class="card" style="width: 18rem;">
  
                    @include('layouts/partials/menu')
                  </div>
              </div>


    <div class="col-9">
<div class="container">
<div class="card blue border-0 shadow-lg p-0 mb-5 rounded">
  <div class="card-body">
    <h1 class="font-weight-bold text-dark text-center">AJOUT D'UN MILITANT</h1>
        <div class=" text-md-right ">
            <a class="btn btn-primary col-md-1" href="/home" role="button">Home</a>            
        </div>
        </h1>
  </div>
</div>

    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                <div class="card-header blue"><h2 class="text-center">INFOS MILITANT</h2></div>

                <div class="card-body">
                    <form method="POST" action="{{url('visiteur')}}">
                       @csrf
                        {{ csrf_field() }}

                        <div class="form-group row">
                            <label for="nom" class="col-md-4 col-form-label text-md-right">{{ __('NOM') }}</label>

                            <div class="col-md-6">
                                <input  name="nom" class="@error('nom') is-invalid @enderror" type="text" id="nom">
                                @error('nom')
                                    <span class="invalid-feedback" role="alert" id="missDate">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <span id="missNom" class="error-message"></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="prenom" class="col-md-4 col-form-label text-md-right">{{ __('PRENOM') }}</label>

                            <div class="col-md-6">
                                <input id="prenom" class="@error('prenom') is-invalid @enderror" name="prenom" type="text">
                                @error('prenom')
                                    <span class="invalid-feedback" role="alert" id="missDate">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>                       
                         </div>

                        <div class="form-group row">
                            <label for="sexe" class="col-md-4 col-form-label text-md-right">{{ __('SEXE') }}</label>
                            <div class="col-md-1 text-md-right">
                                <p>
                                  <label >
                                    <input name="sexe" value="F" type="radio" id="F">
                                    <span>F</span>
                                  </label>
                                </p>
    
                            </div>
                        <div class="col-md-2 text-md-right">
                             <p>
                              <label >
                                <input name="sexe" value="M" id="M" type="radio">
                                <span>M</span>
                              </label>
                            </p>
                        </div>
                        </div>


                        <div class="form-group row">
                            <label for="numero" class="col-md-4 col-form-label text-md-right">{{ __('N CNIB') }}</label>

                            <div class="col-md-6">
                                <input id="numero" class="@error('numero') is-invalid @enderror" type="text" name="numero_cnib">
                                @error('numero')
                                    <span class="invalid-feedback" role="alert" id="missDate">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        
                        <div class="form-group row">
                            <label for="date1" class="col-md-4 col-form-label text-md-right">{{ __('DATE DE NAISSANCE') }}</label>

                            <div class="col-md-6">
                                <input id="date1" class="@error('date1') is-invalid @enderror" name="date1" type="date">
                                @error('date1')
                                    <span class="invalid-feedback" role="alert" id="missDate">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                       
                         </div>   

                         <div class="form-group row">
                            <label for="lieu1" class="col-md-4 col-form-label text-md-right">{{ __('LIEU DE NAISSANCE') }}</label>

                            <div class="col-md-6">
                                <input id="lieu1" class="@error('lieu1') is-invalid @enderror" name="lieu1" type="text">
                                @error('lieu1')
                                    <span class="invalid-feedback" role="alert" id="missDate">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                       
                         </div>    

                         <div class="form-group row">
                            <label for="section" class="col-md-4 col-form-label text-md-right">{{ __('SECTION') }}</label>

                            <div class="col-md-6">
                                <input id="section" class="@error('section') is-invalid @enderror" name="section" type="text">
                                @error('section')
                                    <span class="invalid-feedback" role="alert" id="missDate">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                       
                         </div> 

                        
                        <div class="form-group row">
                            <label for="cg" class="col-md-4 col-form-label text-md-right">{{ __('CONSEIL GENERAL') }}</label>

                            <div class="col-md-6">
                                <input id="cg" class="@error('cg') is-invalid @enderror" name="cg" type="text">
                                @error('cg')
                                    <span class="invalid-feedback" role="alert" id="missDate">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>                       
                         </div>

                         <div class="form-group row">
                            <label for="niveau1" class="col-md-4 col-form-label text-md-right">{{ __('NIVEAU RELIGIEUX') }}</label>

                            <div class="col-md-6">
                                <input id="niveau1" class="@error('niveau1') is-invalid @enderror" name="niveau1" type="text">
                                @error('niveau1')
                                    <span class="invalid-feedback" role="alert" id="missDate">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>                       
                         </div>

                         <div class="form-group row">
                            <label for="niveau2" class="col-md-4 col-form-label text-md-right">{{ __('NIVEAU ACADEMIQUE') }}</label>

                            <div class="col-md-6">
                                <input id="niveau2" class="@error('niveau2') is-invalid @enderror" name="niveau2" type="text">
                                @error('niveau2')
                                    <span class="invalid-feedback" role="alert" id="missDate">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>                       
                         </div>

                         <div class="form-group row"> 
                            <label for="poste" class="col-md-4 col-form-label text-md-right">{{ __('NIVEAU RELIGIEUX') }}</label>

                            <div class="col-md-6">
                                <input id="poste" class="@error('poste') is-invalid @enderror" name="poste" type="text">
                                @error('poste')
                                    <span class="invalid-feedback" role="alert" id="missDate">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>                       
                         </div>

                         <div class="form-group row"> 
                            <label for="annee2" class="col-md-4 col-form-label text-md-right">{{ __('ANNEE OCCUPATION POSTE') }}</label>

                            <div class="col-md-6">
                                <input id="annee2" class="@error('annee2') is-invalid @enderror" name="annee2" type="text">
                                @error('annee2')
                                    <span class="invalid-feedback" role="alert" id="missDate">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>                       
                         </div>

                         <div class="form-group row"> 
                            <label for="annee3" class="col-md-4 col-form-label text-md-right">{{ __('ANNEE ADHESION') }}</label>

                            <div class="col-md-6">
                                <input id="annee3" class="@error('annee3') is-invalid @enderror" name="annee3" type="text">
                                @error('annee3')
                                    <span class="invalid-feedback" role="alert" id="missDate">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>                       
                         </div>

                          <div class="form-group row"> 
                            <label for="annee3" class="col-md-4 col-form-label text-md-right">{{ __('NUMERO TELEPHONE1') }}</label>

                            <div class="col-md-6">
                                <input id="annee3" class="@error('annee3') is-invalid @enderror" name="annee3" type="text">
                                @error('annee3')
                                    <span class="invalid-feedback" role="alert" id="missDate">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>                       
                         </div>

                         <div class="form-group row"> 
                            <label for="annee3" class="col-md-4 col-form-label text-md-right">{{ __('NUMERO TELEPHONE2') }}</label>

                            <div class="col-md-6">
                                <input id="annee3" class="@error('annee3') is-invalid @enderror" name="annee3" type="text">
                                @error('annee3')
                                    <span class="invalid-feedback" role="alert" id="missDate">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>                       
                         </div>
                          <!--  -->















                         <!--

                        <div class="form-group row">
                            <label for="date" class=" col-md-4 col-form-label text-md-right">{{ __('DELIVRE LE') }}</label>

                            <div class="col-md-6">
                                <input id="date" type="date" name="date_d" class="@error('date') is-invalid @enderror">
                                @error('date')
                                    <span class="invalid-feedback" role="alert" id="missDate">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                @php

                               
                                    function valide(){
    $dte=  new Carbon(request('date_d'));
if($dte==null)
{
   $dte=Carbon::create(0,0,0)->addYears(10);
   $date_d=$dte;
$now= new Carbon();
    //$date=$date_d;
    if ($date_d<$now) {
        dd('invalide');
        //return Redirect::to('visiteur');
    }
    else
    {
        //dd('valide');
        //return view('pages.visiteur');
        //dd($date_d);
    }
}
else{$dte->addYears(10);

$date_d=$dte;
$now= new Carbon();
    //$date=$date_d;
    if ($date_d<$now) {
      //return view('pages.visiteur');
        //dd('invalide');
    }
    else
    {
        //dd('valide');
        //return view('pages.visiteur');
        //dd($date_d);
    }
  }
    }

                                @endphp

                            </div>

                            


                        </div>
 -->

                        <div class="form-group row">
                            <label for="numero" class="col-md-4 col-form-label text-md-right">{{ __('PERSONNE A PREVENIR') }}</label>

                            <div class="col-md-4">
                                <input id="" type="text" name="nom_pers" placeholder="nom personne">
                            </div>
                            <div class="col-md-3">
                                <input id="" type="text" name="prenom_pers" placeholder="prenom personne">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="numero_pers" class="col-md-4 col-form-label text-md-right">{{ __('TELEPHONE') }}</label>

                            <div class="col-md-6">
                                <input id="telephone" type="int" name="telephone" placeholder="telephone_pers"> </div>
                        </div>

                        

                        <!--div class="form-group row">
                            <label for="service" class="col-md-4 col-form-label text-md-right">{{ __('SERVICE DE VISITE') }}</label>
                            <div class="input-field col s6">
                                <select multiple name="service">
                                  <option value="" disabled selected>choisir un service de visite</option>
                                  <option value="FOYER
                                  ">FOYER</option>
                                  <option value="GESTION
                                  ">GESTION</option>
                                  <option value="BUANDERIE
                                  ">BUANDERIE</option>
                                </select>
                            </div>

                            
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">MOTIF DE VISITE</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="motif"></textarea>

                        </div>

  <div class="form-group">
                            <label for="prenom" class="col-md-4">{{ __('AVEZ-VOUS UN ENGIN?') }}</label>


  
                        </div-->

                        <div class="col-md-8 offset-md-4 ">
                                <button  type="submit" class="btn btn-primary" id="ENREGISTRER">
                                    {{ __('ENREGISTRER') }}

                                    <script type="text/javascript">
    $(document).ready(function()){
        $("#ENREGISTRER").click(function(){
            valid=true;
            if($("#nom").val()==""){
                $("#missNom").next('error-message').fadeIn().text("veuiller remplir le champ");
            }
            return valid;
        })
    }
</script>
                                </button>
                         
                                     <a href="#" type="reset" class="btn btn-secondary offset-md-2" role="button" >{{ __('ANNULER') }}</a>

                            </div>

                            
                       
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<script type="text/javascript" src="js/jquery-3.4-1.js"></script>
@include('flashy::message')


</body>
