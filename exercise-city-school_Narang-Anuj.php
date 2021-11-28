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

$userSelection="";
if (isset($_POST['form_submit'])){
    $userSelection =($_POST["select"]);
}
$t=array(array('a','b','c'),array('d','e','f'));
echo $t[1][1];

?>


<html>

<body>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <h2>Select City:
    <select name="select" >
        <?php
            if(isset($connection)){
                $query = "select distinct city from teachers ;";
                $stmt = $connection->prepare($query);
                $stmt->execute();
                $stmt->setFetchMode(PDO::FETCH_ASSOC);
                foreach ($stmt->fetchAll() as $number=>$array) {
                    foreach ($array as $key=>$value){
                        echo "<option value=$value>$value</option>";
                    }
                }
            }

        ?>
    </select>
    </h2>
    <button type="submit" name="form_submit">
        Submit
    </button>
</form>
<?php
if($userSelection!=""){
    if(isset($connection)) {
        $query = "select Name from teachers where City='$userSelection' ;";
        $stmt = $connection->prepare($query);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        foreach ($stmt->fetchAll() as $number=>$array) {
            foreach ($array as $key=>$value){
                echo "$value<br>";
            }
        }
        $connection = null; //Closes connection with the database
    }
}

?>
</body>
</html>
