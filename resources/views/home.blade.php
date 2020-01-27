
@extends('layouts.app')

<link href="{{ asset('css/materialize.min.css') }}" rel="stylesheet">
<link href="{{ asset('iconfont/material-icons.css') }}" rel="stylesheet">
<link href="{{ asset('icofont/icofont.css') }}" rel="stylesheet">
<link href="{{ asset('icofont/icofont.min.css') }}" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="{{ asset('js/materialize.min.js') }}" defer></script>

@section('content')

<div class="row">
                <div class="col">
                  <div class="card" style="width: 18rem;">
  
                    @include('layouts/partials/menu')
                  </div>
              </div>
<div class="col-9">
<table class="striped">
        <thead class="blue">
        </thead>
        <tbody>
          <tr>
            <td>BELEM</td>
            <td>FATIM</td>
            <td>$3.76</td>
          </tr>
          <tr>
            <td>BELEM</td>
            <td>Amata</td>
            <td>$7.00</td>
          </tr>
          <tr>
            <td>BELEM</td>
            <td>MAHAMADI</td>
            <td>$7.00</td>
          </tr>
          <tr>
            <td>BELEM</td>
            <td>Annifa</td>
            <td>$7.00</td>
          </tr>
        </tbody>
      </table>
      <div class="row">
        <div class="col-md-10 right">
          <a class="btn-floating btn-large waves-effect waves-light blue pulse"  href="/visiteur"><i class="material-icons">add</i></a>
      </div>
      <div class="cols6 ">
         <a class="blue pulse" href="/scanner"><i class="icofont-barcode" style="font-size:65px"></i></a>
        </div>
    </div>
  </div>
</div>
@endsection





