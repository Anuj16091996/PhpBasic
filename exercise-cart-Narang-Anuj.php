<!DOCTYPE html>
<html lang="en">

<body>
<table class="table table-striped">
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
        if(!isset($_COOKIE['apple'])) {
            $apple = 0;
            setcookie("apple", $apple, strtotime( '+30 days' ));
        }
        echo "<td><a href='exercise-cart-Narang-Anuj.php?page=plus_Apple'>+1 Apple</a></td>";
        if(isset($_GET['page']) && $_GET['page'] == "plus_Apple"){
            $apple = ++$_COOKIE['apple'];
            setcookie("apple", $apple, strtotime( '+30 days' ));
        }

        echo "<td><a href='exercise-cart-Narang-Anuj.php?page=minus_Apple'>-1 Apple</a></td>";
        if(isset($_GET['page']) && $_GET['page'] == "minus_Apple"){
            $apple = --$_COOKIE['apple'];
            setcookie("apple", $apple, strtotime( '+30 days' ));
        }

        echo "<td><a href='exercise-cart-Narang-Anuj.php?page=remove_Apple'>remove all</a</td>";
        if(isset($_GET['page']) && $_GET['page'] == "remove_Apple"){
            $apple = 0;
            setcookie("apple", $apple , strtotime( '+30 days' ));
        }

        if (isset($_COOKIE['apple'])){
            echo "<td>";
            echo $_COOKIE['apple'];
            echo "</td>";
        }
        ?>
    </tr>
    <tr>
        <?php
        if(!isset($_COOKIE['pear'])) {
            $pear = 0;
            setcookie("pear", $pear, strtotime( '+30 days' ));
        }
        echo "<td><a href='exercise-cart-Narang-Anuj.php?page=plus_Pear'>+1 pear</a></td>";
        if(isset($_GET['page']) && $_GET['page'] == "plus_Pear"){
            $pear = ++$_COOKIE['pear'];
            setcookie("pear", $pear, strtotime( '+30 days' ));
        }

        echo "<td><a href='exercise-cart-Narang-Anuj.php?page=minus_Pear'>-1 pear</a></td>";
        if(isset($_GET['page']) && $_GET['page'] == "minus_Pear"){
            $apple = --$_COOKIE['pear'];
            setcookie("pear", $apple, strtotime( '+30 days' ));
        }

        echo "<td><a href='exercise-cart-Narang-Anuj.php?page=remove_Pear'>remove all</a</td>";
        if(isset($_GET['page']) && $_GET['page'] == "remove_Pear"){
            $pear = 0;
            setcookie("pear", $pear , strtotime( '+30 days' ));
        }

        if (isset($_COOKIE['pear'])){
            echo "<td>";
            echo $_COOKIE['pear'];
            echo "</td>";
        }
        ?>
    </tr>
    <tr>
        <?php
        if(!isset($_COOKIE['banana'])) {
            $banana = 0;
            setcookie("banana", $banana, strtotime( '+30 days' ));
        }
        echo "<td><a href='exercise-cart-Narang-Anuj.php?page=plus_Banana'>+1 banana</a></td>";
        if(isset($_GET['page']) && $_GET['page'] == "plus_Banana"){
            $banana = ++$_COOKIE['banana'];
            setcookie("banana", $banana, strtotime( '+30 days' ));
        }

        echo "<td><a href='exercise-cart-Narang-Anuj.php?page=minus_Banana'>-1 banana</a></td>";
        if(isset($_GET['page']) && $_GET['page'] == "minus_Banana"){
            $banana = --$_COOKIE['banana'];
            setcookie("banana", $banana,strtotime( '+30 days' ));
        }

        echo "<td><a href='exercise-cart-Narang-Anuj.php?page=remove_All'>remove all</a</td>";
        if(isset($_GET['page']) && $_GET['page'] == "remove_All"){
            $banana = 0;
            setcookie("banana", $banana , strtotime( '+30 days' ));
        }

        if (isset($_COOKIE['banana'])){
            echo "<td>";
            echo $_COOKIE['banana'];
            echo "</td>";
        }
        ?>
    </tr>
    <tr>
        <?php

        echo "<td><a href='exercise-cart-Narang-Anuj.php?page=ClearAll'>Clear The Basket</a</td>";
        if(isset($_GET['page']) && $_GET['page'] == "ClearAll"){
            $banana = 0;
            setcookie("banana", $banana , strtotime( '+30 days' ));

            $banana = 0;
            setcookie("banana", $banana , strtotime( '+30 days' ));

            $pear = 0;
            setcookie("pear", $pear , strtotime( '+30 days' ));

            $apple = 0;
            setcookie("apple", $apple , strtotime( '+30 days' ));
        }
     ?>
    </tr>
    </tbody>
</table>
</body>
</html>
