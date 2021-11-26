<?php
const serverName = "localhost";
const port = 3307;
const database = "school";
const username = "dating";
const password = "Anuj@1930";
const connectionString = "mysql:host=" . serverName . ";dbname=" . database . ";port=" . port;

try {
    $connection = new PDO(connectionString, username, password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $exception) {
    echo "Connection Failed: {$exception->getMessage()}";
}

if (isset($connection)) {
    $query = "select Name, Year_Assignment,`Rank` from teachers where Year_Assignment>2000";
    $stmt = $connection->prepare($query);
    $stmt->execute();

    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

    echo "<hr />";
    echo "<table class='w3-table'>";
    echo "<tr>";
    echo "<td><b>Name</b></td>";
    echo "<td><b>Year_Assigment</b></td>";
    echo "<td><b>Rank</b></td>";
     echo "</tr>";
    foreach ($stmt->fetchAll() as $number=>$array) {
        echo "<tr>";
        foreach ($array as $key=>$value){
            echo "<td>$value</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}
$connection = null; //Closes connection with the database
?>

<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>
</body>
</html>

