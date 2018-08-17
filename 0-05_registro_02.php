<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link  type="text/css"  href="css/bootstrap.css" rel="stylesheet">
        <link  type="text/css"  href="css/bootstrap-grid.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,700, 800" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
        <link href="css/style.css" rel="stylesheet" type="text/css" />
        <link href="css/index.css" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <div class="wrapper">
            <div id="content">
                <section class="container-full index-main">

                    <nav class="navbar navbar-expand-lg navbar-light bg-light d-block">
                        <div class="container-fluid">

                            <div class="nav justify-content-start">

                            </div>

                            <div class="nav justify-content-center">
                                <a class="mx-auto" href="#"><img src="img/logo-ementores.png" alt="E-mentores"></a>
                            </div>

                            <div class="nav justify-content-end">
                                <button type="button" id="sidebarCollapse" class="btn" >
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                            </div>
                        </div>
                    </nav>

                    <div class="bck-intro padding-top-bottom">
                        <section class="container">
                            <div class="row justify-content-md-center">
                                <div class="col-sm-10 main-block">
                                    <h1 class="text-center"><img src="img/icon-question.png"></h1>
                                    <form action="db/user/update_user.php" method="POST">
                                        <div class="form-group">
                                            <p class="text-center label">¿Cual es su nombre?</p>
                                            <p class="text-center label-small">Hola, mi nombre es:</p>
                                            <input type="text" class="form-control" name="data" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Bruno Díaz">
                                            <input type="hidden" name="step" value="2">
                                            <input type="hidden" name="user" value="<?php session_start();
print $_SESSION["last_id"];
?>">
                                        </div>

                                        <button type="submit" class="d-block m-auto btn-continue">Continuar</button>
                                    </form>
                                </div>
                            </div>

                        </section>

                    </div>
                </section>
<?php require './footer.php'; ?>
            </div>
            <nav id="sidebar" class="active">
                <div class="sidebar-header">
                    <h3>Menu</h3>
                </div>

                <ul class="list-unstyled components">

                    <li>
                        <a href="#" class="nav-sobre">Sobre el proyecto</a>
                    </li>
                    <li>
                        <a href="#" class="nav-recursos">Recursos relacionados</a>
                    </li>
                    <li>
                        <a href="#" class="nav-iniciar">Iniciar sesión</a>
                    </li>
                </ul>

            </nav>
        </div>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.js" type="text/javascript"></script>
        <script src="js/bootstrap.js" type="text/javascript"></script>
    </body>
</html>