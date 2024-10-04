<?php 
function timeConversion($s) {
    $hour = substr($s, 0, 2);
    $minute = substr($s, 3, 2);
    $second = substr($s, 6, 2);
    $ampm = substr($s, 8, 2);

    if ($ampm == "AM" && $hour == "12") {
        $hour = "00";
    } elseif ($ampm == "PM" && $hour != "12") {
        $hour = (int)$hour + 12;
    }

    return sprintf("%02d:%02d:%02d", $hour, $minute, $second);
}

// Example usage
$s = "12:01:00PM";
echo timeConversion($s); // Output: 12:01:00