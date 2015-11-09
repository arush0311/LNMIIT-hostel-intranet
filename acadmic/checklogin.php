<?php
session_start();
$host="localhost"; // Host name
$username="intranet"; // Mysql username
$password="user@123"; // Mysql password
$db_name="intranet"; // Database name
$tbl_name="member"; // Table name

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

// username and password sent from form
if(isset($_POST['myusername']) && isset($_POST['mypassword']))
{
  if(!empty($_POST['myusername']) && !empty($_POST['mypassword']))
  {
    //$myid=$_POST['Id'];
    $myusername=$_POST['myusername'];
    $mypassword=$_POST['mypassword'];
    $strlen=strlen($myusername);
    $i=0;

    for( $i = 0; $i <= $strlen; $i++ ) {
    $char = substr( $myusername, $i, 1 );
    // $char contains the current character, so do your processing here
    if(is_numeric($char)){
    $pos=$i;
    break;
    }
    }
    //echo $pos;
    $myid=strtolower(substr($myusername,$pos));
    //echo $pos;
   // echo $myid;
    $_SESSION['id']=$myid;
    $_SESSION['uname']=$myusername;
    $_SESSION['pass']=$mypassword;

    // To protect MySQL injection (more detail about MySQL injection)
    $myusername=stripslashes($myusername);
    $mypassword = stripslashes($mypassword);
    $myusername = mysql_real_escape_string($myusername);
    $mypassword = mysql_real_escape_string($mypassword);
    if($myid == 0)
    {
       header('Location: .\rajeev.php');
       exit();
    }
    else
    {
        $sql="SELECT * FROM $tbl_name WHERE Username='$myusername' and Password='$mypassword' and Id='$myid'";
        $result=mysql_query($sql);
        //echo $result;
        // Mysql_num_row is counting table row
        $count=mysql_num_rows($result);

        // If result matched $myusername and $mypassword, table row must be 1 row
        if($count==1)
        {
        header('Location: .\faculty.php');
         exit();
        }
        else
        {
        echo 'Wrong Username or Password';
        }
    }
  }
  else
    {
      if(empty($_POST['myusername']))
      {
       echo 'Enter Username'."<br>";
      }
      if(empty($_POST['mypassword']))
      {
       echo 'Enter Password'."<br>";
      }
      if(empty($_POST['Id']))
      {
      echo 'Enter Id'."<br>";
      }
    }
}
session_write_close();
?>