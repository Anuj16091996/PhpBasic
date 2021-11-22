<?php
//Variables

function validate_input($input)
{
    $input = trim($input);// Remoes The White Space from both end
    $input = stripslashes($input);//Returns a string with backslashes stripped off.
    $input = htmlspecialchars($input);//converts some predefined characters to HTML entities.
    return $input;
}


function String_Has_number(string $input):bool{
for($pos=0;$pos<strlen($input);$pos++){
        if(ctype_digit($input[$pos])){
            return true;
            break;
        }
}
return false;
}

function Check_Character(string $input): bool
{
    $numberCheck=String_Has_number($input);
    if($numberCheck==true){
        return false;
    }

    $lenght = strlen($input);
    if ($lenght < 50) {
        return true;
    } else {
        return false;
    }
}


function Check_Password( $input):bool{
    $lenght = strlen($input);
    if ($lenght < 50) {
        return true;
    } else {
        return false;
    }
}

function Check_Age(int $input): bool
{


    if ($input >= 18 && $input <= 50) {
        return true;
    } else {
        return false;
    }
}

function Check_Date_Of_Birth($userDateofBirth):bool{


    $todayDate=date("Y-m-d");
    $start_date = strtotime($userDateofBirth);
    $end_date = strtotime($todayDate);


    $input=$diff = abs($start_date - $end_date);
    $years = floor($input / (365*60*60*24));
    if ($years >= 18) {
        return true;
    } else {
        return false;
    }
}


function Check_Email(string $input):bool{
    for($pos=0;$pos<strlen($input);$pos++){
        if($input[$pos]=="@"){
            return true;
            break;
        }
    }
    return false;
}

function Check_Array_Lenght($input):bool{
    $lenght=count($input);
    if ($lenght>=2){
            return true;
    }else{
        return false;
    }
}

$formData = array("inputName" => "", "inputAge" => 0,"inputEmail"=>"","inputPassword"=>""
,"inputDateofBirth"=>"","inputSimpleSelection"=>"","inputMultipleSelections"=>""
,"inputTextArea"=>"","inputRadios"=>"","inputCheck"=>"");

$allBooleanVales = array("inputName" => false, "inputAge" => false,"inputEmail"=>false,"inputPassword"=>false,
    "inputDateofBirth"=>false,"inputSimpleSelection"=>false,"inputMultipleSelections"=>false
,"inputTextArea"=>false,"inputRadios"=>false,"inputCheck"=>false);

$validationCount = 0;
if (isset($_POST['form_submit'])) {


    ///Check The Characters For Name
    $formData["inputName"] = validate_input($_POST["name"]);
    $lenghtCheck = Check_Character($formData["inputName"]);
    ($lenghtCheck == true)? $validationCount = $validationCount + 1:$allBooleanVales['inputName'] = true;


    ///Check Age
    $formData["inputAge"] = validate_input($_POST["age"]);
    $ageCheck=Check_Age($formData["inputAge"]);
    ($ageCheck == true)? $validationCount = $validationCount + 1:$allBooleanVales["inputAge"] = true;


    //Check Email
    $formData["inputEmail"] = validate_input($_POST["email"]);
    $checkEmail=Check_Email($formData["inputEmail"]);
    ($checkEmail == true)? $validationCount = $validationCount + 1:$allBooleanVales["inputEmail"] = true;

    //Check Password
    $formData["inputPassword"] = validate_input($_POST["password"]);
    $checkPassword=Check_Password($formData["inputPassword"]);
    ($checkPassword == true)? $validationCount = $validationCount + 1:$allBooleanVales["inputPassword"] = true;

    //CheckDateOfBirth
    $formData["inputDateofBirth"] = validate_input($_POST["date"]);
    $checkDOB=Check_Date_Of_Birth($formData["inputDateofBirth"]);
    ($checkDOB == true)? $validationCount = $validationCount + 1:$allBooleanVales["inputDateofBirth"] = true;

    //SimpleSelection
    $formData["inputSimpleSelection"] =($_POST["select"]);
    $validationCount = $validationCount + 1;


    //MultipleSelection
    $formData["inputMultipleSelections"] =($_POST["subject"]);
    $checkSelection=Check_Array_Lenght($formData["inputMultipleSelections"]);
    ($checkSelection == true)? $validationCount = $validationCount + 1:$allBooleanVales["inputMultipleSelections"] = true;

    //For Message
    $formData["inputTextArea"] =($_POST["message"]);
    $validationCount = $validationCount + 1;

    //For radio Buttons
    $formData["inputRadios"] =($_POST["radio"]);
    $validationCount = $validationCount + 1;


    //For CheckBox
    $formData["inputCheck"] =($_POST["check"]);
    $checkBoxSelection=Check_Array_Lenght($formData["inputCheck"]);
    ($checkBoxSelection == true)? $validationCount = $validationCount + 1:$allBooleanVales["inputCheck"] = true;
}


?>


<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
          crossorigin="anonymous">
</head>

