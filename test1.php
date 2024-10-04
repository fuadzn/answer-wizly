<?php
function miniMaxSum($arr) {
    sort($arr);

    $minSum = array_sum(array_slice($arr, 0, 4));

    $maxSum = array_sum(array_slice($arr, 1));

    echo "$minSum $maxSum";
}

// Example usage
$arr = [1, 3, 5, 7, 9];
miniMaxSum($arr); // Output: 16 24ss