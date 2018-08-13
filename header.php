<?php
session_start();

$user = $_SESSION['user'];
$last_id = $user["id"];

if (is_null($user)) {
    header("Location: /familias/");
    die();
}
?>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><?php print $user["fullname"] ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="0-03_menu.php">Menú de modulos <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/familias/db/user/logout_user.php">Cerrar sesión</a>
                </li>
            </ul>

        </div>
    </nav>
</header>