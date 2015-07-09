

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
        <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
        <link rel="stylesheet" href="assets/css/main.css" />
        <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->

    </head>
    <body>
       <div align="center">@yield("mapagoogle")</div> 

        <!-- Sidebar -->
            <div id="sidebar">

                <!-- Logo -->
                    <h1><a href="#"><img src="logo.jpg"></img></a></h1>

                <!-- Nav -->
                    <nav id="nav">
                        <ul>
                            <li><a href="Inicio">Inicio</a></li>
                            <li><a href="#">Catalogo</a></li>
                            <li><a href="#">Productos</a></li>
                            <li><a href="Ubicacion">Ubicacion</a></li>
                            <li><a href="#">Contacto</a></li>
                            <li><a href="#">Publicaciones</a></li>
                        </ul>
                    </nav>

                <!-- Search -->
                    <section class="box search">
                        <form method="post" action="#">
                            <input type="text" class="text" name="search" placeholder="Search" />
                        </form>
                    </section>

                    <section class="box text-style1">
                        <form action="?login=1" method="post">
                        Usuario: <input type="text" name="username" border="10px solid black" border-color:"black";/>
                        Contraseña: <input type="password" name="password" />
                        <input type="submit" />
                        </form>
                    </section>



                <!-- Copyright -->
                    <ul id="copyright">
                        <li>&copy; Untitled.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
                    </ul>

            </div>

        <!-- Scripts -->
            <script src="assets/js/jquery.min.js"></script>
            <script src="assets/js/skel.min.js"></script>
            <script src="assets/js/util.js"></script>
            <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
            <script src="assets/js/main.js"></script>

    </body>
</html>