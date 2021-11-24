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
        echo "<td><a href='exercise-cart-Narang-Anuj.php?page=addApple'>+1 Apple</a></td>";
        if(isset($_GET['page']) && $_GET['page'] == "addApple"){
            $apple = ++$_COOKIE['apple'];
            setcookie("apple", $apple, strtotime( '+30 days' ));
        }

        echo "<td><a href='exercise-cart-Narang-Anuj.php?page=minusApple'>-1 Apple</a></td>";
        if(isset($_GET['page']) && $_GET['page'] == "minusApple"){
            $apple = --$_COOKIE['apple'];
            setcookie("apple", $apple, strtotime( '+30 days' ));
        }

        echo "<td><a href='exercise-cart-Narang-Anuj.php?page=removeApple'>remove all</a</td>";
        if(isset($_GET['page']) && $_GET['page'] == "removeApple"){
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
        echo "<td><a href='exercise-cart-Narang-Anuj.php?page=addPear'>+1 pear</a></td>";
        if(isset($_GET['page']) && $_GET['page'] == "addPear"){
            $pear = ++$_COOKIE['pear'];
            setcookie("pear", $pear, strtotime( '+30 days' ));
        }

        echo "<td><a href='exercise-cart-Narang-Anuj.php?page=minusPear'>-1 pear</a></td>";
        if(isset($_GET['page']) && $_GET['page'] == "minusPear"){
            $apple = --$_COOKIE['pear'];
            setcookie("pear", $apple, strtotime( '+30 days' ));
        }

        echo "<td><a href='exercise-cart-Narang-Anuj.php?page=removePear'>remove all</a</td>";
        if(isset($_GET['page']) && $_GET['page'] == "removePear"){
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
        echo "<td><a href='exercise-cart-Narang-Anuj.php?page=addBanana'>+1 banana</a></td>";
        if(isset($_GET['page']) && $_GET['page'] == "addBanana"){
            $banana = ++$_COOKIE['banana'];
            setcookie("banana", $banana, strtotime( '+30 days' ));
        }

        echo "<td><a href='exercise-cart-Narang-Anuj.php?page=minusBanana'>-1 banana</a></td>";
        if(isset($_GET['page']) && $_GET['page'] == "minusBanana"){
            $banana = --$_COOKIE['banana'];
            setcookie("banana", $banana,strtotime( '+30 days' ));
        }

        echo "<td><a href='exercise-cart-Narang-Anuj.php?page=minusBanana'>remove all</a</td>";
        if(isset($_GET['page']) && $_GET['page'] == "minusBanana"){
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
    </tbody>
</table>
</body>
</html>
