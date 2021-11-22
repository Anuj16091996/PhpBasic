<?php

function showTitle($title)
{
    echo "<br/><b>&#9830; $title</b><br/>";

    if ($title=='Exercise 1'){
        echo '<hr/>';
        $today = date("D j M Y G:i:s");
        echo "$today";
        echo '<hr/>';
    }elseif ($title=='Exercise 2 - Show Day'){
        echo '<hr/>';
        $today = date("m");
        echo "$today";
        echo '<hr/>';
    }elseif ($title=='Exercise 3 - Show Month'){
        echo '<hr/>';
        $today1 = date("m");
        $today = date("F");
        echo nl2br("$today1 \n");
        echo "$today";
        echo '<hr/>';
    }elseif ($title=='Exercise 4 - Show Year'){
        echo '<hr/>';
        $today = date("Y");
        echo "$today";
        echo '<hr/>';
    }elseif ($title=='Exercise 5 - Show Day, Month, Year'){
        echo '<hr/>';
        $today1 = date("j, F, Y");
        $today = date("j, n, Y");
        echo nl2br("$today \n");
        echo "$today1";
        echo '<hr/>';
    }elseif ($title=='Exercise 6 (Add 1 month to the constant date)'){
        echo '<hr/>';
        $now = DateTime::createFromFormat('U.u', microtime(true));

         $today = date("D j M Y G:i:s +v" ,strtotime("+1 Month"));
        echo "$today";

        echo '<hr/>';
    }elseif ($title=='Exercise 7 (Number of days since 31 December 1973)'){
        echo '<hr/>';


        $datetime1 = date_create('31-12-1973');
        $today=date_create('16-11-2021');

        $Days= date_diff($datetime1,$today);
        echo $Days->format('%a days');;
        echo '<hr/>';
    }else{
        echo '<hr/>';
        $today = date("D, j M Y");
        echo "$today";
        echo '<hr/>';
    }

}

showTitle('Exercise 1');

showTitle('Exercise 2 - Show Day');

showTitle('Exercise 3 - Show Month');

showTitle('Exercise 4 - Show Year');

showTitle('Exercise 5 - Show Day, Month, Year');

showTitle('Exercise 6 (Add 1 month to the constant date)');

showTitle('Exercise 7 (Number of days since 31 December 1973)');

showTitle('Exercise 8');