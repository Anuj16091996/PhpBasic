<?php

const HOME = 'Home';
const PRODUCT = 'Products';
const ABOUT = 'About Us';
const IDEA = 'Gift Ideas';

//The name of the menu item that should be active
$selected = IDEA;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Variable Attributes</title>
    <style>
        #navigation ul {
            width: 150px;
        }

        .menu-item {
            background-color: #e1f4f3;
            color: #0000cc;
        }

        .selected {
            background-color: #fea799;
        }
    </style>
</head>

<body>
<h1>Displaying an active item from the menu</h1>
<nav id="navigation">
    <ul>
        <li><?php if ($selected==HOME){ echo "<p class='selected'>$selected</p>";}else{echo "<p class='menu-item'>Home</p>";} ?> </li>
        <li><?php if ($selected==ABOUT){ echo "<p class='selected'>$selected</p>";}else{echo "<p class='menu-item'>About Us</p>";} ?> </li>
        <li> <?php if ($selected==PRODUCT){ echo "<p class='selected'>$selected</p>";}else{echo "<p class='menu-item'>Products</p>";} ?>  </li>
        <li> <?php if ($selected==IDEA){ echo "<p class='selected'>$selected</p>";}else{echo "<p class='menu-item'>Gift Ideas</p>";} ?> </li>
    </ul>
</nav>
</body>

</html>