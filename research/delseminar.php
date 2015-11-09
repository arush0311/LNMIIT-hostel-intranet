<?php
	require('../header.php');
	require('sidebar.php');
	if(isset($_SESSION['id']))
{
?>
    <div id="contents">
        <div class="dropmenu">
           
            <?php
 

 
// include db connect class
require_once __DIR__ . '/db_connect.php';
 
// connecting to db
$db = new DB_CONNECT();
$result = mysql_query("SELECT *FROM seminar ORDER BY author ASC") or die(mysql_error());
 $i=0;
// check for empty result
if (mysql_num_rows($result) > 0) {
// output data of each row
	
	//echo "PUBLICATIONS:";
	while ($row = mysql_fetch_array($result)){
		$i++;
        echo "<br><table><tr><td>[".$i."]:&nbsp;<a href='delseminar1.php?id=".$row["id"]."'>".$row["title"]."</a>,".$row["author"].",".$row["date"].".(".$row["type"].")</td></tr>";
    }
    echo "<br></table><br><br>";
}

 


 
 /*if ( isset( $_POST['action1'] ) ) { 
 unset( $_POST['action1'] );
	 echo "<p style='color:red'>SEARCH RESULTS:";
 $search=$_POST['search'];
	$result = mysql_query("SELECT *FROM seminar where author LIKE '%$search%' OR title LIKE '%$search%' OR keywords LIKE '%$search%' OR abstract LIKE '%$search%' ORDER BY author ASC") or die(mysql_error());
 $i=0;
// check for empty result
if (mysql_num_rows($result) > 0) {
 
    // output data of each row
	
	//echo "PUBLICATIONS:";
	while ($row = mysql_fetch_array($result)){
		$i++;
        echo "<br><table><tr><td>[".$i."]:&nbsp;<a href='delseminar1.php?id=".$row["id"]."'>".$row["title"]."</a>,".$row["author"].",".$row["date"].".(".$row["type"].")</td></tr>";
    }
    echo "<br></table><br><br>";
	}
 }
 else if ( isset( $_POST['action2'] ) ) 
 {
 unset( $_POST['action2'] );
	 echo "<p style='color:red'>SEARCH RESULTS:";
 $search=$_POST['search'];
	$result = mysql_query("SELECT *FROM seminar where author LIKE '%$search%' OR title LIKE '%$search%' OR keywords LIKE '%$search%' OR abstract LIKE '%$search%' ORDER BY date DESC") or die(mysql_error());
 $i=0;
// check for empty result
if (mysql_num_rows($result) > 0) {
 
    // output data of each row
	
	//echo "PUBLICATIONS:";
	while ($row = mysql_fetch_array($result)){
		$i++;
        echo "<br><table><tr><td>[".$i."]:&nbsp;<a href='delseminar1.php?id=".$row["id"]."'>".$row["title"]."</a>,".$row["author"].",".$row["date"].".(".$row["type"].")</td></tr>";
    }
    echo "<br></table><br><br>";
	}
 }
 else if ( isset( $_POST['action3'] ) ) 
 {
	unset( $_POST['action3'] );
	 echo "<p style='color:red'>SEARCH RESULTS:";
 $search=$_POST['search'];
	$result = mysql_query("SELECT *FROM seminar where author LIKE '%$search%' OR title LIKE '%$search%' OR keywords LIKE '%$search%' OR abstract LIKE '%$search%' ORDER BY title ASC") or die(mysql_error());
 $i=0;
// check for empty result
if (mysql_num_rows($result) > 0) {
 
    // output data of each row
	
	//echo "PUBLICATIONS:";
	while ($row = mysql_fetch_array($result)){
		$i++;
        echo "<br><table><tr><td>[".$i."]:&nbsp;<a href='delseminar1.php?id=".$row["id"]."'>".$row["title"]."</a>,".$row["author"].",".$row["date"].".(".$row["type"].")</td></tr>";
    }
    echo "<br></table><br><br>";
	}
 }
 else if(isset($_POST['search']))
 {
 echo "<p style='color:red'>SEARCH RESULTS:";
 $search=$_POST['search'];
	$result = mysql_query("SELECT *FROM seminar where author LIKE '%$search%' OR title LIKE '%$search%' OR keywords LIKE '%$search%' OR abstract LIKE '%$search%' ORDER BY date DESC") or die(mysql_error());
 $i=0;
// check for empty result
if (mysql_num_rows($result) > 0) {
 
    // output data of each row
	
	//echo "PUBLICATIONS:";
	while ($row = mysql_fetch_array($result)){
		$i++;
        echo "<br><table><tr><td>[".$i."]:&nbsp;<a href='delseminar1.php?id=".$row["id"]."'>".$row["title"]."</a>,".$row["author"].",".$row["date"].".(".$row["type"].")</td></tr>";
    }
    echo "<br></table><br><br>";
} else {
    echo "No RESULTS";
}
 }
 else
 {
  
// get all products from products table
$result = mysql_query("SELECT *FROM seminar ORDER BY date DESC") or die(mysql_error());
 $i=0;
// check for empty result
if (mysql_num_rows($result) > 0) {
 
    // output data of each row
	
	//echo "PUBLICATIONS:";
	while ($row = mysql_fetch_array($result)){
		$i++;
        echo "<br><table><tr><td>[".$i."]:&nbsp;<a href='delseminar1.php?id=".$row["id"]."'>".$row["title"]."</a>,".$row["author"].",".$row["date"].".(".$row["type"].")</td></tr>";
    }
    echo "<br></table><br><br>";
} else {
    echo "No RESULTS";
}
}*/

?>
        </div>
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
else
{header("location:delete.php");
}
?>