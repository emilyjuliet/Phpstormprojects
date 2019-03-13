<?php
$rentalhouses = "singleroom";

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
?>
