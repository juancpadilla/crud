<!DOCTYPE html>
<html >
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ejercicio</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="css\bootstrap.min.css">
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

        </style>
    </head>
    <body>
   
      <header class="masthead mb-auto">
        <div class="inner">
          
          <nav class="nav nav-masthead justify-content-center">
              @yield('menu')
            
            
            
          </nav>
        </div>
      </header>
      <div class="container my-4" style=" padding-top:-50px " >

<h1>C.R.U.D</h1>
      
      <br>
      <br>
        @yield('seccion')
        </div>

        <footer class=" footer border-dark ">esta es la plantilla</footer>
    </body>
</html>
