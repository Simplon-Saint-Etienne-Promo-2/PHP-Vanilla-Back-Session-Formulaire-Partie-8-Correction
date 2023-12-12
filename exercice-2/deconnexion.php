<?php

session_start();

// $_SESSION["lastname"] = "";
// $_SESSION["firstname"] = "";
// $_SESSION["age"] = "";

session_unset();

header('Location: ./index.php');