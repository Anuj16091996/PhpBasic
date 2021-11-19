<?php

const USERS = array(
    array('Pierre', 22, '123 rue A', 'aa@ser.com', array('programming' => 5, 'teaching' => 2)),
    array('Julie', 65, '123 rue B', 'bb@ser.com', array('electronics' => 46)),
    array('Martin', 45, '123 rue C', 'cc@ser.com', array('programming' => 21, 'teaching' => 1)),
    array('Melanie', 41, '123 rue D', 'dd@ser.com', array('welding' => 12, 'nutrition' => 6, 'restoration' => 1)),
);

// Black color when age is exactly equal to reference age, green when upper and blue when lower
const AGE_REFERENCE = 45;

// Yellow color when the years of experience is equal to or greater than MINIMUM_EXPERIENCE
const MINIMUM_EXPERIENCE = 5;

$averageAge=0;
$numberOfPerson=0;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Exercise - Table</title>

    <style>
        table,
        td,
        th {
            border: 1px solid black;
            margin: auto;
        }

        ul {
            list-style-type: none;
            padding: 5px;
        }

        .age-reference {
            background-color: black;
            color: white;
        }

        .age-over {
            background-color: green;
            color: white;
        }

        .age-under {
            background-color: blue;
            color: white;
        }

        .experience-invalid {
            background-color: white;
            color: black;
        }

        .experience-valid {
            background-color: yellow;
            color: black;
            font-weight: bold;
        }
    </style>
</head>

<body>

<table>
    <thead>
    <tr>
        <th>Nom</th>
        <th>Age</th>
        <th>Adresse</th>
        <th>Courriel</th>
        <th>Emplois</th>
    </tr>


    <?php for ($i = 0; $i < count(USERS); $i++) {
        $numberOfPerson+=1;
        $temp = USERS[$i];
        if($temp[1]==AGE_REFERENCE){echo "<tr class=age-reference>";}elseif ($temp[1]>AGE_REFERENCE){echo "<tr class=age-over>";}else{echo "<tr class=age-under>";}
        $averageAge+=$temp[1];
        for ($j = 0; $j < count($temp); $j++) {
            if(is_array($temp[$j])){
                echo "<td>";
                foreach ($temp[$j] as $key=> $va ){
                        if($va>=MINIMUM_EXPERIENCE){
                            echo nl2br( "<bgcolor class= experience-valid> $key :$va Years\n </bgcolor>  <br>");
                        }else{
                            echo nl2br( "<bgcolor class= experience-invalid>$key :$va Years\n </bgcolor> <br>");
                        }
                }
                echo "</td>";
            }else{
                echo "<td> $temp[$j]</td>";
            }
        }
        echo "</tr>";
    } ?>
    <tr>
        <th>Average Age</th>
        <th><?=$averageAge/$numberOfPerson?></th>
    </tr>

    </thead>

    <tbody>

    </tbody>

    <tfoot>

    </tfoot>
</table>

</body>

</html>