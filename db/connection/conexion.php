<?php

$base_url = "https://localhost/familias/";
$mysqli = new mysqli("localhost", "root", "root", "familias");
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$mysqli->set_charset("utf8");

?>