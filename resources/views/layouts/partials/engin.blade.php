

    <!-- Fonts -->
    <script src="{{ asset('js/bootscript.js') }}" defer></script>

    <!-- Styles -->


    <!-- Button trigger modal -->
<button type="button" class="btn btn-light" data-toggle="modal" data-target="#exampleModal">
  enregistrer un engin
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <!--insertion du formulaire engin-->

<div class="container">

    <div class="row justify-content-center">
        <div class="#">
            <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                

                <div class="card-body">
                    <form method="POST" action="{{url('visiteur')}}">
                       @csrf
                        {{ csrf_field() }}

                        <div class="form-group row">
                            <label for="nom" class="col-md-4 col-form-label text-md-right">{{ __('IMATRICULATION') }}</label>

                            <div class="col-md-6">
                                <input id="imatricule"  name="imatricule" type="text">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="prenom" class="col-md-4 col-form-label text-md-right">{{ __('MARQUE') }}</label>

                            <div class="col-md-6">
                                <input id="marque" name="marque" type="text">

                            </div>
                       
                         </div>

                        <div class="form-group row">
                            <label for="numero" class="col-md-4 col-form-label text-md-right">{{ __('COULEUR') }}</label>

                            <div class="col-md-6">
                                <input id="couleur" type="text" name="couleur">
                            </div>
                        </div>

                        <div class="col ">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('ENREGISTRER') }}
                                </button>
                        
                         <button type="button" class="btn btn-secondary " data-dismiss="modal">Close</button>
                                    

                            </div>


                            
                       
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

      </div>
      <!--div class="modal-footer">
        <button type="button" class="btn btn-secondary " data-dismiss="modal">Close</button>
        <div class="col-md-4">
                  <button type="button" class="btn btn-primary ">Save changes</button>
  
        </div>
      </div-->
    </div>
  </div>
</div>


