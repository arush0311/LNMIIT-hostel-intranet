<?php
session_start();
$host="localhost";
$username="intranet";
$password="user@123";
$db_name="intranet";
$myid=$_SESSION['id'];

$conn=mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

//echo $department."<br>";
if(isset($_POST['department']))
{
  if(!empty($_POST['department']))
  {
    $department=strtolower($_POST['department']);
  }else{
    $department="";
  }
}
if(isset($_POST['fname']))
{
  if(!empty($_POST['fname']))
  {
    $fname=$_POST['fname'];
  }else{
    $fname="";
  }
}
if(isset($_POST['lname']))
{
  if(!empty($_POST['lname']))
  {
    $lname=$_POST['lname'];
  }else{
    $lname="";
  }
}
if(isset($_POST['emailid']))
{
  if(!empty($_POST['emailid']))
  {
    $email=$_POST['emailid'];
  }else{
    $email="";
  }
}
if(isset($_POST['contactnumber']))
{
  if(!empty($_POST['contactnumber']))
  {
    $contno=$_POST['contactnumber'];
  }else{
    $contno="";
  }
}
if(isset($_POST['contacthrs']))
{
  if(!empty($_POST['contacthrs']))
  {
    $conthrs=$_POST['contacthrs'];
  }else{
    $conthrs="";
  }
}
if(isset($_POST['officenumber']))
{
  if(!empty($_POST['officenumber']))
  {
    $offno=$_POST['officenumber'];
  }else{
    $offno="";
  }
}
if(isset($_POST['extensionnumber']))
{
  if(!empty($_POST['extensionnumber']))
  {
    $extno=$_POST['extensionnumber'];
  }else{
    $extno="";
  }
}

if(isset($_POST['researcharea']))
{
  if(!empty($_POST['researcharea']))
  {
    $resa=$_POST['researcharea'];
  }else{
    $resa="";
  }
}
$tbl_name=$department.'_faculty';
//echo $tbl_name;
$myid=$_SESSION['id'];

$sql1="UPDATE $tbl_name SET Faculty_ID='$myid',Department='$department',First_Name='$fname',Last_Name='$lname',Email_Address='$email',Contact_No='$contno',Contact_Hrs='$conthrs',Office_No='$offno',Extension_No='$extno',Research_Area='$resa' WHERE Faculty_ID='$myid'";
if(mysql_query($sql1,$conn)){
  echo 'Record Is Updated Successfully';
}else{
   die('Could not update data: ' . mysql_error());
}


?>
