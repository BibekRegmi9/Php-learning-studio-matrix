<?php

$password = "pizza123";
$hash = password_hash($password, PASSWORD_DEFAULT);

echo $hash;
echo "\n";

if(password_verify("pizza123", $hash)){
    echo "Successfully logged in";
} else {
    echo "incorrect password";
}



// hashing a password
function hashPassword($Plainpassword){
    $encryptedPassword = password_hash($Plainpassword, PASSWORD_DEFAULT);
    echo $encryptedPassword;
}


hashPassword("bibek");


// hashing using salt in bcrypt











?>