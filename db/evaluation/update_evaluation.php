<?php
session_start();
include '../connection/conexion.php';

mysqli_set_charset($mysqli, "utf8");

$module = $_POST["module"];
$is_approved = $_POST["is_approved"];
$score = $_POST["score"];
$last_id = $_SESSION['user']["id"];

$query = "UPDATE activity set score = $score, is_approved = $is_approved  where user = $last_id and module = $module";
$mysqli->query($query);

die();
?>