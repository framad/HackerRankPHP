<?php

//My solution for this problem is simple, i just have to do for loops to calculate between the location of the fruits
// with all of the index for each fruits, use for loop to calculate from index 0 to last index and then use conditional
// to find where the fruits will fall, and if it falls around 7 until 11 then fill the apel / jeruk variable, 1 for each
// fruits that fall withing the range

$titik_awal_rumah = 7;
$titik_akhir_rumah = 11;
$lokasi_pohon_apel = 5;
$lokasi_pohon_jeruk = 15;
$jarak_apel_jatuh = [-2, 2, 1];
$jarak_jeruk_jatuh = [5, -6];

function AppleOrange($s, $t, $a, $b, $apples, $oranges){
    //declare variables that will store value of how many fruits that fall within range
    $apel = 0;
    $jeruk = 0;

    //do for loops to calculate the location of the tree with each index of the array
    for($i=0; $i < count($apples); $i++){
        if($a + $apples[$i] >= $s && $a + $apples[$i] <= $t){
            $apel++;
        }
    }
    //return and print the variable that has been declare earlier
    echo "$apel <br>";

    //repeat the previous step
    for($j=0; $j < count($oranges); $j++){
        if($b + $oranges[$j] >= $s && $b + $oranges[$j] <= $t){
            $jeruk++;
        }
    }
    echo $jeruk;
}

echo AppleOrange($titik_awal_rumah, $titik_akhir_rumah, $lokasi_pohon_apel, $lokasi_pohon_jeruk, $jarak_apel_jatuh, $jarak_jeruk_jatuh);

?>