<body>
<hr>
<div class="container">

    <div class="alert alert-primary" role="alert">
        Exercise - form
    </div>


    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="form-group row">

            <!--  //For Name-->
            <label class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="name" required>
                <?php if ($allBooleanVales["inputName"] == true) {
                    echo "<div class='invalid-feedback d-block'> Maximum Characters Should not more than 50</div>";
                } ?>
                <br>
            </div>


            <!--//For Age-->
            <label class="col-sm-2 col-form-label">Age</label>
            <div class="col-sm-10">

                <input type="number" class="form-control" name="age"  required>
                <?php if ($allBooleanVales["inputAge"] == true) {
                    echo "<div class='invalid-feedback d-block'> Age Should Be Minimum 18 And Maximum 50</div>";
                } ?>
                <br>
            </div>




            <!--For Email-->
            <label class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">

                <input type="text" class="form-control" name="email" required>
                <?php if ($allBooleanVales["inputEmail"] == true) {
                    echo "<div class='invalid-feedback d-block'> Email Needs to Contain @ symbol. </div>";
                } ?>
                <br>
            </div>

            <!--For Password-->
            <label class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">

                <input type="password" class="form-control" name="password" required>
                <?php if ($allBooleanVales["inputPassword"] == true) {
                    echo "<div class='invalid-feedback d-block'> Password can only have Maximum 50 Characters </div>";
                } ?>
                <br>
            </div>


            <!--For DateOfBirth-->
            <label class="col-sm-2 col-form-label">DateOfBirth</label>
            <div class="col-sm-10">

                <input type="date" class="form-control"  name="date" required >
                <?php if ($allBooleanVales["inputDateofBirth"] == true) {
                    echo "<div class='invalid-feedback d-block'> Need To Be Minimum 18 years Old </div>";
                } ?>
                <br>
            </div>


           <!-- For Simple Selection-->
            <label class="col-sm-2 col-form-label">Simple Selection </label>
            <div class="col-sm-10">

                <select class="form-control" name="select" >
                    <option value="Option1">Option1</option>
                    <option value="Option2">Option2</option>
                    <option value="Option3">Option3</option>
                    <option value="Option4">Option4</option>
                </select>
                <br>
            </div>


            <!--For Multiple Selection-->
            <label class="col-sm-2 col-form-label">Multiple Selection </label>
            <div class="col-sm-10">

                <select class="form-control" name = 'subject[]' multiple required>
                    <option value="Option1">Option1</option>
                    <option value="Option2">Option2</option>
                    <option value="Option3">Option3</option>
                    <option value="Option4">Option4</option>
                </select>
                <?php if ($allBooleanVales["inputMultipleSelections"] == true) {
                    echo "<div class='invalid-feedback d-block'> Mimimum 2 options need to be selected </div>";
                } ?>
                <br>
            </div>



            <!--For Message-->
            <label class="col-sm-2 col-form-label">Message </label>
            <div class="col-sm-10">
                <textarea class="form-control"name="message" required rows="3"></textarea>

                <?php if ($allBooleanVales["inputDateofBirth"] == true) {
                    echo "<div class='invalid-feedback d-block'> Need To Be Minimum 18 years Old </div>";
                } ?>
                <br>
            </div>



            <!--For Radio Button-->
            <label class="col-sm-2 col-form-label">Radios </label>
            <div class="col-sm-10">

                <input type="radio" class="form-check-input" name="radio" value="First Radio" checked>First Radio<br>
                <input type="radio" class="form-check-input" name="radio" value="Second Radio" >Second Radio<br>
                <input type="radio" class="form-check-input" name="radio" value="Third Radio" >Third Radio<br>
                <br>
            </div>


            <!--For CheckBox-->
            <label class="col-sm-2 col-form-label">CheckBox</label>
            <div class="col-sm-10">

                <input type="checkbox"   class="ol-sm-2 col-form-label" name = 'check[]' value="CheckBox1"> Example CheckBox1 <br>
                <input type="checkbox"   class="ol-sm-2 col-form-label" name = 'check[]' value="CheckBox2"> Example CheckBox2 <br>
                <input type="checkbox"   class="ol-sm-2 col-form-label" name = 'check[]' value="CheckBox3"> Example CheckBox3 <br>
                <input type="checkbox"   class="ol-sm-2 col-form-label" name = 'check[]' value="CheckBox4"> Example CheckBox4 <br>
                <?php if ($allBooleanVales["inputCheck"] == true) {
                    echo "<div class='invalid-feedback d-block'> Mimimum 2 options need to be selected </div>";
                } ?>
                <br>
            </div>

        </div>


        <button type="submit" name="form_submit">
            Submit
        </button>
    </form>

    <div>
        <hr>

        <!-- The following content appears only when the form data is valid-->

        <div class="alert alert-primary" role="alert">
            Submit Result
        </div>

        <ul class="list-group">
            <li class="list-group-item">

                <?php
                if($validationCount==count($allBooleanVales) ){
                    foreach ($formData as $formKey => $formvalue) {
                        if(is_array($formvalue)){
                            echo "$formKey :";
                            foreach ($formvalue as $multipleValue){
                                echo "$multipleValue ";
                            }
                            echo '<hr/>';
                        }else{
                            echo "$formKey:$formvalue";
                            echo '<hr/>';
                        }

                    }
                }

                ?>

            </li>
        </ul>

    </div>

</div>
<hr>
</body>

</html>