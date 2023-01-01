<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 2</title>


    <script>
        <?php
            function get_sum_without_return ($a, $b, $c, $d, $e) {
                print ($a + $b + $c + $d + $e);
            }

            function get_sum_with_return($f, $g, $h, $i, $j) {
                $tmp = $f + $g + $h + $i + $j;
                return $tmp;
            }
        ?>
    </script>

    <style>
        body {

        }
        section {
            width: auto;
            max-width: 50vw;
            margin: auto;
        }
    </style>


</head>
<body>

    <section>
        <h2>A) The sum of the numbers 1, 2, 3, 4, 50 is:</h2>
        <p>
            <?php
                get_sum_without_return(1, 2, 3, 4, 50);
            ?>
        </p>
    </section>

    <section>
        <h2>B) The sum of the numbers 2, 5, 1, 8, 10 is:</h2>
        <p>
            <?php
                print(get_sum_with_return(2, 5, 1, 8, 10))
            ?>
        </p>
    </section>

    <section>
        <h2>C) Find the volume of a cylinder with height 10 and radius 5</h2>
        <p></p>
    </section>

    <section>
        <h2></h2>
        <p></p>
    </section>
    
</body>
</html>