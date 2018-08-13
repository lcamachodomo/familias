<?php

session_start();

unset($_SESSION['user']);
header("Location: /familias/0-02_login.php");
die();
