
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
                    <label for="exampleInputEmail1">¿Cual es su nombre?</label>
                    <small id="emailHelp" class="form-text text-muted">Hola, mi nombre es:</small>
                    <input type="text" class="form-control" name="data" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Bruno Díaz">
                    <input type="hidden" name="step" value="2">
                    <input type="hidden" name="user" value="<?php session_start();  print $_SESSION["last_id"]; ?>">
                </div>

                <button type="submit" class="btn btn-primary">Siguiente</button>
            </form>
        </section>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.js" type="text/javascript"></script>
        <script src="js/bootstrap.js" type="text/javascript"></script>
    </body>
</html>