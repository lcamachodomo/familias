<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link  type="text/css"  href="../../css/bootstrap.css" rel="stylesheet">
        <link  type="text/css"  href="../../css/bootstrap-grid.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
        <link href="../../css/style.css" rel="stylesheet" type="text/css"/>
        <link href="../../css/mod1.css" rel="stylesheet" type="text/css"/>
        <link href="../../css/index.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
 <div class="wrapper">


            <!-- Page Content -->

            <div id="content"> 
        <?php require '../../header.php'; ?>
        <section class="container">
            <div class="main">
                <div id="act_01" class="mod">
                    <ul class="nav nav-tabs " id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#desafios" role="tab" aria-controls="home" aria-selected="true">Desafíos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#oportunidades" role="tab" aria-controls="contact" aria-selected="false">Oportunidades</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="desafios" role="tabpanel" aria-labelledby="home-tab">
                            <img src="../../img/mod1/1-03_act_personaje3rec.png" class="ico-personaje">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="slider">
                                        <div>Me ha pasado que de pronto me habla o me manda un mensaje alguien que no conozco y si es una persona rara, no me gusta.</div>
                                        <div>Además me molesta cuando mis amigos le mandan a otra gente del cole fotos en las que yo salgo.</div>
                                        <div>Preferiría que quedara entre nosotros.</div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <img src="../../img/mod1/1-03_act_img3.png" alt="" class="img-fluid"/>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="oportunidades" role="tabpanel" aria-labelledby="profile-tab">
                            <img src="../../img/mod1/1-03_act_personaje3rec.png" class="ico-personaje">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="slider2">
                                        <div>Me encanta mensajear con mis amigos siempre que podemos.</div>
                                        <div>Cada cosa que pasa, nos compartimos una foto o nos enviamos un video.</div>
                                        <div>¡Es casi como estar en el mismo lugar pero desde casas diferentes!</div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <img src="../../img/mod1/1-03_act_img3.png" alt="" class="img-fluid"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
        <script src="../../js/bootstrap.bundle.js" type="text/javascript"></script>
        <script src="../../js/bootstrap.js" type="text/javascript"></script>
        <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>


        <script>
            var slider2 = null;
            var slider = $('.slider').bxSlider({
                pager: false,
                infiniteLoop: true,
                auto: true
            });

            $('a[href="#oportunidades"]').on('shown.bs.tab', function (e) {
                if (!slider2) {
                    slider2 = $('.slider2').bxSlider({
                        pager: false,
                        infiniteLoop: true,
                        auto: true
                    });
                }

            });
        </script>
    </body>
</html>