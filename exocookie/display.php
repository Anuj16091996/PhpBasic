<?php
$products = require('data.php');

$currentPageUrl = $_SERVER["REQUEST_URI"];

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    setcookie("userId", $id, time() + 3600, "/");
    if (!isset($_COOKIE['userId'])) {
        echo "error in cookies";
    }
}else{
    echo "Go to Index";
}

//todo get the product id (See index top todo)
//todo add it to a cookie
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
<a href="index.php"> Return</a>

<div class="w3-card-4 w3-margin w3-center" style="width: 40%;">
    <?php  foreach ($products as $key => $value)
    {
        if ($_COOKIE['userId'] == $value["id"]) { ?>
            <img src="images/<?php echo $value["urlImg"]?> " style="width: 100%;"></a>
        <?php }
    } ?>
    <img src="" style="width: 100%;">
    <div class="w3-container w3-center">
        <!--todo: Show selected title-->
        <?php  foreach ($products as $key => $value)
        {
            if ($_COOKIE['userId'] == $value["id"])
                echo '<p>' . $value["title"] . '</p>';
        } ?>
        <!--todo: Show selected description-->
        <?php  foreach ($products as $key => $value)
        {
            if ($_COOKIE['userId'] == $value["id"])
                echo '<p>' . $value["description"] . '</p>';
        } ?>
    </div>
</div>


</body>
</html>