<?php





function getMax($array)
{
    $n = count($array);
    $max = $array[0];
    for ($i = 1; $i < $n; $i++)
        if ($max < $array[$i])
            $max = $array[$i];
    return $max;
}


function getMin($array)
{
    $n = count($array);
    $min = $array[0];

    for ($i = 1; $i < $n; $i++)
        if ($array[$i] < $min)
            $min = $array[$i];

    return $min;
}



$array = array(1, 2, 3, 4, 5, 90, -12);
echo (getMin($array));


// Try catch

function checkNum($number)
{
    if ($number > 1) {
        throw new Exception("Value must be less than one");
    }

    return true;
}



// checkNum(11);




// try catch
function divide($divided, $divisior)
{
    if ($divisior == 0) {
        throw new Exception("Division by zero error");
    }
    return $divided / $divisior;
}

echo divide(5, 0);








?>