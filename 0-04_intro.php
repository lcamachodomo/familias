<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link  type="text/css"  href="css/bootstrap.css" rel="stylesheet">
        <link  type="text/css"  href="css/bootstrap-grid.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>

        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">Registro</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="0-03_menu.php">Menú de modulos <span class="sr-only">(current)</span></a>
                        </li>
                    </ul>

                </div>
            </nav>
        </header>
        <div class="bck-intro">
            <section class="container">
                <div class="col-sm-offset-2 col-md-10 ">
                <h1 class="text-center  "><img src="img/icon-conectados.png"></h1>
                <div class="row">
                    <div class="col-12">
                        <p class="text-center">¿Forma parte del programa Hogares Conectados?</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <a class="btn btn-danger float-right" href="0-02_login.php?t=1">Sí</a>
                    </div>
                    <div class="col-sm-6">
                        <a class="btn btn-danger btn-sm" href="0-02_login.php?t=2">No, pero quiero aprender...</a>
                    </div>
                </div>
                </div>
            </section>

         </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.js" type="text/javascript"></script>
        <script src="js/bootstrap.js" type="text/javascript"></script>
        <script>
            $(".module.disabled a").each(function () {
                $(this).attr("href", "");
                $(this).attr("disabled", true);
            });

            $(".module.disabled a").click(function (e) {
                e.preventDefault();
            });
        </script>
    </body>
</html>