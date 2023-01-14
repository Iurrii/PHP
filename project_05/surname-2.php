<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Name, output</title>
</head>
<script>
<?php
        $_SESSION['user_surname']=$_REQUEST['surname'];
    ?>
</script>

<body>
    <p>
        Saved surname is:</br>
        <?php
            echo $_SESSION['user_surname']
        ?>
    </p>
    <p>
        <a href="./index.php">Home</a>
    </p>

</body>

</html>