<?php
session_start();
$host="localhost";
$username="intranet";
$password="user@123";
$db_name="intranet";

$conn=mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");
//  echo 'helooo';
//echo $department."<br>";
if(isset($_POST['id']) && isset($_POST['department']) && isset($_POST['fname']) && isset($_POST['lname']))
{   
  if(!empty($_POST['id']) && !empty($_POST['department']) && !empty($_POST['fname']) && !empty($_POST['lname']))
  {
    $myid=$_POST['id'];
    //echo $myid;
    $department=strtolower($_POST['department']);
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $tbl_name=$department.'_faculty';
    //echo $tbl_name;

    $sql1="DELETE FROM $tbl_name WHERE Faculty_ID=$myid";
    if(mysql_query($sql1,$conn))
        {
          echo 'Record Is Deleted Successfully';
          mysql_close($conn);
        }
    else
        {
          die('Could not delete data: ' . mysql_error());
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