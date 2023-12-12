<?php


if (
    isset($_POST["login"]) && !empty($_POST["login"])
    && isset($_POST["password"]) && !empty($_POST["password"])
) {
    setcookie("login", $_POST["login"], time()+3600, "/");
    setcookie("password", $_POST["password"], time()+3600, "/");
}

header('Location: ./index.php');


