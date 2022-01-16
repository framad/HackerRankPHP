<?php

//I cannot solve this problem on my own, my solution is on the commented code, but it cannot work properly i mean if u
//test it on ur own environment using the code i made it will pretty much working, but it won't pass the test case
//on Hackerrank. But my way of thinking is to validate that the the first and second kangaroo could meet after several
//steps using conditional below, but it didnt pass the test so i think i dont need to explain more
//the code that is commented is my own thought and the code that dont commented is the code i got from this youtube channel
//https://www.youtube.com/watch?v=2cX-Uh1Qd-8

function kangaroo($x1, $v1, $x2, $v2){
    // $a = $x1 + $v2;
    // $b = $x2 + $v2;

    // if($x1 < $x2 && $v1 < $v2){
    //     echo "NO";
    // }else if($x1 > $x2 && $v1 > $v2){
    //     echo "NO";
    // }else if($x1 == $x2 && $v1 != $v2){
    //     echo "NO";
    // }else if($x1 != $x2 && $v1 == $v2){
    //     echo "NO";
    // }else if($a%$b==0){
    //     echo "YES";
    // }else if($b%$a==0){
    //     echo "YES";
    // }

    if($v1 <= $v2) return 'NO';
    if (($x2 - $x1) % ($v1 - $v2) == 0) return 'YES';
    return 'NO';
}


echo kangaroo(0,3,4,2);

?>