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
        <input type="text" name="login" id="login" value=<?php echo $_COOKIE["login"] ?>>

        <label for="password">password :</label>
        <input type="password" name="password" id="password" value=<?php echo $_COOKIE["password"] ?>>

        <button type="submit">Modifier</button>
    </form>
</body>
</html>