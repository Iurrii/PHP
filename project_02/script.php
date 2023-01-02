<?php
###task1
function get_sum_without_return($a, $b, $c, $d, $e) {
    print ($a + $b + $c + $d + $e);
}

get_sum_without_return(5, 52, 8, 9, 65);

#need_a_separator_between_the_results_of_functions
###task2
function get_sum_with_return($f, $g, $h, $i, $j) {
    $tmp = $f + $g + $h + $i + $j;
    return $tmp;
}
print(get_sum_with_return(2, 5, 1, 8, 10));

#task3
define('DEBUG', 1);

function show_error_message($error_message) {
    if(constant('DEBUG')) {
        print ($error_message);
    }
}

show_error_message('error111')

?>

