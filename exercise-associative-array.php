<?php

function showTitle($title)
{
    echo "<br/><b>&#9830; $title</b><br/>";

    if($title=='Exercise 1 (Show first names without iteration)'){
        global $users;
        $firstname=array_column($users,'first_name');
        $firstname=implode("<br>",$firstname);
        echo $firstname;
    echo '<hr/>';
    }elseif ($title=='Exercise 2 (Show the value of the different element between the two collections $firstArray and $secondArray without iterating)'){
        global $users;
        global $firstArray;
        global $secondArray;
        $value=array_diff($firstArray,$secondArray);
        $value=implode("<br>",$value);
        echo $value;
        echo '<hr/>';
    }else{
        global $firstArray;
        $reverse=array_flip($firstArray);
        print_r($reverse);
        echo '<hr/>';
    }

}

$firstArray = array('a' => 'auto', 'b' => 'moto', 'c' => 'airplane');
$secondArray = array('a' => 'auto', 'b' => 'moto');

$users = array(
    array(
        'id' => 2135,
        'first_name' => 'John',
        'last_name' => 'Doe',
    ),
    array(
        'id' => 3245,
        'first_name' => 'Sally',
        'last_name' => 'Smith',
    ),
    array(
        'id' => 5342,
        'first_name' => 'Jane',
        'last_name' => 'Jones',
    ),
    array(
        'id' => 5623,
        'first_name' => 'Peter',
        'last_name' => 'Doe',
    ),
);

showTitle("Exercise 1 (Show first names without iteration)");

showTitle('Exercise 2 (Show the value of the different element between the two collections $firstArray and $secondArray without iterating)');



showTitle('Exercise 3 (Reverse the keys and values of the $firstArray array without iterating)');