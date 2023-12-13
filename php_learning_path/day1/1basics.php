<?php
$colors = array('green', 'orange', 'yellow', 'black');

// echo $colors[2];
// echo $color[3];



// comparison operator
$a = 9 > 5;
$b = 10 != 10;
$c = $a || $b;
$d = $a || $b;
$e = $b && $c;
$f = $a || $d;

$logic = array($a, $b, $c, $d, $e, $f);

// var_dump($logic);


// If else
if ($a > $b) {
    echo '$a is greater than $b';
} else if ($b > $a) {
    echo '$b is greater than $a';
} else {
    echo '$a and $b are equal';
}


$positive = false;
if ($positive) {
    echo 'the number is positive';
} else {
    echo 'the number is negative' . "\n";
}

// ternary operator
$result = $positive ? 'positive' : 'negative';
echo $result . "\n";



// switch statements
$total = 10;
switch ($total) {
    case 1:
        echo '1';
        break;
    case 2:
        echo '2';
        break;
    case 3:
        echo '3';
        break;
    case 10:
        echo 'ans is 10' . "\n";
        break;
    default:
        echo 'Total is more than 3';
}


// switch
$favcolor = 'green';
switch ($favcolor) {
    case "red":
        echo "Your favorite color is red!";
        break;
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
}


echo "\n";

// Match expression
$colors = 'Grey';
$find_colors = match ($colors) {
    'Red' => 'color is red',
    'Blue' => 'color is blue',
    'Green' => 'color is green',
    'Yellow' => 'color is yellow',
    default => 'Color not found'
};

echo $find_colors . "\n";

echo "\n";

// guessing game
$min = 5;
$max = 100;
$guess = 8;


if ($guess < $min) {
    echo "guess higher number";
} else if ($guess > $max) {
    echo "guess lower number";
}



// arithmetic operator
echo 5**2;
echo "\n";

// find even or odd
$ab = 50;
if($ab % 2 == 0){
    echo "This is an even number";

}else {
    echo "odd number";
}


echo "\n";

// method 1
$ans1 = (14 + 82 -32 % 2)**2;
$ans2 = 18 * (3 / 6-9) * 10;
$ans3 = 5 * (12 / 2 -8 * 4 + 12 * 6);
$answers = array($ans1, $ans2, $ans3);
var_dump($answers);


//method 2
$result = array();

$result[] = (14 + 82 -(32 / 2))**2;
$result[] = 18 * ((3 / 6)-9) * 10;
$result[] = 5 * ((12 / 2) - (8 * 4) + (12 * 6));

print_r($result); 



