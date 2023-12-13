<?php

// $name = "Bibek";
// echo $name;

// echo "Regmi";

// echo "new line \n";

// echo "second new line \n";

// echo "1 first \t";

// Array
// $colors = array('r', 'g', 'b');
// echo $colors[2];


// $x = 5;      // $x is an integer
// $y = "John"; // $y is a string
// echo $x;
// echo $y;

// $x = 5;
// var_dump($x);


// $z = 7;

// function test(){
    // echo "<p> var x inside the function is: $z </p>";
// }

// test();
// echo " var x outside the function is: $z ";

// $array = array('id', 'name', 'roll', 'class', 'age', 'address');

// echo $array;


// scope and global scope
$x = 56;
$y = 4;

function sum(){
    global  $x , $y;
    $y  = $x + $y;
}

sum();
echo $y;
print_r($y);


// associative array

$student_address = array(
    'bibek' => 'Nepal',
    'john' => 'Belgium',
    'sara' => 'Canada',
    'Sammy' => 'New Zealand'
)


// print_r( $student_address );

// $brothers = array(
//     'Joe' => array(
//         'age' => 23,
//         'job' => 'teacher',

//     ),
//     'Sammy' => array(
//         'age' => 34,
//         'job' => 'art'
//     ),
// )





?>

