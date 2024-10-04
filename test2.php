<?php

function plusMinus($arr) {
    $n = count($arr);
    $positiveCount = 0;
    $negativeCount = 0;
    $zeroCount = 0;

    foreach ($arr as $num) {
        if ($num > 0) {
            $positiveCount++;
        } elseif ($num < 0) {
            $negativeCount++;
        } else {
            $zeroCount++;
        }
    }

    $positiveRatio = number_format($positiveCount / $n, 6);
    $negativeRatio = number_format($negativeCount / $n, 6);
    $zeroRatio = number_format($zeroCount / $n, 6);

    echo "$positiveRatio\n$negativeRatio\n$zeroRatio";
}

// Example usage
$arr = [1, 1, 0, -1, -1];
plusMinus($arr);