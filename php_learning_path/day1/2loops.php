<?php

// $i = 0;


// do-while
// do {
//     echo "Hello World". "\n";
//     $i++;
// } while ($i < 10)



// while
// while($i <= 10){
//     echo $i . "\n";
//     $i++;
// }



// for-loop
// for ($i = 0; $i < 10; $i++) {
//     echo "Hello" . "\n";
// }


// $colors = array('red', 'green', 'blue', 'yellow');
// for ($i = 0; $i < sizeof($colors); $i++) {
//     echo $colors[$i] . " ";
// }



// for-each loop
$colors = array('red', 'green', 'blue', 'yellow');

foreach ($colors as $color){
    echo $color.' ';
}

$home_town = array(
    'Bibek' => 'Germany',
    'Rahul' => 'Austria',
    'David' => 'Neitherland',
    'Hamsel' => 'Czech Republic'
);

foreach ($home_town as $name => $town){
    echo $name; //. $town . ' ';
}

echo "\n";

// fibonacci number
$first = 0;
$second = 1;
$next = null;

while( $first < 100){
    echo $first . ', ';
    $next = $first + $second;
    $first = $second;
    $second = $next;
}
