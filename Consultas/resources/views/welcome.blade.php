

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


    </head>
    <body>
       <div align="center">@yield("mapagoogle")</div> 
       <div align="center">@yield("registrar")</div>
       <div align="center">@yield("contactar")</div>

        <!-- Sidebar -->
            <div id="sidebar">

                <!-- Logo -->
                    <h1><a href="Inicio"><img src="logo.jpg"></img></a></h1>

                <!-- Nav Barra -->
                    <nav id="nav">
                        <ul>
                            <li><a href="Inicio">Inicio</a></li>
                            <li><a href="catalogo">Catalogo</a></li>
                            <li><a href="productos">Productos</a></li>
                            <li><a href="Ubicacion">Ubicacion</a></li>
                            <li><a href="contacto">Contacto</a></li>
                            <li><a href="Registro">Registrar</a></li>
                        </ul>
                    </nav>
                    <section class="box search">
                        <form method="post" action="#">
                            <input type="text" class="text" name="search" placeholder="Buscar" />
                        </form>
                    </section>

                    <ul id="copyright">
                        <li>&copy; Alumnos Tec.</li>
                    </ul>

            </div>

            <script src="assets/js/jquery.min.js"></script>
            <script src="assets/js/skel.min.js"></script>
            <script src="assets/js/util.js"></script>
            <script src="assets/js/main.js"></script>

    </body>
</html>