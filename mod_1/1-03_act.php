<html>
    <head>
    <link rel="icon" href="favicon.ico" type="image/gif">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Módulo 1 | e-mentores</title>
        <link  type="text/css"  href="../css/bootstrap.css" rel="stylesheet">
        <link  type="text/css"  href="../css/bootstrap-grid.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
        <link href="../css/style.css" rel="stylesheet" type="text/css"/>
        <link href="../css/index.css" rel="stylesheet" type="text/css" />

    </head>
    <body>
        <div class="wrapper">


            <!-- Page Content -->

            <div id="content">
                <nav class="navbar navbar-expand-lg navbar-light bg-light d-block">
                    <div class="container-fluid">

                        <div class="nav justify-content-start">

                        </div>

                        <div class="nav justify-content-center">
                            <h1><a class="mx-auto" href="../index.php"><img src="../img/logo-ementores.png" alt="E-mentores"></a></h1>
                        </div>

                        <div class="nav justify-content-end">
                            <button type="button" id="sidebarCollapse" class="btn" >
                                <span class="navbar-toggler-icon"></span>
                            </button>
                        </div>
                    </div>
                </nav>
                <section class="container">
                    <div class="main">
                        <p>Vea a cada una de estas personas menores de edad describir una oportunidad
                            que ofrecen las TIC y un desafío relacionado con ella.</p>
                        <div id="act_01" class="mod">
                            <div class="cont row">
                                <div class="col-3">
                                    <a href="1-03_act/1-03_act_01.php"><img src="../img/mod1/1-03_act_personaje1.png" alt="" class="img-fluid"/></a>
                                </div>
                                <div class="col-3">
                                    <a href="1-03_act/1-03_act_02.php"><img src="../img/mod1/1-03_act_personaje2.png" alt="" class="img-fluid"/></a>
                                </div>
                                <div class="col-3">
                                    <a href="1-03_act/1-03_act_03.php"><img src="../img/mod1/1-03_act_personaje3.png" alt="" class="img-fluid"/></a>
                                </div>
                                <div class="col-3">
                                    <a href="1-03_act/1-03_act_04.php"><img src="../img/mod1/1-03_act_personaje4.png" alt="" class="img-fluid"/></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <?php require '../footer.php'; ?>
            </div>
            <nav id="sidebar" class="active">
                <div class="sidebar-header">
                    <h3>Menu</h3>
                </div>

                <ul class="list-unstyled components">
                    <!-- <p>Dummy Heading</p> -->
                    <!-- <li class="active">
                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Home</a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">
                            <li>
                                <a href="#">Home 1</a>
                            </li>
                            <li>
                                <a href="#">Home 2</a>
                            </li>
                            <li>
                                <a href="#">Home 3</a>
                            </li>
                        </ul>
                    </li> -->
                    <li>
                        <a href="#" class="nav-sobre">Sobre el proyecto</a>
                    </li>
                    <li>
                        <a href="#" class="nav-recursos">Recursos relacionados</a>
                    </li>
                    <li>
                        <a href="../0-02_login.php" class="nav-iniciar">Iniciar sesión</a>
                    </li>
                </ul>

            </nav>
        </div>
        <!-- modal -->
        <div class="modal" id="modal_1-03init" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                            <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> -->

                    </div>
                    <div class="modal-body init-03">
                        <p>Las TIC ofrecen una gran oportunidad para comunicarse, aprender, entretenerse, trabajar y estudiar. Pero estas ventajas conllevan algunos desafíos que es esencial conocer.</p>
                        <button type="button" class="close " data-dismiss="modal" aria-label="Close"><span class="init-act">Iniciar</span></button>
                    </div>
                    <!-- <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div> -->
                </div>
            </div>
        </div>



        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="../js/bootstrap.bundle.js" type="text/javascript"></script>
        <script src="../js/bootstrap.js" type="text/javascript"></script>
        <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>

        <script type="text/javascript" src="js/map/jquery.imagemapster.js"></script>
        <script type="text/javascript" src="js/map/when.js"></script>
        <script type="text/javascript" src="js/map/core.js"></script>
        <script type="text/javascript" src="js/map/graphics.js"></script>
        <script type="text/javascript" src="js/map/mapimage.js"></script>
        <script type="text/javascript" src="js/map/mapdata.js"></script>
        <script type="text/javascript" src="js/map/areadata.js"></script>
        <script type="text/javascript" src="js/map/areacorners.js"></script>
        <script type="text/javascript" src="js/map/scale.js"></script>
        <script type="text/javascript" src="js/map/tooltip.js"></script>
        <script type="text/javascript" src="js/map/jquery.rwdImageMaps.js"></script>
        <script src="js/map/init.js" type="text/javascript"></script>
        <script>




            $.ajax({
                url: "/db/user/update_module.php",
                method: "POST",
                data: {
                    step: 3,
                    module: 1
                },
                dataType: "html"
            });

            $("#modal_1-03init").modal("show");

        </script>
    </body>
</html>