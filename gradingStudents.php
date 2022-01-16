<?php

//my solution for this problem is to make the conditional and count the modulus, as we know in this problem we have to
//round the score to 5 if its modulus is 3 or more, so we just have to make a conditional and count the modulus if the
//modulus value is 3 or 4, and dont forget that the score below 38 will remain the same

$grades = [73, 67, 38, 33];

function gradingStudents($arr){

    for($i=0; $i < count($arr); $i++){
        //i made the conditional to validate that the score must be 38 or higher
        if($arr[$i] >= 38){
            //count the modulus, if its modulus is 3 or 4 then round the scores to 5, so if its 78 or 79 than it will
            //automatically rounded to 80, and so on so on
            if($arr[$i]%5==3 || $arr[$i]%5==4){
            $arr [$i] = $arr[$i] + 5 - ($arr[$i]%5);
        }  
    }
}
    print_r ($arr);
}

gradingStudents($grades);

?>