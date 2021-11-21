<?php
//Not the idealist associative array but one required for learning. DO NOT MODIFY
$forms = [
    ["action" => "management.php", "method" => "post"],
    ["type" => "text", "id" => "lastName", "name" => "lastName", "label" => "Last Name"],
    ["type" => "text", "id" => "firstName", "name" => "firstName", "label" => "First Name"],
    ["type" => "password", "id" => "pwd", "name" => "pwd", "label" => "Password"],
    ["type" => "checkbox", "id" => "enroll", "name" => "enroll", "label" => "Enroll"],
    ["type" => "checkbox", "id" => "terms", "name" => "terms", "label" => "Accept Terms & Conditions"],
    ["type" => "submit", "id" => "submit", "name" => "input", "label" => "Sent"],
];
?>
<html>
<style>
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
</style>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>
<?php
echo "<div  class='w3-blue w3-container'>";
echo "<h2>My Form</h2>";


foreach ($forms as $key => $arrayValue) {

    if ($key == 0) {
        echo "<form  class='w3-grey w3-container'";
        foreach ($arrayValue as $methodId => $methodPost) {
            echo "$methodId='$methodPost' ";
        }
        echo ">";
    } else {
        if ($key == 6) {
            echo "<input ";
            foreach ($arrayValue as $methodId => $methodPost) {
                echo "$methodId='$methodPost' ";
                break;
            }
            echo "><br>";
        } else {
            echo "$arrayValue[label]<br>";
            echo "<input ";
            foreach ($arrayValue as $methodId => $methodPost) {
                echo "$methodId='$methodPost' ";
            }
            echo "><br><br>";
        }

    }
}
echo "</form>";
echo "</div>";
?>
</body>
</html>