<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">

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
                           <a class="mx-auto" href="#"><img src="../img/logo-ementores.png" alt="E-mentores"></a>
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
                        <div id="act_01" class="mod">
                            <div class="cont row">
                                <div class="col-12">
                                    <video width="100%" height="100%" controls>
                                        <source src="../videos/1-01_vid.mp4" type="video/mp4">
                                    </video>
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
                        <a href="#" class="nav-iniciar">Iniciar sesión</a>
                    </li>
                </ul>

            </nav>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="../js/bootstrap.bundle.js" type="text/javascript"></script>
        <script src="../js/bootstrap.js" type="text/javascript"></script>
        <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>

        <script>




            $.ajax({
                url: "/familias/db/user/update_module.php",
                method: "POST",
                data: {
                    step: 1,
                    module: 1
                },
                dataType: "html"
            });

        </script>
    </body>
</html>