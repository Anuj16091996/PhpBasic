<?php

function showTitle($title)
{
    echo "<br/><b>&#9830; $title</b><br/>";

    if($title=="Exercise 1 - Sort Alphabetically"){
        global $colors;
        sort($colors);
        for($pos=0;$pos<count($colors);$pos++){
            echo "$colors[$pos]<br>" ;
        }
        echo '<hr/>';
    }elseif ($title=="Exercise 2: Make them UPPERCASE"){
        global $colors;
        sort($colors);
        for($pos=0;$pos<count($colors);$pos++){
            $uppercase=strtoupper($colors[$pos]);
            echo "$uppercase<br>" ;
        }

        echo '<hr/>';
    }else{
        global $colors;
        global $otherColors;

        $output=array_merge($colors,$otherColors);
        for($pos=0;$pos<count($output);$pos++){
            echo "$output[$pos] " ;
        }

        echo '<hr/>';
    }

}

$colors = array(
    'red',
    'blue',
    'black',
    'green',
    'grey',
);

$otherColors = array(
    'green',
    'blue',
    'black',
);


showTitle('Exercise 1 - Sort Alphabetically');


showTitle('Exercise 2: Make them UPPERCASE');



showTitle('Exercise 3: Merge 2 Arrays');

