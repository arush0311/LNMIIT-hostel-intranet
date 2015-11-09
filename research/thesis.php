<?php
	require('../header.php');
	require('sidebar.php');
?>

 <div class="main-content">
        <div id="contents">

   


            <form method="POST" action="thesis.php">

                 
                <br> SORT OPTIONS:


		<br> 
                
		<?php
		// include db connect class
		require_once __DIR__ . '/db_connect.php';
 
		// connecting to db
		$db1 = new DB_CONNECT();
		$query='SELECT DISTINCT name FROM Author';
		$res=mysql_query($query);
		 ?>
		
    <select name="author" >
	<option value="select"> Select Author</option>
        <?php
        while ($row = mysql_fetch_array($res)) {
            echo '<option value="'.$row["name"].'">'.$row["name"].'</option>';
        }
        ?>
    </select>



                <input type="submit" name="submit" value="Submit" />
                <br>
             
		                
            </form>
            <br>
            <br>
            <?php
 

 
// include db connect class
require_once __DIR__ . '/db_connect.php';
 
// connecting to db
$db = new DB_CONNECT();



if( isset( $_POST['author']))
{
	echo "<p style='color:red'>SEARCH RESULTS:";
	$auth=$_POST['author'];
	$typ=$_POST['type'];
	$result=mysql_query("SELECT * FROM r_data where author LIKE '%$auth' AND type LIKE 'thesis' ORDER BY author ASC") or die(mysql_error());
	
	$i=0;
// check for empty result
if (mysql_num_rows($result) > 0) {
 
    // output data of each row
	
	//echo "PUBLICATIONS:";
	while ($row = mysql_fetch_array($result)){
		$i++;
        echo "<br><table><tr><td>[".$i."]:&nbsp;<a href='allnew.php?id=".$row["id"]."'>".$row["title"]."</a>,".$row["author"].",".$row["issuedate"].".(".$row["type"].")</td></tr>";
    }
    echo "<br></table><br><br>";
	}

	else {
    echo "No RESULTS";
}

 }




 
/* if ( isset( $_POST['action1'] ) ) { 
	 echo "<p style='color:red'>SEARCH RESULTS:";
 $search=$_POST['search'];
	$result = mysql_query("SELECT *FROM r_data where author LIKE '%$search%' OR title LIKE '%$search%' OR keywords LIKE '%$search%' OR abstract LIKE '%$search%' AND type='thesis' ORDER BY author ASC") or die(mysql_error());
 $i=0;
// check for empty result
if (mysql_num_rows($result) > 0) {
 
    // output data of each row
	
	//echo "PUBLICATIONS:";
	while ($row = mysql_fetch_array($result)){
		$i++;
        echo "<br><table><tr><td>[".$i."]:&nbsp;<a href='allnew.php?id=".$row["id"]."'>".$row["title"]."</a>,".$row["author"].",".$row["issuedate"].".(".$row["type"].")</td></tr>";
    }
    echo "</table><br><br>";
	}
 }
 else if ( isset( $_POST['action2'] ) ) 
 {
	 echo "<p style='color:red'>SEARCH RESULTS:";
 $search=$_POST['search'];
	$result = mysql_query("SELECT *FROM r_data where author LIKE '%$search%' OR title LIKE '%$search%' OR keywords LIKE '%$search%' OR abstract LIKE '%$search%' AND type='thesis' ORDER BY issuedate DESC") or die(mysql_error());
 $i=0;
// check for empty result
if (mysql_num_rows($result) > 0) {
 
    // output data of each row
	
	//echo "PUBLICATIONS:";
	while ($row = mysql_fetch_array($result)){
		$i++;
        echo "<br><table><tr><td>[".$i."]:&nbsp;<a href='allnew.php?id=".$row["id"]."'>".$row["title"]."</a>,".$row["author"].",".$row["issuedate"].".(".$row["type"].")</td></tr>";
    }
    echo "<br></table><br><br>";
	}
 }
 else if ( isset( $_POST['action3'] ) ) 
 {
	 echo "<p style='color:red'>SEARCH RESULTS:";
 $search=$_POST['search'];
	$result = mysql_query("SELECT *FROM r_data where author LIKE '%$search%' OR title LIKE '%$search%' OR keywords LIKE '%$search%' OR abstract LIKE '%$search%' AND type='thesis' ORDER BY title ASC") or die(mysql_error());
 $i=0;
// check for empty result
if (mysql_num_rows($result) > 0) {
 
    // output data of each row
	
	//echo "PUBLICATIONS:";
	while ($row = mysql_fetch_array($result)){
		$i++;
        echo "<br><table><tr><td>[".$i."]:&nbsp;<a href='allnew.php?id=".$row["id"]."'>".$row["title"]."</a>,".$row["author"].",".$row["issuedate"].".(".$row["type"].")</td></tr>";
    }
    echo "<br></table><br><br>";
	}
 }
 else if(isset($_POST['search']))
 {
 echo "<p style='color:red'>SEARCH RESULTS:";
 $search=$_POST['search'];
	$result = mysql_query("SELECT *FROM r_data where author LIKE '%$search%' OR title LIKE '%$search%' OR keywords LIKE '%$search%' OR abstract LIKE '%$search%' AND where type='thesis' ORDER BY issuedate DESC") or die(mysql_error());
 $i=0;
// check for empty result
if (mysql_num_rows($result) > 0) {
 
    // output data of each row
	
	//echo "PUBLICATIONS:";
	while ($row = mysql_fetch_array($result)){
		$i++;
        echo "<br><table><tr><td>[".$i."]:&nbsp;<a href='allnew.php?id=".$row["id"]."'>".$row["title"]."</a>,".$row["author"].",".$row["issuedate"].".(".$row["type"].")</td></tr>";
    }
    echo "<br></table><br><br>";
} else {
    echo "No RESULTS";
}
 }
 else
 { 
$result = mysql_query("SELECT *FROM r_data where type='thesis' ORDER BY issuedate DESC") or die(mysql_error());
 $i=0;
// check for empty result
if (mysql_num_rows($result) > 0) {
 
    // output data of each row
	
	//echo "MTECH THESIS:";
	while ($row = mysql_fetch_array($result)){
		$i++;
        //echo "<br><table><tr><td>[".$i."].&nbsp;<a href='allnew.php?id=".$row["id"]."'>".$row["title"]."</a>,".$row["author"].",".$row["issuedate"]."</td></tr>";
    }
    echo "<br></table><br><br>";
} else {
    echo "No THESIS AVAILABLE";
}
}*/


?>
       
    
     </div>
     <?php

?>
</div>
    <?php
require('footer.php');
?>