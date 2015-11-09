<?php
require('../header.php');
require('sidebar.php');
?>

    <div class="main-content">
        <div id="contents">

            <?php 
			$searchErr="";
		if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		if(empty($_POST["search"])){
			$searchErr="Enter a word!"; }
	}
	?>

                <form method="POST" action="all.php">

                    <h1 class="body_title">SORT OPTIONS:</h1>

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
                    </select>

                    
                    <br>

                    <?php
		// include db connect class
		require_once __DIR__ . '/db_connect.php';
 
		// connecting to db
		$db1 = new DB_CONNECT();
		$query='SELECT DISTINCT name FROM Author ORDER BY name';
		$res=mysql_query($query);
		 ?>

                        Author: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        <select name="author"  class="form-control">
                            <option value="any"> Any </option>
                            <?php
        while ($row = mysql_fetch_array($res)) {
            echo '<option value="'.$row["name"].'">'.$row["name"].'</option>';
        }
        ?>
                        </select>
                       
                        <br> Type: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        <select name="type"  class="form-control">
                            <option value="any"> Any</option>
                            <option value="publication"> Publication </option>
                            <option value="thesis"> Thesis </option>
                            <option value="BTP REPORT"> BTP Report </option>
                            <option value="book"> Book </option>
                        </select>

                        <br>
                        
                        <?php
		// include db connect class
		require_once __DIR__ . '/db_connect.php';
 
		// connecting to db
		$db2 = new DB_CONNECT();
		$query='SELECT DISTINCT issuedate FROM r_data WHERE issuedate <>0 ORDER BY issuedate';
		$res2=mysql_query($query);
		 ?>

                            Issuing year: &nbsp;
                            <select name="date"  class="form-control">
                                <option value="any"> Any </option>
                                <?php
        while ($row = mysql_fetch_array($res2)) {
            echo '<option value="'.$row["issuedate"].'">'.$row["issuedate"].'</option>';
        }
        ?>
                            </select>




                            <br>
                            <br>
                            <input type="submit" name="submit" value="Submit" class="btn btnx"/>
                            <br>
                </form>
                <br>
                <br>

                <?php
 

 
// include db connect class
require_once __DIR__ . '/db_connect.php';
 
// connecting to db
$db = new DB_CONNECT();



