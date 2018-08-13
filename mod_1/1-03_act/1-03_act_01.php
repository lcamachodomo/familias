<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link  type="text/css"  href="../../css/bootstrap.css" rel="stylesheet">
        <link  type="text/css"  href="../../css/bootstrap-grid.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
        <link href="../../css/style.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>

        <?php require '../../header.php'; ?>
        <section class="container">
            <div class="main">
                <div id="act_01" class="mod">
                    <ul class="nav nav-tabs " id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#desafios" role="tab" aria-controls="home" aria-selected="true">Desafios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#oportunidades" role="tab" aria-controls="contact" aria-selected="false">Oportunidades</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="desafios" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row">
                                <div class="col-6">
                                    <div class="slider">
                                        <div>Yo veo como mi hermano mayor usa la computadora para estudiar. ¡No creo que podría hacer sus reportes si no la tuviera!</div>
                                        <div>Y bueno, cuando a mí me dejan usarla, me gusta buscar música que algunas veces cambio con un app de DJ.</div>
                                        <div>Pero cuando sea grande, voy a trabajar usando una computadora.</div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <img src="../../img/mod1/1-03_act_img1.png" alt="" class="img-fluid"/>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="oportunidades" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="row">
                                <div class="col-6">
                                    <div class="slider2">
                                        <div>Yo veo que mis papás no saben usar bien la compu y no tienen muchos apps en sus teléfonos.</div>
                                        <div>os usan más que nada para llamar, aunque yo les he dicho que con Internet se pueden hacer muchas cosas.</div>
                                        <div>Siento que están perdiendo muchas chances porque no se ponen las pilas.</div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <img src="../../img/mod1/1-03_act_img1.png" alt="" class="img-fluid"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

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



            $.ajax({
                url: "/familias/db/user/update_module.php",
                method: "POST",
                data: {
                    step: 3,
                    module: 1
                },
                dataType: "html"
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