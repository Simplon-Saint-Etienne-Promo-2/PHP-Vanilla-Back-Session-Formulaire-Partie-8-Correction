<?php


if (
    isset($_POST["lastname"]) && !empty($_POST["lastname"])
    && isset($_POST["firstname"]) && !empty($_POST["firstname"])
    && isset($_POST["age"]) && !empty($_POST["age"])
) {
    session_start();

    $_SESSION["lastname"] = $_POST["lastname"];
    $_SESSION["firstname"] = $_POST["firstname"];
    $_SESSION["age"] = $_POST["age"];
}

header('Location: ./index.php');
