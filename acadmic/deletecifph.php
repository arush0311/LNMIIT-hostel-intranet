<?php
error_reporting(0);
session_start();
$host="localhost";
$username="intranet";
$password="user@123";
$db_name="intranet";
$_SESSION['semester']=$sem;
$csf=strtoupper($_POST['code']);
$selsem=$_POST['semester'];
$tbl_name="cif".$selsem."sem";
//echo $tbl_name;
$conn=mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");
$sql1="DELETE FROM $tbl_name Where Course_Short_Form='$csf'";
if(mysql_query($sql1,$conn)){
  echo 'Record is deleted'."<br>";
}else{
  echo 'No Row Returned'."<br>";
}
$location='uploadcif/';
$targetfile=$location.$csf."."."doc";

if(file_exists($targetfile))
{
  unlink($targetfile);
  echo 'CIF File is Deleted.'."<br>" ;
}
else
{
  echo 'CIF file does not existed for the course'."<br>";
}
?>