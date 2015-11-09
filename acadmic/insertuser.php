<?php
session_start();
$host="localhost"; // Host name
$username="intranet"; // Mysql username
$password="user@123"; // Mysql password
$db_name="intranet"; // Database name
$tbl_name="member"; // Table name

// Connect to server and select databse.
$conn=mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

// username and password sent from form
if(isset($_POST['id']) && isset($_POST['myusername']) && isset($_POST['mypassword']))
{
 if(!empty($_POST['id']) && !empty($_POST['myusername']) && !empty($_POST['mypassword']))
 {
  $id=$_POST['id'];
  $myusername=$_POST['myusername'];
  $mypassword=$_POST['mypassword'];
  $myusername=stripslashes($myusername);
  $mypassword = stripslashes($mypassword);
  $myusername = mysql_real_escape_string($myusername);
  $mypassword = mysql_real_escape_string($mypassword);
  $_SESSION['username']=$myusername;

  $sql="INSERT INTO $tbl_name(`Id`,`Username`,`Password`)VALUES('$id','$myusername','$mypassword')";
    // If result matched $myusername and $mypassword, table row must be 1 row
  if(mysql_query($sql,$conn))
  {
    echo 'Record inserted successfully';
  }else{
      echo 'Record <strong>NOT</strong> successfully';
  }
}
 else
 {
    if(empty($_POST['id']))
    {
      echo 'Enter ID'."<br>";
    }
    if(empty($_POST['myusername']))
    {
     echo 'Enter Username'."<br>";
    }
    if(empty($_POST['mypassword']))
    {
     echo 'Enter Password'."<br>";
    }

 }
}
else
{
echo 'Problem in getting the variables';
}



?>