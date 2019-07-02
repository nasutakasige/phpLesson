<?php 

for ($i == 2; $i <= 100; $i++) {
    $isSosu = true;

    // 素数判定
    for ($j = 2; $j < $i; $j++) {
        if ($i % $j == 0 ) {
            $isSosu = false;
            break;
        }
    }
    
    if ($isSosu) {
        echo "$i\n";
    } 
}

//$i = 8;


    