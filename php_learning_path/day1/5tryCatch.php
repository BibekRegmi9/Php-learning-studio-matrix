<?php


function multiply($a, $b){
    $ans = $a * $b;

    if( $ans < 0) {
        throw new Exception("Negative value");
    } else {
        return $ans;
    }
}



try {
    echo multiply(-1 , 2);
} catch ( Exception $e) {
    echo $e -> getMessage();
}



?>