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
        echo "<h1 class=\"body_title\">".$row["title"]."</h1><b>AUTHOR:</b> ".$row["author"]."<br><br><b>DATE:</b> ".$row["date"]."<br><br><b> AUTHOR'S PROFILE:</b> <br>".$row["profile"]."<br><br> <b>ABOUT SEMINAR:</b> <br>".$row["about"]."<br> <br><b>VENUE:</b> ".$row["venue"]."<br> </td></tr>";
    }
    echo "</table><br><br><form action='delseminar2.php' method='POST'> <input type='hidden' name='id' value='".$id."'/><input type='submit' name='submit' class='btn btnx' value='DELETE PERMANENTLY'/></form>";

} else {
    echo "No RESULTS";
}


?>
    </div>
    <?php
require('footer.php');
?>