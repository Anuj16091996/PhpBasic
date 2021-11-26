<?php
if (isset($_FILES['fileToUpload']))
{
    $imageFile = $_FILES['fileToUpload'];

    if ($imageFile['size'] <= 300000) {   //Under 300kb acceptable.

        $allowedTypes = array(IMAGETYPE_JPEG, IMAGETYPE_PNG, IMAGETYPE_GIF);
        $detectedType = exif_imagetype($imageFile['tmp_name']);
        $error = !in_array($detectedType, $allowedTypes);
        if (!$error) {
            //Normally: Rename file to something that will not conflict.

            $filename = uniqid() . "-" . time();

            $extension  = pathinfo( $_FILES["fileToUpload"]["name"], PATHINFO_EXTENSION );

            $basename   = $filename . "." . $extension;
            move_uploaded_file($_FILES['fileToUpload']['tmp_name'], "image/{$basename}" );
        }
        else {
            echo "Invalid file type: please upload PNG, JPEG, GIF <br />";
        }
    } else {
        echo "FILE SIZE TOO BIG: Max size of 300kb";
    }
}



?>


<form action="<?php $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileID"><br>
    <input type="submit" value="Upload Image" name="submit">
</form>


<?php
$dirname = "image/";
$files  = glob($dirname."*.*");
for ($i=0; $i<count($files); $i++)
{
    $image = $files[$i];
    $supported_file = array(
        'jpg',
        'png'
    );
    $ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));
    if(!$ext==""){
        if (in_array($ext, $supported_file)) {
            echo '<img src="'.$image .'" alt="Random image" />'."<br /><br />";
        }
    }

}



?>

</body>
</html>
