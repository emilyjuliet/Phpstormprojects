<?php
$rentalhouses = "one bedroom";

switch ($rentalhouses) {
    case "singleroom":
        echo "The cost is 7000!";
        break;
    case "doubleroom":
        echo "The cost is 10000!";
        break;
    case "one bedroom":
        echo "The cost is 15000!</br>";
        break;
    default:
        echo "There are no other rooms!";
}


$grade = 63;

if ($grade <= 40) {
    echo "E!";
} elseif ($grade <= 55) {
    echo "D";
} elseif ($grade <= 65) {
    echo "C";
} elseif ($grade <= 75) {
    echo "B";
} else {
    echo "A";
}
?>
