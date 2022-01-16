<?php

//My solution for this problem is to slice the string first using substr function and store it into variable
//u need to slice the last two chars (PM/AM), first 2 chars (hour part), and the rest of the string
//after that u can use conditional to validate the result

$waktu = "12:05:45AM";

function timeConversion($time){
    //variable to store the first 2, last 2 and the rest of the string
    $kondisi = substr($time, 8, 2);
    $jam = substr($time, 0, 2);
    $sisa = substr($time, 2, 6);

    //conditional to find the right result
    if($kondisi == "PM" && $jam < 12){
        return $jam + 12 . $sisa;
    }else if($kondisi == "AM" && $jam == 12){
        return $jam = "00" . $sisa;
    }else{
        return $jam . $sisa;
    }

}

echo timeConversion($waktu);

?>