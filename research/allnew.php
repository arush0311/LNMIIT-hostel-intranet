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
$result = mysql_query("SELECT *FROM r_data where id='$id'") or die(mysql_error());
 $i=0;
// check for empty result
if (mysql_num_rows($result) > 0) {
 
    // output data of each row
	
	while ($row = mysql_fetch_array($result)){
		$i++;
        echo "<h1 class=\"body_title\">".$row["title"]."</h1><b>AUTHOR:</b> ".$row["author"]."<br><br><b>YEAR:</b> ".$row["issuedate"]."<br><br><b>ABSTRACT:</b> <br>".$row["abstract"]."<br><br> <b>FULL PDF:</b> <a href='download.php?id=".$row["id"]."'>pdf</a>";
    }
    
} else {
    echo "No RESULTS";
}


?>
       
    </div>
    <?php
require('footer.php');
?>