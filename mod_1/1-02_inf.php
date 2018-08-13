<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link  type="text/css"  href="../css/bootstrap.css" rel="stylesheet">
        <link  type="text/css"  href="../css/bootstrap-grid.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
        <link href="../css/style.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>

        <?php require '../header.php'; ?>
        <section class="container">
            <div class="main">
                <div id="act_01" class="mod">
                    <div class="cont row">
                        <div id="map_container">
                            <img usemap="#1-02-inf" src="../img/mod1/1-02_inf.jpg" class="img-fluid">
                            <map name='1-02-inf'>
                                <area data-nbr="1"  shape='rect' coords='202, 400, 363, 558' href='#' />
                                <area data-nbr="2"  shape='rect' coords='438, 406, 601, 567' href='#' />
                                <area data-nbr="3"  shape='rect' coords='670, 409, 822, 562' href='#' />
                                <area data-nbr="4"  shape='rect' coords='912, 399, 1066, 558' href='#' />
                                <area data-nbr="5"  shape='rect' coords='898, 625, 1069, 793' href='#' />
                                <area data-nbr="6"  shape='rect' coords='664, 630, 817, 787' href='#' />
                                <area data-nbr="7"  shape='rect' coords='438, 636, 597, 792' href='#' />
                                <area data-nbr="8"  shape='rect' coords='202, 633, 355, 784' href='#' />
                            </map>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="modal" id="modal_1-04_act" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">

                    <div class="modal-body">

                        <div class="row d-none act-04-mdl act01" >
                            <div class="col-12">
                                <a href="http://www.facebook.com">facebook.com</a>
                                Permite compartir fotos, videos, enlaces, estados de ánimo e interactuar con los contactos.

                            </div>
                        </div>
                        <div class="row d-none act-04-mdl act02" >
                            <div class="col-12">
                                <a href="http://www.instagram.com">instagram.com</a>
                                Los usuarios pueden subir fotos o videos y agregarles filtros fotográficos y efectos.
                            </div>
                        </div>
                        <div class="row d-none act-04-mdl act03" >
                            <div class="col-12">
                                <a href="http://www.snapchat.com">snapchat.com</a>
                                Permite enviar fotos y videos que se borran pocos segundos después de que la persona que los recibió los abrió.
                            </div>
                        </div>
                        <div class="row d-none act-04-mdl act04" >
                            <div class="col-12">
                               <a href="http://www.whatsapp.com">whatsapp.com</a>
                                Es una aplicación que permite enviar mensajes instantáneos, que pueden ser textos, fotos, videos o audios.

                            </div>
                        </div>
                        <div class="row d-none act-04-mdl act05" >
                            <div class="col-12">
                                <a href="http://www.twitch.tv">twitch.tv</a>
                                Es una plataforma para ver y subir videos en vivo.

                            </div>
                        </div>
                        <div class="row d-none act-04-mdl act06" >
                            <div class="col-12">
                                <a href="http://www.youtube.com">youtube.com</a>
                                Es una plataforma en línea que permite ver y subir videos.

                            </div>
                        </div>
                        <div class="row d-none act-04-mdl act07" >
                            <div class="col-12">
                                <a href="http://www.pinterest.es">pinterest.es</a>
                                Permite buscar, guardar, organizar y compartir contenidos en Internet. Cada contenido está compuesto por una imagen y una descripción corta y se conoce como “pin”.

                            </div>
                        </div>
                        <div class="row d-none act-04-mdl act08" >
                            <div class="col-12">
                                <a href="http://www.twitter.com">twitter.com</a>
                                Permite compartir textos cortos que no superen los 280 caracteres. Estos textos se conocen como “twits”.

                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="../js/bootstrap.bundle.js" type="text/javascript"></script>
        <script src="../js/bootstrap.js" type="text/javascript"></script>
        <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>

        <script type="text/javascript" src="../js/map/jquery.imagemapster.js"></script>
        <script type="text/javascript" src="../js/map/when.js"></script>
        <script type="text/javascript" src="../js/map/core.js"></script>
        <script type="text/javascript" src="../js/map/graphics.js"></script>
        <script type="text/javascript" src="../js/map/mapimage.js"></script>
        <script type="text/javascript" src="../js/map/mapdata.js"></script>
        <script type="text/javascript" src="../js/map/areadata.js"></script>
        <script type="text/javascript" src="../js/map/areacorners.js"></script>
        <script type="text/javascript" src="../js/map/scale.js"></script>
        <script type="text/javascript" src="../js/map/tooltip.js"></script>
        <script type="text/javascript" src="../js/map/jquery.rwdImageMaps.js"></script>
        <script type="text/javascript" src="../js/map/init.js" ></script>

        <script>
            init();

            $("area").click(function (e) {
                e.preventDefault();
                console.log($(this).data("nbr"));
                $(".act-04-mdl").addClass("d-none");
                $(".act-04-mdl.act0" + $(this).data("nbr")).removeClass("d-none");
                $("#modal_1-04_act").modal("show");

            });

            $.ajax({
                url: "/familias/db/user/update_module.php",
                method: "POST",
                data: {
                    step: 2,
                    module: 1
                },
                dataType: "html"
            });

        </script>
    </body>
</html>