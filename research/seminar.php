<?php
	require('../header.php');
	require('sidebar.php');
?>
    <div class="main-content">
        <div id="contents">



            <h1 class="body_title">Seminars</h1>
            <ul>
                <?php 
		$date=date("Y-m-d");
                    // include db connect class
                    require_once __DIR__ . '/db_connect.php';
                    // connecting to db
                    $db = new DB_CONNECT();
                         {
                        // get all products from products table
                        $result = mysql_query("SELECT * FROM seminar ORDER BY date DESC") or die(mysql_error());
                         $i=0;
			
			//echo "$date<br>";

                        // check for empty result
			echo "<br><h3 class=\"body_title\">Upcoming Seminars:</h3>";

                        if (mysql_num_rows($result) > 0) {
			
						
                                while ($row = mysql_fetch_array($result)){
				
				if($row["date"] == $date){
				
                                $i++;
                                echo "<br><li><a href='all_new.php?id=".$row["id"]."'>".$row["title"]."</a> ";
                                if($row["author"]!=NULL)echo $row["author"]."(AUTHOR)";
                                echo " ".$row["date"].".</li>";
				echo "(Ongoing)";
				}

					
				else if($row["date"] > $date){
				
                                $i++;
                                echo "<br><li><a href='all_new.php?id=".$row["id"]."'>".$row["title"]."</a> ";
                                if($row["author"]!=NULL)echo $row["author"]."(AUTHOR)";
                                echo " ".$row["date"].".</li><br>";
				}
                            }
                            echo "<br>";
			}
			 else {
                            echo "<br><h3>No Results</h3>";
                        }
                        }
				?>
                    <br>
                    <?php 
		$date=date("Y-m-d");
                    // include db connect class
                    require_once __DIR__ . '/db_connect.php';
                    // connecting to db
                    $db1 = new DB_CONNECT();
                         {
                        // get all products from products table
						$result = mysql_query("SELECT * FROM seminar ORDER BY date DESC") or die(mysql_error());
                         $i=0;
                        // check for empty result
                        if (mysql_num_rows($result) > 0) {

			//echo"$date<br>";

			//$date=date("Y-m-d");

			//$date1=$row["date"];
			//if(strtotime(.$row["date"]) < strtotime($date))

			    

                            // output data of each row

                            echo "<br><h3 class=\"body_title\">Completed Seminars:</h3>";
                              while ($row = mysql_fetch_array($result))
			    {
				if($row["date"] < $date)
			       {
                                $i++;
                                echo "<li><a href='all_new.php?id=".$row["id"]."'>".$row["title"]."</a> ";
                                if($row["author"]!=NULL)echo $row["author"]."(AUTHOR)";
                                echo " ".$row["date"].".</li><br>";
			       }
                            }
                            echo "<br>";
                        } 
			else {
                            echo "<br><h3 class=\"body_title\">No Results:</h3>";
                        }
                        }
					
				?>


                        <br>
            </ul>

        </div>
    </div>
    <?php
	require('../footer.php');
?>