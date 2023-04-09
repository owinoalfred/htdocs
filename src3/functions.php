<?php
function add(...$numbers){
    $sum= 0;

    foreach($numbers as $n){
        $sum+=$n;

    }
    return $sum;
}

echo add(33,34,56,75);

$dbconnect = mysqli_connect('databasename', "username", 'password');

?>