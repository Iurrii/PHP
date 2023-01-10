<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Name, entry</title>
</head>
<body>

    <p>
        <?php
            if ($_SESSION['user_name'])
                echo $_SESSION['user_name'];
        ?>
    </p>

    <form action="./name-2.php" method="post">
        <input type="text" name="name">
        <input type="submit" value="Save">
        <input type="button" value="Delete">
    </form>
    <p>
        <a href="./index.php">Home</a>
    </p>
    
</body>
</html>