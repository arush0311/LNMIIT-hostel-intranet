<?php
error_reporting(0);
session_start();
$host="localhost";
$username="intranet";
$password="user@123";
$db_name="intranet";

$conn=mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");
$name = strtoupper($_FILES['file']['name']);
$length=strlen($name);
$offset=0;
$find='.';
$find_length=strlen($find);
while($string_position=strpos($name,$find,$offset)){
  $pos=$string_position;
  $offset=$string_position+$find_length;
 // echo $find.'found at'.$pos.'<br>';
}
// echo $pos.'<br>';

 $extension=strtolower(substr($name,$pos+1));
  //echo $extension;
 //$size=$_FILES['file']['size'];
 $type=$_FILES['file']['type'];
 $temp_name = $_FILES['file']['tmp_name'];

if(isset($_POST['cname']) && isset($_POST['code']) && isset($_POST['whom']) && isset($_POST['type']) && isset($_POST['credits']))
{
 if(!empty($_POST['cname']) && !empty($_POST['code']) && !empty($_POST['whom']) && !empty($_POST['type']) && !empty( $_POST['credits']))
 {
   $Sem=$_SESSION['semester'];
   $Code=strtoupper($_POST['code']);
   $CourseName=$_POST['cname'];
   $Whom=strtoupper($_POST['whom']);
   $Type=strtoupper($_POST['type']);
   $Credits=$_POST['credits'];
   $tbl_name="cif".$Sem."sem";
   $sql1="UPDATE $tbl_name SET Course_Short_Form='$Code',Course_Name='$CourseName',For_Whom='$Whom',Type_Of_Course='$Type',Credits='$Credits' WHERE Course_Short_Form='$Code'";
    if(mysql_query($sql1,$conn)){
            echo 'Record Is Updated'."<br>";
            }else{
            echo 'Problem In Updating'."<br>";
            }
   if(!empty($name))
   {
   if($extension=='jpg'||$extension=='jpeg'||$extension=='pdf'||$extension=='xls'||$extension=='xlsx'||$type=='image/jpeg'||$extension=='docx'||$extension=='doc')
       {
         $location='uploadcif/';
         //echo "$Code.$extension";
           $targetfile=$location.$Code.'.'.$extension;
           echo $targetfile;
           if(file_exists($targetfile))
           {
             echo 'File with this name already existed'."<br>";
             unlink($targetfile);
             echo 'Last Uploaded File has been removed from uploads folder'."<br>";
             if(move_uploaded_file($temp_name,$location.$Code.'.'.$extension))
             {
               echo 'New File Is Uploaded'."<br>";
             }
             else
             {
             echo 'There was an Problem In Uploading'."<br>";
             }
           }else{
           if(move_uploaded_file($temp_name,$location.$Code.'.'.$extension))
             {
               echo 'File Is Uploaded'."<br>";
             }
             else
             {
             echo 'There was an Problem In Uploading'."<br>";
             }
           }

       }
       else
       {
       echo 'File must be in jpg/jpeg/pdf/xls/xlsx format';
       }
   }
 }
 }
?>