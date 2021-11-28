<?php

if (isset($_GET['error'])) {
    echo "PLEASE FILL OUT THE FORM <br />";
}

$optionTypes = [
    'week', 'checkbox', 'color', 'date', 'datetime-local', 'email', 'file',
    'hidden', 'image', 'month', 'number', 'password', 'radio', 'range', 'reset',
    'search', 'submit', 'tel', 'text', 'time', 'url'
]

?>

<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <STYLE>
        input[type=text], select {
            width: 100%;
            padding: 12px 20px;
            background-color: #e5e5e5;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type=password], select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            background-color: #e5e5e5;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=submit] {
            width: 100%;
            background-color: #4c68af;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }
    </STYLE>
</head>

<body>
<div class="w3-container w3-blue">
    <h2>Input Form in Array</h2>
</div>

<form action="form.php" class="w3-container" method="get">
    Name<br><input type="text" name="F_Name" required><br>
    Type<br><?php
        echo "<select name='optionTypes'>";
        foreach ($optionTypes as $dropValues){
            echo "<option value='$dropValues'>$dropValues</option>";
        }
        echo "</select>";
    ?>
    ID<br><input type="text" name="ID" required><br>
    Label<br><input type="text" name="Label" required><br>
    <input type="submit" name="Submit" >
</form>

</body>

</html>
