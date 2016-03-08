<?php
global $targetPath;
if(is_array($_FILES)) {
if(is_uploaded_file($_FILES['productImage']['tmp_name'])) {
$sourcePath = $_FILES['productImage']['tmp_name'];
$targetPath = "products/".$_FILES['productImage']['name'];
// Check if image file is a actual image or fake image
$check = getimagesize($sourcePath);
if($check !== false) {
    //echo "<p>File is an image - " . $check["mime"] . ".</p>";
    echo "<p class='text-success'><strong> Successful!</strong> Product Photo has Uploaded.</p> ";
    $uploadOk = 1;
} else {
    echo "<strong> <p class='text-danger'>Product file is not an image.</p></strong> ";
    $uploadOk = 0;
    //exit();
}
$uploadOk = 1;
$imageFileType = pathinfo($targetPath,PATHINFO_EXTENSION);
// Check if file already exists
if (file_exists($targetPath)) {
echo "<strong><p class='text-info'> NB: A product with similar name already exists which will be replaced by this one :)</p></strong> ";
$uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo " <p class='text-danger'><strong>Failed! </strong>Only JPG, JPEG, PNG & GIF file formats are allowed.</p> ";
    $uploadOk = 0;
    exit();
}
if(move_uploaded_file($sourcePath,$targetPath)) {
    session_start();
    $_SESSION['image'] = $targetPath;
?>
<img src="<?php echo $targetPath; ?>" class="img-responsive text-center" width="100%"/>
<?php
}
}
}



        // // Check file size
        // if ($_FILES["productImage"]["size"] > 500000) {
        //     echo "Sorry, your file is too large.";
        //     $uploadOk = 0;
        // }

        // Check if $uploadOk is set to 0 by an error
        // if ($uploadOk == 0) {
        //     echo "Sorry, your file was not uploaded.";
        // // if everything is ok, try to upload file
        // } else {
        //     if (move_uploaded_file($_FILES["productImage"]["tmp_name"], $target_file)) {
        //         echo "The file ". basename( $_FILES["productImage"]["name"]). " has been uploaded.";
        //     } else {
        //         echo "Sorry, there was an error uploading your file.";
        //     }
        // }
?>
