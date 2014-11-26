<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>

      <script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDE0etdJVs1_khnpSHA3rDwycawjabSAaU&sensor=false">
      </script>

    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <!-- Main jumbotron for a primary marketing message or call to action -->

      <div class="map">
          <div id="map-canvas"></div>
      </div>

      <div class="container">

       <div class="row">


        <div class="col-6 col-sm-4 col-lg-4">
          <p>Aquí ubicamos tu aeropuerto o terminal de transporte, todo depende cómo quieras viajar. Arrastra las imágenes y te lo ubicaremos inmediatamente.</p>
        </div>

        <div class="col-6 col-sm-4 col-lg-4">
          <h1>¿Por cielo
            <br>o
            <br>tierra??
          </h1>

        </div>
          
        <div class="col-6 col-sm-4 col-lg-4">
          <canvas id="droparea"  width="357px" height="293px"></canvas>
          <img id="dropimage" src="img/1.png">
        </div>

      </div>

      <li id="selector">
		
		<ul>
			<p>Arrastra: </p>
		</ul>
		
        <ul>
          <a class="sitio" href="#" id="avion" draggable="true">
            <img id="avionimg" class="sitioimg" src="img/a.png">
          </a>
        </ul>
        <ul>
          <a class="sitio" href="#" id="bus" draggable="true">
            <img id="busimg" class="sitioimg" src="img/b.png">
          </a>
        </ul>
      </li>

    </div> <!-- /container --> 

      <footer>
        <p>Desarrollado por Juan David Flórez</p>
      </footer>

    <link href='http://fonts.googleapis.com/css?family=Holtwood+One+SC' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet' type='text/css'>       

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/vendor/dragdrop.js"></script> 

        <script src="js/main.js"></script>

    </body>
</html>
