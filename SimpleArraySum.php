<?php

//U just need to sum the array using array_sum function and return the value

$arr = [1,2,3,4,5,6];
//echo $ar[0];
function SimpleArraySum($ar){
    $c = array_sum($ar);
    return $c;
}

echo SimpleArraySum($arr);
?>