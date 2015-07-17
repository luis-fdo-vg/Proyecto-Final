

<!DOCTYPE HTML>
<!--
    Striped by HTML5 UP
    html5up.net | @n33co
    Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
    <head>
        <title>Consumibles Red</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <script src="http://maps.googleapis.com/maps/api/js"></script>
        <link rel="stylesheet" href="assets/css/main.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        

    </head>
    <body>
       <div class="container">
          <div id="main" class="row">
            <div id="content" class="col-md-8">
                <div align="left">@yield("mapagoogle")</div> 
                <div align="left">@yield("registrar")</div>
                <div align="left">@yield("acceder")</div>
                <div align="left">@yield("products")</div>
                <div aling="left">@yield("bienvenido")</div>
                <div aling="left">@yield("publicacion")</div>
            </div>
       
        <!-- Sidebar -->
        <div id="sidebar" class="col-md-4">
            @include('sidebar')
        </div>
            <script src="assets/js/jquery.min.js"></script>
            <script src="assets/js/skel.min.js"></script>
            <script src="assets/js/util.js"></script>
            <script src="assets/js/main.js"></script>
        </div>
        </div>
    </body>
</html>