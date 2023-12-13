<?php

setcookie("fav_food", "pizza", time() + (86400 * 2), "/");
setcookie("fav_drink", "coffee", time() + (86400 * 3), "/");
setcookie("fav_place", "hometown", time() + (86400 * 100), "/");


foreach($_COOKIE as $key => $value){
    echo "{$key} = {$value} <br>";
}




?>