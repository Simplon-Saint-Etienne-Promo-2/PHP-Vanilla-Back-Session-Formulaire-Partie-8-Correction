<?php

session_start();


// session_unset();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    if (isset($_SESSION["lastname"]) && !empty($_SESSION["lastname"])) {
        echo 'Lastname : ' . $_SESSION["lastname"] . '<br>';
    }

    if (isset($_SESSION["firstname"]) && !empty($_SESSION["firstname"])) {
        echo 'Firstname : ' . $_SESSION["firstname"] . '<br>';
    }

    if (isset($_SESSION["age"]) && !empty($_SESSION["age"])) {
        echo 'Age : ' . $_SESSION["age"] . '<br>';

        ?>

        <form action="./deconnexion.php" method="post">

            <button type="submit">Deconnexion</button>
        </form>



        <?php
    }

    if (
        !isset($_SESSION["lastname"]) && empty($_SESSION["lastname"])
        && !isset($_SESSION["lastname"]) && empty($_SESSION["lastname"])
        && !isset($_SESSION["lastname"]) && empty($_SESSION["lastname"])
    ) {
    ?>
        <form action="./treatment.php" method="post">
            <label for="lastname">Lastname :</label>
            <input type="text" name="lastname" id="lastname">

            <label for="firstname">Firstname :</label>
            <input type="text" name="firstname" id="firstname">

            <label for="age">Age :</label>
            <input type="number" name="age" id="age">

            <button type="submit">Envoyer</button>
        </form>


    <?php } ?>
</body>

</html>