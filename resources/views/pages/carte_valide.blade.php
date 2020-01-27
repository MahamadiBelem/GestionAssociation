<form method="POST" action="{{ route('val') }}">
	@csrf
						<div class="form-group row">
                            <label for="DATE" class="col-md-4 col-form-label text-md-right">{{ __('DATE DE DELIVRANCE') }}</label>

                            <div class="col-md-6">
                                <input id="" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            </div>
                            @if()
                        </div>
                        <div class="col-md-8 offset-md-4 right">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('ENREGISTRER') }}
                                </button>

                                
                         </div>
</form>
						