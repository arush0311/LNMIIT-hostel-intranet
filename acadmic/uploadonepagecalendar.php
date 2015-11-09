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
 
}


 $extension=strtolower(substr($name,$pos+1));
 
 $type=$_FILES['file']['type'];
 $temp_name = $_FILES['file']['tmp_name'];
 if(isset($name))
 {
    if(!empty($name))
    {
       if($extension=='jpg'||$extension=='jpeg'||$extension=='pdf'||$extension=='xls'||$extension=='xlsx'||$type=='image/jpeg'||$extension=='docx')
       {
         $location='onepagecalender/';
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

   <style>
    #rcorners2 {
    border-radius: 5px;
    padding: 20px;
    width: 200px;
    height: 5px;
    background-color: #FFFFFF;
    }
    #rcorners3 {
    border-radius: 5px;
    width: 200px;
    height: 40px;
    }
    .ex {
    margin-left: 60px;
   }
}
</style>
</head>
<body>
 <div align="right"><a href="./faculty.php">BACK</a></div>
<div class="container">
  <h2 align="center">Upload one page calender</h2>
  <form role="form" action="uploadonepagecalendar.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="file" class="ex" id="rcorners3"><br><br>
    <button type="submit" class="ex" id="rcorners3">Submit</button>
  </form>
</div>

</body>
</html>
