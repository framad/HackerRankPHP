<?php

function staircase($n){
    //do for loop to match with the argumen insert
    for($i=1; $i<=$n; $i++){
        //to make it clear and lookable i write " - ", loop the -
        for($j=$i; $j<=$n; $j++){
            echo "- ";
        }
        //echo the # once first and adding up 1 to 1 until it hits the argumen value
        for($j=1; $j<=$i; $j++){
            echo "# ";
        }
        echo "<br>";
    }
}

echo staircase(6);

?>