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
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>
<?php
echo "<div  class='w3-blue w3-container'>";
echo "<h2>My Form</h2>";
echo "<form class='	w3-grey'>";
 foreach($forms as $key=> $arrayValue){

     foreach ($arrayValue as $a=>$b){
         echo "[$a=$b]"  ;
     }

}
echo "</form>";
echo "</div>";
?>
</body>
</html>