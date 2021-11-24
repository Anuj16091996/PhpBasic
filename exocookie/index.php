<?php
$products = require('data.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
<div class="w3-row">

    <!--    todo: loop through the artist data and display them. Allow to go through display page when clicked on-->
    <!--    Example to display the images with title modele w3css pour afficher les images avec le titre-->
    <!--        <div class="w3-col s6 m6 l3">-->
    <!--            <div class="w3-card-4 w3-margin">-->
    <!--                <a href="display.php?id="><img src="images/" style="width: 100%;" ></a>-->
    <!--                <div class="w3-container w3-center">-->
    <!--                    <p></p>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <div class="w3-row-padding w3-margin-top">
        <?php  foreach ($products as $key => $value)
        { ?>
            <div class="w3-third">
                <div class="w3-card">
                    <a href="display.php?id=<?php echo$value["id"]?>"><img src="images/<?php echo $value["urlImg"]?> " style="width: 100%;" ></a>
                    <div class="w3-container">
                        <?php  echo '<p>' . $value["title"] . '</p>'; ?>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
    <hr/>

</div>
<section class="w3-row">
    <div class="w3-container w3-grey">
        <h1>Dernier artiste vue</h1>
    </div>

    <!-- todo if there is a cookie then display the last artist visited-->
    <!--    Example of how to display an image with title -->
    <!--        <div class="w3-container">-->
    <!--            <div class="w3-card-4 w3-margin" style="width: 20%;">-->
    <!--                <a href="afficher.php?id=>"><img src="images/" style="width: 100%;"></a>-->
    <!--                <div class="w3-container w3-center">-->
    <!--                   title-->
    <!--                    <p></p>-->
    <!--                </div>-->
    <!--            </div>-->
    <?php
    if (isset($_COOKIE['userId'])) {?>
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
            </div>
        </div>
    <?php }
    ?>


</section>
</body>
</html>