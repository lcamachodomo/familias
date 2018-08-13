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
                        <div class="col-12">
                            <video width="100%" height="100%" controls>
                                <source src="../videos/1-01_vid.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>
                </div>
            </div>
        </section>

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