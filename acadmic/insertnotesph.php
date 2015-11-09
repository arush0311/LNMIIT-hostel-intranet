<?php
error_reporting(0);
session_start();
$myusername=$_SESSION['uname'];
$myid=$_SESSION['id'];

$year=$_POST['year'];
echo $year;
$name = $_FILES['file']['name'];
//print_r '$_FILES['file']['name']';
echo $name."...<br>";
$department=$_POST['department'];
$date=date("Y-m-d");
$title="($name)-($year)-($department)-($myusername)-($date)";
echo $title;
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
// echo $temp_name;
 if(isset($name))
 {
    if(!empty($name))
    {
       if($extension=='jpg'||$extension=='jpeg'||$extension=='pdf'||$extension=='xls'||$extension=='xlsx'||$type=='image/jpeg'||$extension=='docx'||$extension=='doc'||$extension=='txt')
       {
         $location='Notes/';
           if(move_uploaded_file($temp_name,$location.$title))
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
       echo 'File must be in jpg/jpeg/pdf/xls/xlsx/doc/txt format';
       }

    }
    else
    {
      echo 'Please choose a file';
    }
 }
?>