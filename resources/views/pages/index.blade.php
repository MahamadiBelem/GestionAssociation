<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  
  <title>CarManagement</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">


<link href="{{ asset('css/materialize.min.css') }}" rel="stylesheet">

 
  
</head>

    <body>
         <div class="container-fluid">
              <div class="row">
                  <div class="col-md-6">
                        <form action="{{Route('cars.create')}}" method="post">
                          @csrf
                              <div class="row form-group">
                                    <div class="col-md-12">
                                        <label form> marque: </label>
                                        <input type="text" name="marque" class="form-control" required>
                                    </div>
                              </div>
                              <div class="row form-group">
                                    <div class="col-md-12">
                                        <label form> modele: </label>
                                        <input type="text" name="modele" class="form-control" required>
                                    </div>
                              </div>
                              <div class="row form-group">
                                    <div class="col-md-12">                                       
                                      <button type="submit" class="btn btn-success w-50 float right"> create</button>
                                    </div>
                              </div>
                        </form>
                  </div>
                             

                  <div class="col-md-6">
                      <table class="table table-stiped table-over">
                            <tr>
                              <th>Marque</th>
                              <th>Modele</th>
                            <tr>
                      </table>
                  </div>
         </div>
    </body>
</html>
