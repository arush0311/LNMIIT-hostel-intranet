<?php
//echo $_FILES['userfile']['size'];
if((isset($_POST['title']) and isset($_POST['author'])) and (isset($_POST['date']) and isset($_POST['type'])))
{

$name=$_POST['name'];
$year=$_POST['year'];
$profile=$_POST['profile'];
$about=$_POST['about'];
$type=$_POST['type'];
$title=$_POST['title'];
$cost=$_POST['cost'];
$contact=$_POST['contact'];
$venue=$_POST['venue'];
require_once __DIR__ . '/db_connect.php';
 
// connecting to db
$db = new DB_CONNECT();
 
$select="insert into seminar(author,profile,title,date,venue,about,cost,contact,type) VALUES('$name','$profile','$title','$year','$venue','$about','$cost','$contact','$type')";
$check=mysql_query($select,$con) or die(mysql_error());
//$result = mysql_query($check);
        if($check)
        {
			$u="RECORD SUCCEFULLY ADDED!!";
			setcookie("msg",$u,time()+60);
            header("location:add1.php");

         }
         else
         {
			$u="RECORD CANNOT BE ADDED!!";
			setcookie("msg",$u,time()+60);
			header("location:add1.php");
             

        }
}
else
{
	$u="ADD A PDF!!";
	setcookie("msg",$u,time()+60);
	header("location:add1.php");
}
?>