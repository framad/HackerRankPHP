<?php

//My solution for this problem is to declared a value that will used to store a temporary value and end value
//we need to declare 3 variables for both temporary value and end value
//after that compare each index on the array to 0, if its bigger than 0 than add 1 to temp_plus, if its less than 0 then add 1 to temp_min, and add 1 to temp_netral if its equal to 0
//after that divide the temporary variable with the length of the array and store it to the end variable

$ar = [-4, -3, -9, 0, 4, 1];

function plusminus($arr){
    //temporary variable
    $temp_plus = 0;
    $temp_min = 0;
    $temp_netral = 0;

    //end variable
    $akhir_plus = 0;
    $akhir_min = 0;
    $akhir_netral = 0;

    //compare each index with 0 and store the result to temporary variable
    for($i=0; $i < count($arr); $i++){
        if($arr[$i] > 0){
            $temp_plus = $temp_plus + 1;
        }else if($arr[$i] < 0){
            $temp_min = $temp_min + 1;
        }else{
            $temp_netral = $temp_netral + 1;
        }
    }

    //divide the temporary variable with the length of the array and store it to end variable
    $akhir_plus = $temp_plus / count($arr);
    $akhir_min = $temp_min / count($arr);
    $akhir_netral = $temp_netral / count($arr);
    echo (round($akhir_plus, 6)."<br>".round($akhir_min, 6)."<br>".round($akhir_netral, 6));
}

echo plusminus($ar);

?>