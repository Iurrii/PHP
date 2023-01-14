<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surname, input</title>
</head>

<body>

    <p>
        <?php
            if (isset($_SESSION['user_surname']))
                echo $_SESSION['user_surname'];
        ?>
    </p>

    <form action="./surname-2.php" method="post">
        <input type="text" name="surname">
        <input type="submit" value="Save">
        <input type="button" value="Delete">
    </form>
    <p>
        <a href="./index.php">Home</a>
    </p>

</body>

</html>