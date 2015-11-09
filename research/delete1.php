<?php
	require('../header.php');
	require('sidebar.php');
	if(isset($_SESSION['id']))
{
?>
    <div id="contents">
        <div class="dropmenu">
            <form method="POST" action="delete1.php">
                Department:&nbsp


                    <select name="dept" class="form-control">
                        <option value="any"> Any</option>
                        <option value="ece"> ECE </option>
                        <option value="cse"> CSE </option>
                        <option value="cce"> CCE </option>
                        <option value="mathematics"> Mathematics </option>
                        <option value="mechanics"> Mechanics </option>
                        <option value="physics"> Physics </option>
                    </select>

		<br><br><input type="submit" class="form-control btnx" name="submit" value="Submit" />
                <br>
               </form>
            <br>
            <br>

            <?php
 

 
// include db connect class
require_once __DIR__ . '/db_connect.php';
 
// connecting to db
$db = new DB_CONNECT();
 



/*if ( isset( $_POST['action1'] ) ) { 
 unset( $_POST['action1'] );
	 echo "<p style='color:red'>SEARCH RESULTS:";
 $search=$_POST['search'];
	$result = mysql_query("SELECT *FROM r_data where author LIKE '%$search%' OR title LIKE '%$search%' OR keywords LIKE '%$search%' OR abstract LIKE '%$search%' ORDER BY author ASC") or die(mysql_error());
 $i=0;
// check for empty result
if (mysql_num_rows($result) > 0) {
 
    // output data of each row
	
	//echo "PUBLICATIONS:";
	while ($row = mysql_fetch_array($result)){
		$i++;
        echo "<br><table><tr><td>[".$i."]:&nbsp;<a href='deletenew.php?id=".$row["id"]."'>".$row["title"]."</a>,".$row["author"].",".$row["issuedate"].".(".$row["type"].")</td></tr>";
    }
    echo "<br></table><br><br>";
	}
 }
 else if ( isset( $_POST['action2'] ) ) 
 {
 unset( $_POST['action2'] );
	 echo "<p style='color:red'>SEARCH RESULTS:";
 $search=$_POST['search'];
	$result = mysql_query("SELECT *FROM r_data where author LIKE '%$search%' OR title LIKE '%$search%' OR keywords LIKE '%$search%' OR abstract LIKE '%$search%' ORDER BY issuedate DESC") or die(mysql_error());
 $i=0;
// check for empty result
if (mysql_num_rows($result) > 0) {
 
    // output data of each row
	
	//echo "PUBLICATIONS:";
	while ($row = mysql_fetch_array($result)){
		$i++;
        echo "<br><table><tr><td>[".$i."]:&nbsp;<a href='deletenew.php?id=".$row["id"]."'>".$row["title"]."</a>,".$row["author"].",".$row["issuedate"].".(".$row["type"].")</td></tr>";
    }
    echo "<br></table><br><br>";
	}
 }
 else if ( isset( $_POST['action3'] ) ) 
 {
	unset( $_POST['action3'] );
	 echo "<p style='color:red'>SEARCH RESULTS:";
 $search=$_POST['search'];
	$result = mysql_query("SELECT *FROM r_data where author LIKE '%$search%' OR title LIKE '%$search%' OR keywords LIKE '%$search%' OR abstract LIKE '%$search%' ORDER BY title ASC") or die(mysql_error());
 $i=0;
// check for empty result
if (mysql_num_rows($result) > 0) {
 
    // output data of each row
	
	//echo "PUBLICATIONS:";
	while ($row = mysql_fetch_array($result)){
		$i++;
        echo "<br><table><tr><td>[".$i."]:&nbsp;<a href='deletenew.php?id=".$row["id"]."'>".$row["title"]."</a>,".$row["author"].",".$row["issuedate"].".(".$row["type"].")</td></tr>";
    }
    echo "<br></table><br><br>";
	}
 }
 else if(isset($_POST['search']))
 {
 echo "<p style='color:red'>SEARCH RESULTS:";
 $search=$_POST['search'];
	$result = mysql_query("SELECT *FROM r_data where author LIKE '%$search%' OR title LIKE '%$search%' OR keywords LIKE '%$search%' OR abstract LIKE '%$search%' ORDER BY issuedate DESC") or die(mysql_error());
 $i=0;
// check for empty result
if (mysql_num_rows($result) > 0) {
 
    // output data of each row
	
	//echo "PUBLICATIONS:";
	while ($row = mysql_fetch_array($result)){
		$i++;
        echo "<br><table><tr><td>[".$i."]:&nbsp;<a href='deletenew.php?id=".$row["id"]."'>".$row["title"]."</a>,".$row["author"].",".$row["issuedate"].".(".$row["type"].")</td></tr>";
    }
    echo "<br></table><br><br>";
} else {
    echo "No RESULTS";
}
 }
 else
 {
  
// get all products from products table
$result = mysql_query("SELECT *FROM r_data ORDER BY issuedate DESC") or die(mysql_error());
 $i=0;
// check for empty result
if (mysql_num_rows($result) > 0) {
 
    // output data of each row
	
	//echo "PUBLICATIONS:";
	while ($row = mysql_fetch_array($result)){
		$i++;
        echo "<br><table><tr><td>[".$i."]:&nbsp;<a href='deletenew.php?id=".$row["id"]."'>".$row["title"]."</a>,".$row["author"].",".$row["issuedate"].".(".$row["type"].")</td></tr>";
    }
    echo "<br></table><br><br>";
} else {
    echo "No RESULTS";
}
}*/

if ( isset( $_POST['dept']) )
{
	$dept=$_POST['dept'];
	$result = mysql_query("SELECT * FROM r_data WHERE branch like'%$dept%' ORDER BY author ASC") or die(mysql_error());
 $i=0;
//check for empty result
if (mysql_num_rows($result) > 0) {
 
    // output data of each row
	
	//echo "PUBLICATIONS:";
	while ($row = mysql_fetch_array($result))
	{
		$i++;
        echo "<br><table><tr><td>[".$i."]:&nbsp;<a href='deletenew.php?id=".$row["id"]."'>".$row["title"]."</a>,".$row["author"].",".$row["issuedate"].".(".$row["type"].")</td></tr>";
        }
       echo "<br></table><br><br>";
	} 
else {
    echo "No RESULTS";
}


}


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