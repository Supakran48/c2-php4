<?php
function day_name(){
    $day1 = "monday";
    $day2 = "Tuesday";
    $day3 = "wednesday";
    $day4 = "thursday";
    return array($day1,$day2,$day3,$day4);  
}
//$days = day_name();
//echo $days[0];
//echo "<br />";
//echo $days[1];
//echo "<br />";
//echo $days[2];
//echo "<br />";
//echo $days[3];
//echo "<br />";

list($day_1,$dat_2,$day_3,$day_4) = day_name();
echo $day_1."b />".$day_2."b />".$day_3."b />".$day_4;

