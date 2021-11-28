<?php
if (!isset($_GET["Submit"])){
    header('Location: create-input.php?error');
}



$forms = [
    ["action" => "management.php", "method" => "post"],
    ["type" => "text", "id" => "lastName", "name" => "lastName", "label" => "Last Name"],
    ["type" => "text", "id" => "firstName", "name" => "firstName", "label" => "First Name"],
    ["type" => "password", "id" => "pwd", "name" => "pwd", "label" => "Password"],
    ["type" => "checkbox", "id" => "enroll", "name" => "enroll", "label" => "Enroll"],
    ["type" => "checkbox", "id" => "terms", "name" => "terms", "label" => "Accept Terms & Conditions"],
    ["type" => "submit", "id" => "submit", "name" => "input", "label" => "Sent"],
];
$removingLast=array_pop($forms);
$addIntoForm=["type"=>$_GET["optionTypes"],"id"=>$_GET["ID"],"name"=>$_GET["F_Name"],"label"=>$_GET["Label"]];
array_push($forms,$addIntoForm);
array_push($forms,$removingLast);

?>
<html>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>
<?php
echo "<div  class='w3-blue w3-container'>";
echo "<h2>My Form</h2>";


foreach ($forms as $key => $arrayValue) {

    if ($key == 0) {
        echo "<form  class='w3-container w3-card-4 w3-light-grey'";
        foreach ($arrayValue as $methodId => $methodPost) {
            echo "$methodId='$methodPost' ";
        }
        echo ">";
    } else {
        if ($arrayValue['type'] == "submit") {
            echo "<input class='w3-input w3-border' ";
            foreach ($arrayValue as $methodId => $methodPost) {
                echo "$methodId='$methodPost' ";
                break;
            }
            echo "><br>";
        } else {
            echo "$arrayValue[label]<br>";
            echo "<input class='w3-input w3-border'";
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
