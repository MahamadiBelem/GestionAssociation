<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Login2</title>

  <!-- Favicons -->
  <link href="{{ asset('doc2/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('doc2/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <link href="{{ asset('doc2/lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
   <!--external css-->
    <link href="{{ asset('doc2/lib/font-awesome/css/font-awesome.css') }}" rel="stylesheet" />
   <!-- Custom styles for this template   -->
     <link href="{{ asset('doc2/css/style.css') }}" rel="stylesheet">
     <link href="{{ asset('doc2/css/style-responsive.css') }}" rel="stylesheet">
  
  <!-- =======================================================
   This is made by MahamadiBELEM
  ======================================================= -->
</head>

<body>
  <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
  <div id="login-page">
    <div class="container">

      <form class="form-login" method="POST" action="{{ route('login') }}">
        <h2 class="form-login-heading">Se Connecter <i class="fa fa-user"></i> </h2>

        <div class="login-wrap">
          
         <div class="form-group row">
         <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>
                      <i class="fa fa-user"></i>
                      <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



          <div class="form-group row">
                          <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                           <i class="fa fa-key"></i>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>






          <!--input type="password" class="form-control" placeholder="Mot de Passe"> <i class="fa fa-key"></i>
          <label class="checkbox"-->

            <input type="checkbox" value="remember-me"> memoriser
            <span class="pull-right">

            <a data-toggle="modal" href="login.html#myModal"> Mot de passe oublié</a>
            </span>
            </label>
			
          <!--button class="btn btn-theme btn-block" href="index.html" type="submit"><i class="fa fa-send"></i> Envoyer</button-->
          <hr>
          <div class="login-social-link centered">
            
            
          </div>
		  
		  

        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button class="btn btn-theme btn-block" href="index.html" type="submit"><i class="fa fa-send"></i>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>




          <div class="registration">
            Vous  ne disposez pas de compte maintenant?<br/>
            <a class="" href="register2.blade.php">
              Creer un compte
              </a>
          </div>
        </div>
		
        <!-- Modal -->
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">

          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Forgot Password ?</h4>
              </div>
              <div class="modal-body">
                <p>Enter your e-mail address below to reset your password.</p>
                <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
              </div>
              <div class="modal-footer">
                <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                <button class="btn btn-theme" type="button">Submit</button>
              </div>
            </div>
          </div>
        </div>
        <!-- modal -->
      </form>

    </div>
  </div>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="{{ asset('doc2/lib/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('doc2/lib/bootstrap/js/bootstrap.min.js') }}"></script>
  <!--BACKSTRETCH-->
  <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
  <script type="text/javascript" src="{{ asset('doc2/lib/jquery.backstretch.min.js') }}"></script>
  <script>
    $.backstretch("{{ asset('doc2/img/log2.png') }}",{
      speed: 500
    });
  </script>
</body>

</html>
