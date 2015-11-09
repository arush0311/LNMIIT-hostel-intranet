<?php
	require('../header.php');
	require('sidebar.php');
?>
    <div id="contents">
        <?php
 if(isset($_COOKIE['msg']))echo "<p style='color:red'>* ".$_COOKIE['msg'];
 ?>
            <?php
 

 
// include db connect class
require_once __DIR__ . '/db_connect.php';
 
// connecting to db
$db = new DB_CONNECT();
if(isset($_GET['id']))
{ $id=$_GET['id'];
 
 
// get all products from products table
$result = mysql_query("SELECT *FROM r_data where id='$id'") or die(mysql_error());
 $i=0;
// check for empty result
if (mysql_num_rows($result) > 0) {
 
    // output data of each row
	
	while ($row = mysql_fetch_array($result)){
		$i++;
        echo "<h1 class=\"body_title\">".$row["title"]."</h1><b>AUTHOR:</b> ".$row["author"]."<br><br><b>YEAR:</b> ".$row["issuedate"]."<br><br><b> ABSTRACT:</b> <br>".$row["abstract"]."<br><br><b> FULL PDF:</b> <a href='download.php?id=".$row["id"]."'>pdf</a></td></tr>";
    }
    echo "</table><br><br><form action='deletenew1.php' method='POST'> <input type='hidden' name='id' value='".$id."'/><input type='submit' name='submit' class='btn btnx' value='DELETE PERMANENTLY'/></form>";
} else {
		echo "NO RESULTS";
	}
}


?>
    </div>
    <?php
require('footer.php');
?>