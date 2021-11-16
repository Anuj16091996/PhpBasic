<?php
const SENTENCE = 'A sentence to be displayed by putting one word per line';
function showTitle($title)
{
    echo "<br/><b>&#9830; $title </b><br/>";
    $array= explode(' ', SENTENCE);
     if($title=='Exercise 1'){

            foreach ($array as $i){
               echo nl2br( "$i \n");
            }
     }elseif ($title=='Exercise 2'){
         $arrayrev= array_reverse($array, SENTENCE);
         foreach ($arrayrev as $i){
             echo nl2br( "$i \n");
         }
     }elseif ($title=='Exercise 3'){
         $max = sizeof($array);
         echo "Number of words: $max";
         echo nl2br( "\n");
     }elseif ($title=='Exercise 4'){
         echo "Number of Characters: ".strlen(SENTENCE);
         echo nl2br( "\n");
     }elseif ($title=='Exercise 5'){
         $subjec=str_replace(' ', '', SENTENCE);
         echo "Number of Characters Without Space: ".strlen($subjec);
         echo nl2br( "\n");
     }elseif ($title=='Exercise 6'){
         $str = strtoupper(SENTENCE);
         echo $str;
         echo nl2br( "\n");
     }elseif ($title=='Exercise 7'){
         $bar = ucwords(SENTENCE);
             echo $bar;
            echo nl2br( "\n");
     }else{
         $str = strtolower(SENTENCE);
         echo $str;
         echo nl2br( "\n");
     }


}



showTitle('Exercise 1');

showTitle('Exercise 2');

showTitle('Exercise 3');

showTitle('Exercise 4');

showTitle('Exercise 5');

showTitle('Exercise 6');

showTitle('Exercise 7');

showTitle('Exercise 8');
?>