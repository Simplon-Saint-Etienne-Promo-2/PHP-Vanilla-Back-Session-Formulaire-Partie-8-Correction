<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="./treatment.php" method="post">
        <label for="login">Lastname :</label>
        <input type="text" name="login" id="login">

        <label for="password">password :</label>
        <input type="password" name="password" id="password">

        <button type="submit">Envoyer</button>
    </form>


    <?php

    if (
        isset($_COOKIE["login"]) && !empty($_COOKIE["login"])
        && isset($_COOKIE["password"]) && !empty($_COOKIE["password"])
    ) {
        echo 'Login : ' . $_COOKIE["login"];
        echo 'Password : ' . $_COOKIE["password"];
        echo '<br><br>';
        echo '<a href="modif_cookie.php">Modifier les Cookies</a>';
    }
    ?>


</body>

</html>