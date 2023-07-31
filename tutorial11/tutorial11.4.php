<!-- E:\wamp\www\today\tutorial11.4.php -->
<?php

$num = $_REQUEST['num'];

function getDayOfWeek($num) {
    switch ($num) {
        case 1:
            return 'Monday';
        case 2:
            return 'Tuesday';
        case 3:
            return 'Wednesday';
        case 4:
            return 'Thursday';
        case 5:
            return 'Friday';
        case 6:
            return 'Saturday';
        case 7:
            return 'Sunday';
        default:
            return 'Invalid.';
    }
}
$day = getDayOfWeek($num);
echo  "<br>";
echo  "<br>";
echo  "<br>";
echo  "<br>";
echo "<center>";
echo "<b>";
echo "Number $num is $day.";
echo "</b>";
echo "</center>";
?>
