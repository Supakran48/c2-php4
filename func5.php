<?php
function inc($i){
    echo $i = $i +1;//++$i 

}
$i = 10;
//inc($i);

function add(&$str){
    $str = $str. "calling by Rederence";
    echo $str ;
}
$str = "This is a BOOK";
add($str);