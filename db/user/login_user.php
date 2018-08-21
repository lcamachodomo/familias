<?php
session_start();
include '../connection/conexion.php';

mysqli_set_charset($mysqli, "utf8");

$email = $_POST["email"];

$query = "SELECT * FROM user WHERE email = '" . $email . "'";

$result = $mysqli->query($query);
$value = mysqli_fetch_assoc($result);
$row_cnt = $result->num_rows;

if ($row_cnt > 0) {
    unset($_SESSION['user']);
    $_SESSION['user'] = $value;
    header("Location: ../../0-03_menu.php");
    die();
}else{
    $_SESSION['user'] = null;
    $_SESSION['incorrect_user'] = true;
    header("Location: ../../0-02_login.php");
    die();
}