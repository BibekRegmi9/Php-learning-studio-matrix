<?php


//functions
function array_print($arr){
    for($i = 0; $i < sizeof($arr); $i++){
        echo $i . '=' . $arr[$i]. ' ';
    }
}

$arr = array(1, 3, 4, 7, 9, 12, 55, 100);

array_print($arr);



function sum($m, $n){
    return $m + $n;
    
}



$ans = sum(10, 20);
echo $ans . "\n";



// check palindrome
function is_palindrome($string){
    // convert string to lower case and remove spaces
    $string = str_replace(' ', '', strtolower($string));

    $rev = strrev($string);
    if($string == $rev){
        echo "True";
    } else {
        echo "false";
    }
    
    
}
is_palindrome("madam");


echo "\n";

function multipplier($a, $multiplier){
    return $a * $multiplier;
}

echo multipplier(2, 2);


// Anonymouse function













?>



