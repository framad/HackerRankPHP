<?php

//My solution for this problem is you have to declare 2 variables to store alice and bob scores
//after that u need to do for loop to compare the value from alice and bob arrays
//index 0 from alice's array must be compared with similar index from bob's array
//if alice/bob has bigger score than bob then store it in the salice/sbob variable we have declared earlier
//but if their scores are equal then dont add value to the variable

$a = [13,17,67];
$b = [13,17,69];

function CompareTriplets($alice,$bob){
    $salice = 0;
    $sbob = 0;
    for($i = 0; $i < count($alice); $i++){
        if($alice[$i] > $bob[$i]){
            $salice = $salice + 1;
        }else if($alice[$i] == $bob[$i]){
            //$sbob = $sbob +1;
            $sbob = $sbob +0;
            $salice = $salice + 0;
        }else{
            $sbob = $sbob +1;
        }
    }
    return " Alice's score : $salice<br>". "Bob's score : $sbob";
}

echo CompareTriplets($a,$b);

?>