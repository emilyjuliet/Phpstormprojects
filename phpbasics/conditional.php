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
        echo "The cost is 15000!";
        break;
    default:
        echo "There are no other rooms!";
}


$grade = 40;

if ($grade < "40") {
    echo "E!";
} elseif ($grade = "40-55") {
    echo "D";
} elseif ($grade = "56-65") {
    echo "C";
} elseif ($grade = "66-75") {
    echo "B";
} else {
    echo "A";
}
?>
