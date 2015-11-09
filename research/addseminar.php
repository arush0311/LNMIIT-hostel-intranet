
<?php

require('../header.php');
require('sidebar.php');
if(isset($_SESSION['id']))
{
?>


    
       <div id="contents">


        <?php 
		if(isset($_COOKIE['msg']))echo "<p style='color:red'>* ".$_COOKIE['msg']; ?>
            <div class="dropmenu">
                <form role="form" action="addseminar.php" method="POST" enctype="multipart/form-data">
			<div class="form-group">

                    Speaker's name:
                    <input type="text" class="form-control" name="name">

                    <br> Speaker's Profile:
                    <textarea name="abstract" class="form-control" rows="5" cols="80"> </textarea>

		   
                    <br> Title:
                    <input type="text" class="form-control" name="title" required>
                    <br> Venue:
                    <input type="text" class="form-control" name="venue" required>
                    

		

		    <br> Date (yyyy-mm-dd):
                    <input type="text" class="form-control" name="year" required>
                    <br> About Seminar:
                    <textarea class="form-control" name="about" rows="5" cols="80"> </textarea>
                    <br> Registration Fees:
                    <input type="text" class="form-control" name="cost">
                    <br> Contact Number:
                    <input type="text" class="form-control" name="contact">
                    <br>
                    <input type="submit" class="form-control btnx" value="Submit Form" name="submit">
			</div>

                </form>
            </div>

<?php

 
// include db connect class
require_once __DIR__ . '/db_connect.php';
 
// connecting to db
$db = new DB_CONNECT();
	$name=$_POST['name'];
	$year=$_POST['year'];
	$profile=nl2br($_POST['profile']);
	$about=nl2br($_POST['about']);
	$type=$_POST['type'];
	$title=$_POST['title'];
	$cost=$_POST['cost'];
	$contact=$_POST['contact'];
	$venue=$_POST['venue'];

//if(empty($name))

if( empty($title) || empty($venue) || empty($year) || empty($about) )
{
	echo "<br>Please fill required fields!";
}


//if( (isset($_POST['type']) and isset($_POST['name'])) and (isset($_POST['title']) and isset($_POST['venue'])) and (isset($_POST['year']) and isset($_POST['about'])) )



//if( (!isset($_POST['name']) or (!isset($_POST['about']))) or (!isset($_POST['title']) or (!isset($_POST['venue']))) or (!isset($_POST['year'])) )

else
{
	
	//$result=null;
	echo "<br>";
	echo "$name";
	$select="insert into seminar (author, profile, title, date, about, venue, cost, contact) VALUES('$name','$profile', '$title', '$year', '$about', '$venue', '$cost', '$contact')";
	$result=mysql_query($select) or die(mysql_error());
	
	if(!$result )
	{
		die('Could not enter data:' . mysql_error());
	}
	else
	{
		echo "Data added successfully!\n";
	}


}



?>

    </div>
    
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <?php
require('footer.php');
?>
        <?php
}
?>