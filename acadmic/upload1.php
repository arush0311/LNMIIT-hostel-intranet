<?php
error_reporting(0);
 $name = $_FILES['file']['name'];
 $length=strlen($name);
$offset=0;
$find='.';
$find_length=strlen($find);
while($string_position=strpos($name,$find,$offset)){
  $pos=$string_position;
  $offset=$string_position+$find_length;
 // echo $find.'found at'.$pos.'<br>';
}
// echo $name.'<br>';
// echo $pos.'<br>';

 $extension=strtolower(substr($name,$pos+1));
  //echo $extension;
 //$size=$_FILES['file']['size'];
 $type=$_FILES['file']['type'];
 $temp_name = $_FILES['file']['tmp_name'];
 if(isset($name))
 {
    if(!empty($name))
    {
       if($extension=='jpg'||$extension=='jpeg'||$extension=='pdf'||$extension=='xls'||$extension=='xlsx'||$type=='image/jpeg'||$extension=='docx')
       {
         $location='uploads/';
           if(move_uploaded_file($temp_name,$location.$name))
           {
            echo 'Uploaded';
           }
           else
           {
           echo 'There was an error';
           }
       }
       else
       {
       echo 'File must be in jpg/jpeg/pdf/xls/xlsx format';
       }

    }
    else
    {
      echo 'Please choose a file';
    }
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>File Upload</h2>
  <form role="form" action="upload1.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
      <label for="text">Title</label>
      <input type="text" class="form-control" id="email" placeholder="Enter Title">
    </div>
    <input type="file" name="file"><br>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>
