<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>G_AS</title>

        <!-- Fonts -->
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <link href="{{ asset('iconfont/material-icons.css') }}" rel="stylesheet">
        <link href="{{ asset('css/materialize.min.css') }}" rel="stylesheet">
        


        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 10vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 35px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
        





    </head>
    <body class="bg-light">

           <div class="flex-center position-ref full-height">
            <div class="col-12">@include('layouts/app')</div>

            </div>
            <div class="row">

                <div class="col">
                    <div class="card text-white bg-primary mb-5 h-20" style="max-width: 19rem;">
                        @include('layouts/partials/menu')

                </div>
                </div>
               

                    
  
  
  

  <div class="col-9">

    <div class="card w-100 p-3" style="width: 48rem;">
                 <img src="img/image16.jpg" class="card-img-top" alt="...">
    </div>
  </div>

            </div>

        <link rel="stylesheet" type="text/css" href="bootstrap/js/bootstrap.min.js">
    </body>
</html>

