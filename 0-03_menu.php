<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link  type="text/css"  href="css/bootstrap.css" rel="stylesheet">
        <link  type="text/css"  href="css/bootstrap-grid.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php require './header.php'; ?>
        
        <section class="container main">
            <?php
            include 'db/connection/conexion.php';

            $module = 1;

            $query = "SELECT * FROM module where user = $last_id and module = $module and is_completed = 0";
            $result = $mysqli->query($query);
            $row_cnt1 = $result->num_rows;

            $query = "SELECT step, is_completed FROM module where user = $last_id and module = $module";
            $result = $mysqli->query($query);
            $values1 = array();
            while ($row = mysqli_fetch_array($result)) {
                $values1[] = $row;
            }
            ?>
            <h3 class="text-center">Módulo 1</h3>
            <div class="row">
                <div class="col-4">
                    <div class="item-module <?php if ($values1[0]["is_completed"] == 1) : ?>active<?php endif ?>">
                        <img src="img/icon.png" alt=""/>
                        <a href="mod_1/1-01_vid.php" class="">VIDEO ANIMADO 01</a>
                    </div>
                </div>
                <div class="col-4">
                    <div class="item-module <?php if ($values1[1]["is_completed"] == 1) : ?>active<?php endif ?>">
                        <img src="img/icon.png" alt=""/>
                        <a href="mod_1/1-02_inf.php" class="">INFOGRÁFICO 01</a>
                    </div>
                </div>
                <div class="col-4">
                    <div class="item-module <?php if ($values1[2]["is_completed"] == 1) : ?>active<?php endif ?>">
                        <img src="img/icon.png" alt=""/>
                        <a href="mod_1/1-03_act.php" class="">ACTIVIDAD 01</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <div class="item-module <?php if ($values1[3]["is_completed"] == 1) : ?>active<?php endif ?>">
                        <img src="img/icon.png" alt=""/>
                        <a href="mod_1/1-04_inf.php" class="">INFOGRÁFICO 02</a>
                    </div>
                </div>
                <div class="col-4">
                    <div class="item-module <?php if ($values1[4]["is_completed"] == 1) : ?>active<?php endif ?>">
                        <img src="img/icon.png" alt=""/>
                        <a href="mod_1/1-05_sld.php" class="">SLIDESHOW 01</a>
                    </div>
                </div>
                <div class="col-4">
                    <div class="item-module <?php if ($values1[5]["is_completed"] == 1) : ?>active<?php endif ?>">
                        <img src="img/icon.png" alt=""/>
                        <a href="mod_1/1-06_vid.php" class="">VIDEO ANIMADO 02</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <div class="item-module <?php if ($values1[6]["is_completed"] == 1) : ?>active<?php endif ?>">
                        <img src="img/icon.png" alt=""/>
                        <a href="mod_1/1-07_act.php" class="">ACTIVIDAD 02</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 item-module final">
                    <?php if ($row_cnt1 == 0): ?><a href="0-03_menu.php?stp=7">ACTIVIDAD FINAL</a><?php endif; ?>
                </div>
            </div>
            <?php
            $module2 = 2;

            $query2 = "SELECT * FROM module where user = $last_id and module = $module2 and is_completed = 0";
            $result2 = $mysqli->query($query2);
            $row_cnt2 = $result2->num_rows;

            $query2 = "SELECT step, is_completed FROM module where user = $last_id and module = $module2";
            $result2 = $mysqli->query($query2);
            $values2 = array();
            while ($row = mysqli_fetch_array($result2)) {
                $values2[] = $row;
            }

            $queryAct1 = "SELECT * FROM activity where user = $last_id and module = 1";
            $resultAct1 = $mysqli->query($queryAct1);
            $activity1 = mysqli_fetch_assoc($resultAct1);
            ?>
            <div class="module <?php if ($activity1["is_approved"] == 0) : ?>disabled<?php endif ?>">
                <h3 class="text-center">Módulo 2</h3>
                <div class="row">
                    <div class="col-4">
                        <div class="item-module <?php if ($values2[0]["is_completed"] == 1) : ?>active<?php endif ?>">
                            <img src="img/icon.png" alt=""/>
                            <a href="modulo2.php?stp=1" class="">VIDEO ANIMADO 01</a>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="item-module <?php if ($values2[1]["is_completed"] == 1) : ?>active<?php endif ?>">
                            <img src="img/icon.png" alt=""/>
                            <a href="modulo2.php?stp=2" class="">SLIDESHOW 01</a>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="item-module <?php if ($values2[2]["is_completed"] == 1) : ?>active<?php endif ?>">
                            <img src="img/icon.png" alt=""/>
                            <a href="modulo2.php?stp=3" class="">ACTIVIDAD 01</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <div class="item-module <?php if ($values2[3]["is_completed"] == 1) : ?>active<?php endif ?>">
                            <img src="img/icon.png" alt=""/>
                            <a href="modulo2.php?stp=4" class="">INFOGRÁFICO 01</a>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="item-module <?php if ($values2[4]["is_completed"] == 1) : ?>active<?php endif ?>">
                            <img src="img/icon.png" alt=""/>
                            <a href="modulo2.php?stp=5" class="">ACTIVIDAD 02</a>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="item-module <?php if ($values2[5]["is_completed"] == 1) : ?>active<?php endif ?>">
                            <img src="img/icon.png" alt=""/>
                            <a href="modulo2.php?stp=6" class="">ACTIVIDAD 03</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <div class="item-module <?php if ($values2[6]["is_completed"] == 1) : ?>active<?php endif ?>">
                            <img src="img/icon.png" alt=""/>
                            <a href="modulo2.php?stp=7" class="">INFOGRÁFICO 02</a>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="item-module <?php if ($values2[7]["is_completed"] == 1) : ?>active<?php endif ?>">
                            <img src="img/icon.png" alt=""/>
                            <a href="modulo2.php?stp=8" class="">VIDEO ANIMADO 02</a>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="item-module <?php if ($values2[8]["is_completed"] == 1) : ?>active<?php endif ?>">
                            <img src="img/icon.png" alt=""/>
                            <a href="modulo2.php?stp=9" class="">SLIDESHOW 02</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 item-module final">
                        <?php if ($row_cnt2 == 0): ?><a href="modulo2.php?stp=7">ACTIVIDAD FINAL 2</a><?php endif; ?>
                    </div>
                </div>
            </div>

            <?php
            $module3 = 3;

            $query3 = "SELECT * FROM module where user = $last_id and module = $module3 and is_completed = 0";
            $result3 = $mysqli->query($query3);
            $row_cnt3 = $result3->num_rows;

            $query3 = "SELECT step, is_completed FROM module where user = $last_id and module = $module3";
            $result3 = $mysqli->query($query3);
            $values3 = array();
            while ($row = mysqli_fetch_array($result3)) {
                $values3[] = $row;
            }

            $queryAct2 = "SELECT * FROM activity where user = $last_id and module = 2";
            $resultAct2 = $mysqli->query($queryAct2);
            $activity2 = mysqli_fetch_assoc($resultAct2);
            ?>
            <div class="module <?php if ($activity2["is_approved"] == 0) : ?>disabled<?php endif ?>">
                <h3 class="text-center">Módulo 3</h3>
                <div class="row">
                    <div class="col-4">
                        <div class="item-module <?php if ($values3[0]["is_completed"] == 1) : ?>active<?php endif ?>">
                            <img src="img/icon.png" alt=""/>
                            <a href="modulo3.php?stp=1" class="">VIDEO ANIMADO 01</a>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="item-module <?php if ($values3[1]["is_completed"] == 1) : ?>active<?php endif ?>">
                            <img src="img/icon.png" alt=""/>
                            <a href="modulo3.php?stp=2" class="">SLIDESHOW 01</a>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="item-module <?php if ($values3[2]["is_completed"] == 1) : ?>active<?php endif ?>">
                            <img src="img/icon.png" alt=""/>
                            <a href="modulo3.php?stp=3" class="">ACTIVIDAD 01</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <div class="item-module <?php if ($values3[3]["is_completed"] == 1) : ?>active<?php endif ?>">
                            <img src="img/icon.png" alt=""/>
                            <a href="modulo3.php?stp=4" class="">INFOGRÁFICO 01</a>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="item-module <?php if ($values3[4]["is_completed"] == 1) : ?>active<?php endif ?>">
                            <img src="img/icon.png" alt=""/>
                            <a href="modulo3.php?stp=5" class="">VIDEO ANIMADO 02</a>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="item-module <?php if ($values3[5]["is_completed"] == 1) : ?>active<?php endif ?>">
                            <img src="img/icon.png" alt=""/>
                            <a href="modulo3.php?stp=6" class="">INFOGRÁFICO 02</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <div class="item-module <?php if ($values3[6]["is_completed"] == 1) : ?>active<?php endif ?>">
                            <img src="img/icon.png" alt=""/>
                            <a href="modulo3.php?stp=7" class="">INFOGRÁFICO 03</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 item-module final">
                        <?php if ($row_cnt3 == 0): ?><a href="modulo3.php?stp=7">ACTIVIDAD FINAL 3</a><?php endif; ?>
                    </div>
                </div>
            </div>
        </section>


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