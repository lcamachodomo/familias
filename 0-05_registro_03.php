<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link  type="text/css"  href="css/bootstrap.css" rel="stylesheet">
        <link  type="text/css"  href="css/bootstrap-grid.css" rel="stylesheet">
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
        <section class="container">
            <form action="db/user/update_user.php" method="POST">
                <div class="form-group">
                    <label for="exampleInputEmail1" class="d-block">Escoja su personaje</label>
                    <div class="form-check d-inline-block">
                        <input class="form-check-input d-none" type="radio" name="data" id="exampleRadios1" value="1">
                        <label class="form-check-label" for="exampleRadios1">
                            <img src="img/icon-female.png" alt=""/>
                        </label>
                    </div>
                    <div class="form-check d-inline-block">
                        <input class="form-check-input d-none" type="radio" name="data" id="exampleRadios2" value="2">
                        <label class="form-check-label" for="exampleRadios2">
                            <img src="img/icon-male.png" alt=""/>
                        </label>
                    </div>
                    <input type="hidden" name="step" value="3">
                </div>

            </form>
        </section>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.js" type="text/javascript"></script>
        <script src="js/bootstrap.js" type="text/javascript"></script>
        <script>
            $("input[name=data]").change(function () {
                $("form").submit();
            });
        </script>
    </body>
</html>