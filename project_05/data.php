<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data, output</title>
</head>

<body>
    <p>Saved name is:</br>
        <?php
            if (isset($_SESSION['user_name']))
                echo $_SESSION['user_name'];
            else
                echo 'No data ';
        ?>
    </p>
    <p>Saved surname is:</br>
        <?php
            if (isset($_SESSION['user_surname']))
                echo $_SESSION['user_surname'];
            else
                echo 'No data ';
    ?>
    </p>
    <p>
        <a href="./index.php">Home</a>
    </p>

</body>

</html>