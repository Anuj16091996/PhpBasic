<?php

session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>

<body>
<div class="w3-container">
<table class="w3-table-all">
    <thead>
    <tr>
        <th scope="col">Add to cart</th>
        <th scope="col">Remove from cart</th>
        <th scope="col">Remove all</th>
        <th scope="col">Current cart</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <?php
        if(!isset($_SESSION['apple'])) {
            $apple = 0;
            $_SESSION["apple"]=$apple;
        }
        echo "<td><a href='exercise-cart-Narang-Anuj.php?page=plus_Apple'>+1 Apple</a></td>";
        if(isset($_GET['page']) && $_GET['page'] == "plus_Apple"){
            $apple = ++$_SESSION["apple"];

        }

        echo "<td><a href='exercise-cart-Narang-Anuj.php?page=minus_Apple'>-1 Apple</a></td>";
        if(isset($_GET['page']) && $_GET['page'] == "minus_Apple"){
            $apple = --$_SESSION["apple"];

        }

        echo "<td><a href='exercise-cart-Narang-Anuj.php?page=remove_Apple'>remove all</a</td>";
        if(isset($_GET['page']) && $_GET['page'] == "remove_Apple"){
            $_SESSION["apple"]=0;

        }

        if (isset($_SESSION['apple'])){
            echo "<td>";
            echo ($_SESSION['apple']);
            echo "</td>";
        }
        ?>
    </tr>
    <tr>
        <?php
        if(!isset($_SESSION['pear'])) {
            $pear = 0;
            $_SESSION["pear"]=$pear;
        }


        echo "<td><a href='exercise-cart-Narang-Anuj.php?page=plus_Pear'>+1 pear</a></td>";
        if(isset($_GET['page']) && $_GET['page'] == "plus_Pear"){
            $pear = ++$_SESSION["pear"];

        }

        echo "<td><a href='exercise-cart-Narang-Anuj.php?page=minus_Pear'>-1 pear</a></td>";
        if(isset($_GET['page']) && $_GET['page'] == "minus_Pear"){
            $apple = --$_SESSION["pear"];

        }

        echo "<td><a href='exercise-cart-Narang-Anuj.php?page=remove_Pear'>remove all</a</td>";
        if(isset($_GET['page']) && $_GET['page'] == "remove_Pear"){
            $_SESSION["pear"] = 0;
  ;
        }

        if (isset($_SESSION["pear"])){
            echo "<td>";
            echo $_SESSION["pear"];
            echo "</td>";
        }
        ?>
    </tr>
    <tr>
        <?php
        if(!isset($_SESSION['banana'])) {
            $banana = 0;
            $_SESSION['banana']=$banana;

        }
        echo "<td><a href='exercise-cart-Narang-Anuj.php?page=plus_Banana'>+1 banana</a></td>";
        if(isset($_GET['page']) && $_GET['page'] == "plus_Banana"){
            $banana = ++ $_SESSION['banana'];

        }

        echo "<td><a href='exercise-cart-Narang-Anuj.php?page=minus_Banana'>-1 banana</a></td>";
        if(isset($_GET['page']) && $_GET['page'] == "minus_Banana"){
            $banana = -- $_SESSION['banana'];

        }

        echo "<td><a href='exercise-cart-Narang-Anuj.php?page=remove_All'>remove all</a</td>";
        if(isset($_GET['page']) && $_GET['page'] == "remove_All"){
            $_SESSION['banana']=0;
        }

        if (isset( $_SESSION['banana'])){
            echo "<td>";
            echo  $_SESSION['banana'];
            echo "</td>";
        }
        ?>
    </tr>
    <tr>
        <?php

        echo "<td><a href='exercise-cart-Narang-Anuj.php?page=ClearAll'>Clear The Basket</a</td>";
        if(isset($_GET['page']) && $_GET['page'] == "ClearAll"){
         $_SESSION['banana']=0;
         $_SESSION['pear']=0;
          $_SESSION["apple"]=0;
        }
     ?>
    </tr>
    </tbody>
</table>

</div>
</body>
</html>
