<?php
session_start();
$host="localhost";
$username="intranet";
$password="user@123";
$db_name="intranet";

$conn=mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

//echo $department."<br>";
if(isset($_POST['id']) && isset($_POST['department']) && isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['emailid']) && isset($_POST['contactnumber']) && isset($_POST['contacthrs']) && isset($_POST['officenumber']) && isset($_POST['extensionnumber']) && isset($_POST['researcharea']))
{
  if(!empty($_POST['id']) && !empty($_POST['department']) && !empty($_POST['fname']) && !empty($_POST['lname']))
  {
    $myid=$_POST['id'];
    $department=strtolower($_POST['department']);
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['emailid'];
    $contno=$_POST['contactnumber'];
    $conthrs=$_POST['contacthrs'];
    $offno=$_POST['officenumber'];
    $extno=$_POST['extensionnumber'];
    $resa=$_POST['researcharea'];
    $tbl_name=$department.'_faculty';
    //echo $tbl_name;

    $sql1="INSERT INTO $tbl_name(`Faculty_ID`,`Department`,`First_Name`,`Last_Name`,`Email_Address`,`Contact_No`,`Contact_Hrs`,`Office_No`,`Extension_No`,`Research_Area`)VALUES('$myid','$department','$fname','$lname','$email','$contno','$conthrs','$offno','$extno','$resa')";
    if(mysql_query($sql1,$conn))
        {
          echo 'Record Is Inserted Successfully';
          mysql_close($conn);
        }
    else
        {
          die('Could not update data: ' . mysql_error());
        }

  }
  else
  {
    if(empty($_POST['id']))
    {
    echo 'Enter Id(Mandatory feild)'."<br>";
    }
    if(empty($_POST['department']))
    {
    echo 'Enter Department(Mandatory feild)'."<br>";
    }
    if(empty($_POST['fname']))
    {
    echo 'Enter First Name(Mandatory feild)'."<br>";
    }
    if(empty($_POST['lname']))
    {
    echo 'Enter Last Name(Mandatory feild)'."<br>";
    }
  }
}

?>