<?php
error_reporting(0);

$target_dir = "uploadcoc/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
//echo $target_file."<br>";
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
//echo $imageFileType;
// Check if image file is a actual image or fake image
// Check file size
if ($_FILES["fileToUpload"]["size"] > 5000000000) {
    echo "Sorry, your file is too large."."<br>";
    $uploadOk = 0;
}
if(!empty($_POST['title'])){
$title=$_POST['title'];
}else{
  echo 'Please Enter title'."<br>";
  $uploadOk=0;
}
// Allow certain file formats
$imageFileType=strtolower($imageFileType);
//echo $imageFileType;
if(!empty($imageFileType) && $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" && $imageFileType != "pdf" && $imageFileType != "xls" && $imageFileType != "xlsx" && $imageFileType != "pdf" && $imageFileType != "docx" && $imageFileType != "doc") {
    echo "Sorry, only JPG, JPEG, PNG,XLS,XLSX,PDF,DOCX,DOC & GIF files are allowed."."<br>";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded."."<br>";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded."."<br>";
    } else {
        echo "Sorry, there was an error uploading your file."."<br>";
    }
}
?>