<?php
define('IMG_PATH', 'images/');
define('FILENAME_K', 'filename');
define('ALT_K', 'alt');
define('TEMPS_K', 'temps');

$forecasts = array(
    '2021-04-11' => array(
        FILENAME_K => 'clearance.gif',
        ALT_K => 'clearance image',
        TEMPS_K => '-17ºC',
    ),
    '2021-04-12' => array(
        FILENAME_K => 'sun_cloud.gif',
        ALT_K => 'sun and cloud image',
        TEMPS_K => '-11ºC',
    ),
    '2021-04-13' => array(
        FILENAME_K => 'snow.gif',
        ALT_K => 'snow image',
        TEMPS_K => '-12ºC',
    ),
    '2021-04-14' => array(
        FILENAME_K => 'sun.gif',
        ALT_K => 'sun image',
        TEMPS_K => '-15ºC',
    ),
    '2021-04-15' => array(
        FILENAME_K => 'snow.gif',
        ALT_K => 'snow image',
        TEMPS_K => '-11ºC',
    ),
    '2021-04-16' => array(
        FILENAME_K => 'sun.gif',
        ALT_K => 'sun image',
        TEMPS_K => '-15ºC',
    ),
);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <title>Weather Table</title>
</head>

<body>
<div>
    <header>
        <h1>Weather Table</h1>
    </header>
    <main>
        <table>

                <?php
                foreach ($forecasts as $date => $Value) {
                    echo "<tr>";
                    echo "<td>$date</td>";
                    echo "<td> <img src=" . IMG_PATH . $Value[FILENAME_K] . " alt = " . $Value[ALT_K] . "> </td>";
                    echo "<td>" . $Value[TEMPS_K] . "</td>";
                    echo "</tr>";
                }


                ?>


        </table>
    </main>
</div>

</body>

</html>