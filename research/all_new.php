<?php
	require('../header.php');
	require('sidebar.php');
?>

    <div id="contents">
      

            <?php
 

 
// include db connect class
require_once __DIR__ . '/db_connect.php';
 
// connecting to db
$db = new DB_CONNECT();
 $id=$_GET['id'];
 
// get all products from products table
$result = mysql_query("SELECT *FROM seminar where id='$id'") or die(mysql_error());
 $i=0;
// check for empty result
if (mysql_num_rows($result) > 0) {
 
    // output data of each row
	
	while ($row = mysql_fetch_array($result)){
		$i++;
	 echo "<h1 class=\"body_title\">".$row["title"]."</h1>";

		if($row["author"]!="")
	{
		echo "<b>AUTHOR:</b> ".$row["author"]."<br>
			<br>";
	}

	if($row["date"]!="")
	{
		echo "<b>DATE:</b> ".$row["date"]."<br>";

	}
	if($row["profile"]!="")
	{
		echo "<br><b>AUTHOR'S PROFILE:</b> ".$row["profile"]."<br>";

	}

	if($row["about"]!="")
	{
		echo "<br><b>ABOUT SEMINAR:</b> ".$row["about"]."<br>";

	}

	if($row["venue"]!="")
	{
		echo "<br><b>VENUE:</b> ".$row["venue"]."";

	}

}
    
} else {
    echo "No RESULTS";
}


?>
        
    </div>
    <?php
require('footer.php');
?>