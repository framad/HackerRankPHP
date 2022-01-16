<?php

//My solution for this problem is to declared a variable that will store a min value, max value and summation result from the array
//after that you just have to count the summation result - max value to get the minimum number and summation result + min value to get the maximum number

$ar = [1,2,3,4,5];

function minmaxsum($a){
    $temp = array_sum($a);
    $temp_min = min($a);
    $temp_max = max($a);
    $nilai_min = 0;
    $nilai_max = 0;

    $nilai_min = $temp - $temp_max;
    $nilai_max = $temp - $temp_min;

    print ($nilai_min. " ". $nilai_max);
}

minmaxsum($ar);

?>