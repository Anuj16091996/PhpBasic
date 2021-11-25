<!DOCTYPE html>
<html>
<head>
	<title>Minimal Resume Template</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<?php
include_once "header.php";
?>

<!-- Skills and intrest section -->
<?php
include_once "Sections/Skills_Intrest.php";
?>

	<!-- Achievements -->
<?php
include_once "Sections/Achivements.php";
?>


	<!-- Timeeline -->
<?php
include_once "Sections/Timeline.php";
?>


	<br><br>

<?php
include_once "footer.php";
?>




</body>
</html>