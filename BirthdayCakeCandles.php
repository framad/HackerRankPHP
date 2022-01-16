<?php

// My solution for this problem is to declare a variable that has max value from the array first 
// after that you can compared the variable that has been declared to the array value
// and save the equal value to temporary variable and return it

$ar = [4,4,1,3];

function BirthdayCakeCandles($a){
    //declare a variable to store max value from the array
    $b = max($a);

    //declare a temporary variable
    $temp = 0;

    //do for loop to compare every index on the array with the max value that has been declared earlier
    for($i=0; $i<count($a); $i++){
        if($a[$i] == $b){
            $temp = $temp + 1;
        }
    }
    print $temp;
}

BirthdayCakeCandles($ar);

?>