if( (isset( $_POST['author']) and isset($_POST['type'])) and (isset( $_POST['dept']) and isset($_POST['date'])))
{
	echo "<p style='color:red'>SEARCH RESULTS:</p>";
	$auth=$_POST['author'];
	$typ=$_POST['type'];
	$dept=$_POST['dept'];
	$date=$_POST['date'];

	
	if($dept!="any" and $auth=="any" and $typ=="any" and $date=="any")
	{
		$result1=mysql_query("SELECT * FROM r_data WHERE branch like'%$dept%' ORDER BY author ASC") or die(mysql_error());

		$i=0;
		// check for empty result
		if (mysql_num_rows($result1) > 0) {
 
   			 // output data of each row
	
				//echo "PUBLICATIONS:";
			while ($row1 = mysql_fetch_array($result1)){
			$i++;
        		echo "[".$i."]:&nbsp;<a href='allnew.php?id=".$row1["id"]."'>".$row1["title"]."</a>,".$row1["author"].",".$row1["issuedate"].".(".$row1["type"].")<br><br>";
    			}
			echo "<br>";
		  }

			else {
    				echo "No RESULTS";
			     }


	}



	else if($dept!="any" and $auth=="any" and $typ=="any" and $date!="any")
	{
		$result1=mysql_query("SELECT * FROM r_data WHERE branch LIKE'%$dept%' AND issuedate LIKE '%$date' ORDER BY author ASC") or die(mysql_error());

		$i=0;
		// check for empty result
		if (mysql_num_rows($result1) > 0) {
 
   			 // output data of each row
	
				//echo "PUBLICATIONS:";
			while ($row1 = mysql_fetch_array($result1)){
			$i++;
        		echo "[".$i."]:&nbsp;<a href='allnew.php?id=".$row1["id"]."'>".$row1["title"]."</a>,".$row1["author"].",".$row1["issuedate"].".(".$row1["type"].")<br><br>";
    			}
			echo "<br>";
		  }

			else {
    				echo "No RESULTS";
			     }


	}


	else if($dept!="any" and $auth=="any" and $typ!="any" and $date=="any")
	{
		$result1=mysql_query("SELECT * FROM r_data WHERE branch LIKE '%$dept' AND type LIKE '%$typ%' ORDER BY author ASC") or die(mysql_error());

		$i=0;
		// check for empty result
		if (mysql_num_rows($result1) > 0) {
 
   			 // output data of each row
	
				//echo "PUBLICATIONS:";
			while ($row1 = mysql_fetch_array($result1)){
			$i++;
        		echo "[".$i."]:&nbsp;<a href='allnew.php?id=".$row1["id"]."'>".$row1["title"]."</a>,".$row1["author"].",".$row1["issuedate"].".(".$row1["type"].")<br><br>";
    			}
			echo "<br>";
		  }

			else {
    				echo "No RESULTS";
			     }


	}


	else if($dept!="any" and $auth=="any" and $typ!="any" and $date!="any")
	{
		$result1=mysql_query("SELECT * FROM r_data WHERE branch LIKE '%$dept' AND (type LIKE '%$typ%' AND issuedate LIKE '%$date') ORDER BY author ASC") or die(mysql_error());

		$i=0;
		// check for empty result
		if (mysql_num_rows($result1) > 0) {
 
   			 // output data of each row
	
				//echo "PUBLICATIONS:";
			while ($row1 = mysql_fetch_array($result1)){
			$i++;
        		echo "[".$i."]:&nbsp;<a href='allnew.php?id=".$row1["id"]."'>".$row1["title"]."</a>,".$row1["author"].",".$row1["issuedate"].".(".$row1["type"].")<br><br>";
    			}
			echo "<br>";
		  }

			else {
    				echo "No RESULTS";
			     }


	}


	else if($dept!="any" and $auth!="any" and $typ=="any" and $date=="any")
	{
		$result1=mysql_query("SELECT * FROM r_data WHERE branch LIKE '%$dept%' AND author LIKE '%$auth%' ORDER BY author ASC") or die(mysql_error());

		$i=0;
		// check for empty result
		if (mysql_num_rows($result1) > 0) {
 
   			 // output data of each row
	
				//echo "PUBLICATIONS:";
			while ($row1 = mysql_fetch_array($result1)){
			$i++;
        		echo "[".$i."]:&nbsp;<a href='allnew.php?id=".$row1["id"]."'>".$row1["title"]."</a>,".$row1["author"].",".$row1["issuedate"].".(".$row1["type"].")<br><br>";
    			}
			echo "<br>";
		  }

			else {
    				echo "No RESULTS";
			     }


	}



	//1101

	else if($dept!="any" and $auth!="any" and $typ=="any" and $date!="any")
	{
		$result1=mysql_query("SELECT * FROM r_data WHERE branch LIKE '%$dept%' AND (author LIKE '%$auth%' AND issuedate='$date') ORDER BY author ASC") or die(mysql_error());

		$i=0;
		// check for empty result
		if (mysql_num_rows($result1) > 0) {
 
   			 // output data of each row
	
				//echo "PUBLICATIONS:";
			while ($row1 = mysql_fetch_array($result1)){
			$i++;
        		echo "[".$i."]:&nbsp;<a href='allnew.php?id=".$row1["id"]."'>".$row1["title"]."</a>,".$row1["author"].",".$row1["issuedate"].".(".$row1["type"].")<br><br>";
    			}
			echo "<br>";
		  }

			else {
    				echo "No RESULTS";
			     }


	}



	//1110

	else if($dept!="any" and $auth!="any" and $typ!="any" and $date=="any")
	{
		$result1=mysql_query("SELECT * FROM r_data WHERE branch LIKE '%$dept%' AND (author LIKE '%$auth%' AND typE LIKE '%$typ%') ORDER BY author ASC") or die(mysql_error());

		$i=0;
		// check for empty result
		if (mysql_num_rows($result1) > 0) {
 
   			 // output data of each row
	
				//echo "PUBLICATIONS:";
			while ($row1 = mysql_fetch_array($result1)){
			$i++;
        		echo "[".$i."]:&nbsp;<a href='allnew.php?id=".$row1["id"]."'>".$row1["title"]."</a>,".$row1["author"].",".$row1["issuedate"].".(".$row1["type"].")<br><br>";
    			}
			echo "<br>";
		  }

			else {
    				echo "No RESULTS";
			     }


	}


	//1111

	else if($dept!="any" and $auth!="any" and $typ!="any" and $date!="any")
	{
		$result1=mysql_query("SELECT * FROM r_data WHERE (branch LIKE '%$dept%' AND issuedate='$date') AND (author LIKE '%$auth%' AND type LIKE'%$typ%') ORDER BY author ASC") or die(mysql_error());

		$i=0;
		// check for empty result
		if (mysql_num_rows($result1) > 0) {
 
   			 // output data of each row
	
				//echo "PUBLICATIONS:";
			while ($row1 = mysql_fetch_array($result1)){
			$i++;
        		echo "[".$i."]:&nbsp;<a href='allnew.php?id=".$row1["id"]."'>".$row1["title"]."</a>,".$row1["author"].",".$row1["issuedate"].".(".$row1["type"].")<br><br>";
    			}
			echo "<br>";
		  }

			else {
    				echo "No RESULTS";
			     }


	}


	//0100

	else if($dept=="any" and $auth!="any" and $typ=="any" and $date=="any")
	{
		$result1=mysql_query("SELECT * FROM r_data WHERE author LIKE '%$auth%' ORDER BY author ASC") or die(mysql_error());

		$i=0;
		// check for empty result
		if (mysql_num_rows($result1) > 0) {
 
   			 // output data of each row
	
				//echo "PUBLICATIONS:";
			while ($row1 = mysql_fetch_array($result1)){
			$i++;
        		echo "[".$i."]:&nbsp;<a href='allnew.php?id=".$row1["id"]."'>".$row1["title"]."</a>,".$row1["author"].",".$row1["issuedate"].".(".$row1["type"].")<br><br>";
    			}
			echo "<br>";
		  }

			else {
    				echo "No RESULTS";
			     }


	}


		//0101

	else if($dept=="any" and $auth!="any" and $typ=="any" and $date!="any")
	{
		$result1=mysql_query("SELECT * FROM r_data WHERE author LIKE '%$auth%' AND issuedate='$date' ORDER BY author ASC") or die(mysql_error());

		$i=0;
		// check for empty result
		if (mysql_num_rows($result1) > 0) {
 
   			 // output data of each row
	
				//echo "PUBLICATIONS:";
			while ($row1 = mysql_fetch_array($result1)){
			$i++;
        		echo "[".$i."]:&nbsp;<a href='allnew.php?id=".$row1["id"]."'>".$row1["title"]."</a>,".$row1["author"].",".$row1["issuedate"].".(".$row1["type"].")<br><br>";
    			}
			echo "<br>";
		  }

			else {
    				echo "No RESULTS";
			     }


	}



		//0110

	else if($dept=="any" and $auth!="any" and $typ!="any" and $date=="any")
	{
		$result1=mysql_query("SELECT * FROM r_data WHERE author LIKE '%$auth%' AND type='$typ' ORDER BY author ASC") or die(mysql_error());

		$i=0;
		// check for empty result
		if (mysql_num_rows($result1) > 0) {
 
   			 // output data of each row
	
				//echo "PUBLICATIONS:";
			while ($row1 = mysql_fetch_array($result1)){
			$i++;
        		echo "[".$i."]:&nbsp;<a href='allnew.php?id=".$row1["id"]."'>".$row1["title"]."</a>,".$row1["author"].",".$row1["issuedate"].".(".$row1["type"].")<br><br>";
    			}
			echo "<br>";
		  }

			else {
    				echo "No RESULTS";
			     }


	}


	//0111

	else if($dept=="any" and $auth!="any" and $typ!="any" and $date!="any")
	{
		$result1=mysql_query("SELECT * FROM r_data WHERE author LIKE '%$auth%' AND (type='$typ' AND issuedate='$date') ORDER BY author ASC") or die(mysql_error());

		$i=0;
		// check for empty result
		if (mysql_num_rows($result1) > 0) {
 
   			 // output data of each row
	
				//echo "PUBLICATIONS:";
			while ($row1 = mysql_fetch_array($result1)){
			$i++;
        		echo "[".$i."]:&nbsp;<a href='allnew.php?id=".$row1["id"]."'>".$row1["title"]."</a>,".$row1["author"].",".$row1["issuedate"].".(".$row1["type"].")<br><br>";
    			}
			echo "<br>";
		  }

			else {
    				echo "No RESULTS";
			     }


	}


	//0000
		
	else if($dept=="any" and $auth=="any" and $typ=="any" and $date=="any")
	{
		$result1=mysql_query("SELECT * FROM r_data ORDER BY author ASC") or die(mysql_error());

		$i=0;
		// check for empty result
		if (mysql_num_rows($result1) > 0) {
 
   			 // output data of each row
	
				//echo "PUBLICATIONS:";
			while ($row1 = mysql_fetch_array($result1)){
			$i++;
        		echo "[".$i."]:&nbsp;<a href='allnew.php?id=".$row1["id"]."'>".$row1["title"]."</a>,".$row1["author"].",".$row1["issuedate"].".(".$row1["type"].")<br><br>";
    			}
			echo "<br>";
		  }

			else {
    				echo "No RESULTS";
			     }


	}

	//0001

	else if($dept=="any" and $auth=="any" and $typ=="any" and $date!="any")
	{
		$result1=mysql_query("SELECT * FROM r_data WHERE issuedate='$date' ORDER BY author ASC") or die(mysql_error());

		$i=0;
		// check for empty result
		if (mysql_num_rows($result1) > 0) {
 
   			 // output data of each row
	
				//echo "PUBLICATIONS:";
			while ($row1 = mysql_fetch_array($result1)){
			$i++;
        		echo "[".$i."]:&nbsp;<a href='allnew.php?id=".$row1["id"]."'>".$row1["title"]."</a>,".$row1["author"].",".$row1["issuedate"].".(".$row1["type"].")<br><br>";
    			}
			echo "<br>";
		  }

			else {
    				echo "No RESULTS";
			     }


	}


		//0010

	else if($dept=="any" and $auth=="any" and $typ!="any" and $date=="any")
	{
		$result1=mysql_query("SELECT * FROM r_data WHERE type='$typ' ORDER BY author ASC") or die(mysql_error());

		$i=0;
		// check for empty result
		if (mysql_num_rows($result1) > 0) {
 
   			 // output data of each row
	
				//echo "PUBLICATIONS:";
			while ($row1 = mysql_fetch_array($result1)){
			$i++;
        		echo "[".$i."]:&nbsp;<a href='allnew.php?id=".$row1["id"]."'>".$row1["title"]."</a>,".$row1["author"].",".$row1["issuedate"].".(".$row1["type"].")<br><br>";
    			}
			echo "<br>";
		  }

			else {
    				echo "No RESULTS";
			     }


	}


		//0011

	else if($dept=="any" and $auth=="any" and $typ!="any" and $date!="any")
	{
		$result1=mysql_query("SELECT * FROM r_data WHERE type='$typ' AND issuedate='$date' ORDER BY author ASC") or die(mysql_error());

		$i=0;
		// check for empty result
		if (mysql_num_rows($result1) > 0) {
 
   			 // output data of each row
	
				//echo "PUBLICATIONS:";
			while ($row1 = mysql_fetch_array($result1)){
			$i++;
        		echo "[".$i."]:&nbsp;<a href='allnew.php?id=".$row1["id"]."'>".$row1["title"]."</a>,".$row1["author"].",".$row1["issuedate"].".(".$row1["type"].")<br><br>";
    			}
			echo "<br>";
		  }

			else {
    				echo "No RESULTS";
			     }


	}

	/*else if($auth=="any" and $typ!="any")
	{
		$result1=mysql_query("SELECT * FROM r_data where type LIKE '%$typ' ORDER BY author ASC") or die(mysql_error());

		$i=0;
		// check for empty result
		if (mysql_num_rows($result1) > 0) {
 
   			 // output data of each row
	
				//echo "PUBLICATIONS:";
			while ($row1 = mysql_fetch_array($result1)){
			$i++;
        		echo "[".$i."]:&nbsp;<a href='allnew.php?id=".$row1["id"]."'>".$row1["title"]."</a>,".$row1["author"].",".$row1["issuedate"].".(".$row1["type"].")";
    			}
			echo "<br>";
		  }

			else {
    				echo "No RESULTS";
			     }


	}
	else if($typ=="any" and $auth!="any")
	{
		$result2=mysql_query("SELECT * FROM r_data where author LIKE '%$auth' ORDER BY author ASC") or die(mysql_error());

		$i=0;
		// check for empty result
		if (mysql_num_rows($result2) > 0) {
 
   			 // output data of each row
	
				//echo "PUBLICATIONS:";
			while ($row2 = mysql_fetch_array($result2)){
			$i++;
        		echo "[".$i."]:&nbsp;<a href='allnew.php?id=".$row2["id"]."'>".$row2["title"]."</a>,".$row2["author"].",".$row2["issuedate"].".(".$row2["type"].")";
    			}
			echo "<br>";
		  }

			else {
    				echo "No RESULTS";
			     }



	}
	else if($typ=="any" and $auth=="any")
	{
		$result3=mysql_query("SELECT * FROM r_data ORDER BY author ASC") or die(mysql_error());

		$i=0;
		// check for empty result
		if (mysql_num_rows($result3) > 0) {
 
   			 // output data of each row
	
				//echo "PUBLICATIONS:";
			while ($row3 = mysql_fetch_array($result3)){
			$i++;
        		echo "[".$i."]:&nbsp;<a href='allnew.php?id=".$row3["id"]."'>".$row3["title"]."</a>,".$row3["author"].",".$row3["issuedate"].".(".$row3["type"].")";
    			}
			echo "<br>";
		  }

			else {
    				echo "No RESULTS";
			     }



	}*/
	else
	{

		$result=mysql_query("SELECT * FROM r_data where author LIKE '%$auth' AND type LIKE '%$typ' ORDER BY author ASC") or die(mysql_error());
	
		$i=0;
	// check for empty result
		if (mysql_num_rows($result) > 0) {
 
    	// output data of each row
	
		//echo "PUBLICATIONS:";
		while ($row = mysql_fetch_array($result)){
		$i++;
        	echo "[".$i."]:&nbsp;<a href='allnew.php?id=".$row["id"]."'>".$row["title"]."</a>,".$row["author"].",".$row["issuedate"].".(".$row["type"].")<br><br>";
    		}
    		echo "<br>";
		}

			else {
    				echo "No RESULTS";
			     }


	}

}


 




 
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
        echo "[".$i."]:&nbsp;<a href='allnew.php?id=".$row["id"]."'>".$row["title"]."</a>,".$row["author"].",".$row["issuedate"].".(".$row["type"].")";
    }
    echo "<br>";
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
        echo "[".$i."]:&nbsp;<a href='allnew.php?id=".$row["id"]."'>".$row["title"]."</a>,".$row["author"].",".$row["issuedate"].".(".$row["type"].")";
    }
    echo "<br>";
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
echo "[".$i."]:&nbsp;<a href='allnew.php?id=".$row["id"]."'>".$row["title"]."</a>,".$row["author"].",".$row["issuedate"].".(".$row["type"].")";
    }
    echo "<br>";
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
        echo "[".$i."]:&nbsp;<a href='allnew.php?id=".$row["id"]."'>".$row["title"]."</a>,".$row["author"].",".$row["issuedate"].".(".$row["type"].")";
    }
    echo "<br>";
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
        //echo "[".$i."]:&nbsp;<a href='allnew.php?id=".$row["id"]."'>".$row["title"]."</a>,".$row["author"].",".$row["issuedate"].".(".$row["type"].")";
    }
    echo "<br>";
} else {
    echo "No RESULTS";
}
}
*/
?>


        </div>
        <?php

?>
    </div>
    <?php
require('footer.php');
?>