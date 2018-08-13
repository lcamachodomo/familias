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
            <div class="radio">
                <label>
                    <input type="radio" name="userStatus" id="userStatus1" value="1" checked>
                    Soy nuevo
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="userStatus" id="userStatus2" value="2">
                    Ya tengo una cuenta
                </label>
            </div>
            <form action="db/user/insert_user.php" method="POST">
                <div class="form-group" id="email-input">
                    <label for="exampleInputEmail1" class="text-center d-block">¿Cual es su correo electrónico?</label>
                    <small id="emailHelp" class="form-text text-muted">Puede usar esta misma dirección de correo <br>para volver a entrar más adelante.</small>
                    <input type="email" name="email" class="form-control mr-auto" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ejemplo@correo.com" required>
                </div> 
                <div class="form-group" id="id-input">
                    <label for="exampleInputId" class="text-center d-block">Escriba su número de cédula</label>
                    <small id="emailHelp" class="form-text text-muted">Escriba solamente números, sin espacios.<br>Por ejemplo: 101110111</small>
                    <input type="text" name="id" class="form-control text-number mr-auto" id="exampleInputId" aria-describedby="idHelp" minlength="9" maxlength="9" placeholder="X0XXX0XXX" required>
                </div> 
                <input type="hidden" name="type" value="1">
                <input type="hidden" name="step" value="1">
                <button type="submit" class="btn btn-primary">Siguiente</button>
            </form>
        </section>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.js" type="text/javascript"></script>
        <script src="js/bootstrap.js" type="text/javascript"></script>
        <script>
            var urlParams = new URLSearchParams(window.location.search);
            $("input[name=type]").val(urlParams.get("t"));
            if (urlParams.get("t") === 1) {
                $("#email-input").remove();
            } else {
                $("#id-input").remove();
            }

            $(".text-number").keypress(function (evt) {
                var charCode = (evt.which) ? evt.which : evt.keyCode;
                if (charCode > 31 && (charCode < 48 || charCode > 57)) {
                    return false;
                }
                return true;
            });
            
            $("input[name=userStatus]").change(function (){
                console.log($(this).val());
                if($(this).val() === 1){
                    $("form").attr("action", "db/user/insert_user.php");
                }else{
                    $("form").attr("action", "db/user/login_user.php");
                }
            });
        </script>
    </body>
</html>