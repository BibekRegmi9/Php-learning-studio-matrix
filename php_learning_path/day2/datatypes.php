<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php


    //array
    $names = array('jon', 'smith', 'raj', 'danny', 'milo');

    echo $names[1];
    print_r($names);


    $names[5] = 'Jimmy';
    print_r($names);


    //associative array
    $customers = array(
        'firstName' =>  'jon',
        'lastName' => 'carter',
        'age' => '32',
        'address' => 'kathmandu',
        'phone' => '6576587678',
        'email' => 'jon@gmail.com'
    );


    print_r($customers);
    echo $customers['age'];
    echo "\n";
    echo $customers['email'];
    echo "\n";
    echo $customers['address'];
    echo "\n";
    echo $customers['firstName'] . " " . $customers['lastName'];



    echo "\n";

    // function

    //implode
    $num = array(1, 3, 45, 6, 7, 8);
    $num = implode(', ', $num);
    print_r($num);

    //explode
    $num = explode(', ', $num);
    print_r($num);



    //array shift
    $color = array('banana', 'apple', 'orange', 'pineapple');
    array_shift($color);
    print_r($color);


    //array push
    $arr = array(1, 2, 3, 4, 5, 6);
    array_push($arr, 7, 8, 9, 10);
    print_r($arr);



    // type casting
    echo gettype($arr) . "\n";





    //constant
    $max_width = 3000;
    define("MAX_WIDTH", 3000);
    echo MAX_WIDTH . "\n";




    // if statement
    $a = 4;
    $b = 3;

    if ($a > $b) {
        echo "A is greater than B" . "\n";
    };



    //switch statements
    $ans = 'zero';
    switch ($ans) {
        case 'one':
            echo 'wrong answer';
            break;
        case 'two':
            echo 'wrong answer';
            break;
        case 'three':
            echo 'wrong answer';
            break;
        case 'four':
            echo 'correct answer';
            break;
        default:
            echo 'answer not found';
            break;
    };

    echo "\n";


    // while loops
    $i = 1;
    while ($i < 10) {
        echo $i . "\n";
        $i++;
    };

    echo "\n";





    // for each loop
    $arrr = array(2, 4, 3, 6);
    foreach ($arrr as $no) {
        echo $no . "\n";
    };
    echo implode('=>', $arrr);



    echo "\n";



    // functions
    function greet($string)
    {
        echo $string;
    };

    greet('Welcome') . "\n";


    echo "\n";

    // returning multiple vlaue from a function
    function add_subt($val1, $val2)
    {
        $add = $val1 + $val2;
        $subt = $val1 - $val2;
        return array($add, $subt);
    }

    $result = add_subt(10, 10);
    echo "add => " . $result[0] . " subtract => " . $result[1] .  "\n";






    // Global and local scope 
    $bar = "outside"; // globla scope

    function boo()
    {
        $bar = "inside";
    }

    // Get and Post variable
    

    ?>
</body>

</html>