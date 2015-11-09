<?php
if($_GET["idd"]!=''){

$dbhost = 'localhost';
$dbuser = 'intranet';
$dbpass = 'user@123';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);

$n=(int)$_GET["idd"];

if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
$sql = 'DELETE FROM requireta WHERE id='.$n;

mysql_select_db('intranet');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not delete data: ' . mysql_error());
}

mysql_close($conn);

 //header("Location: intranet.lnmiit.ac.in/notice");
}?>


<?php
	require('../header.php');
	require('sidebar2.php');
?>

    <div class="main-content">
        <div id="contents">

            <h2>Teacher Assistantship Offered</h2>
            
            <?php
            
                        $query = "SELECT * FROM requireta"; 
                        $result = mysql_query($query);

                        echo "<table>";         // start a table tag in the HTML
                        ?>
                        <tr>
                        <th>S.No</th>
                        <th>Course Name</th>
                        <th>Type Of</th>
                        <th>No. of PG TAs</th>
                        <th>No. of UG TAs</th>
                        <th>Assistance of Hours/Week</th>
                        <th>Descritpion</th>
                       <?php

            if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==1 )
			{
				if($_SESSION['admin'] == 6)
				{   ?>
                            <th>Delete</th>
                            <?php
				}
				
			}
			
            ?>
                    </tr>
                        <?php
                        while($row = mysql_fetch_array($result))
                        {   
                           
                
                    ?>
                    <?php
                                echo "<tr><td>" . $row['id'] . "</td><td>" . $row['course'] . "</td><td>" . $row['type'] . "</td>
                                        <td>" . $row['num_ta_pg'] . "</td><td>" . $row['num_ta_ug'] . "</td><td>" . $row['hours'] . "</td><td>" . $row['description'] . "</td>";
                            
                             
            if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==1 )
			{
				if($_SESSION['admin'] == 6)
				{   
                      //  echo '<td><input type="submit" name="deleteItem" value="'.$row['id'].'" /></td>"';
                        echo "<td><a href=showta.php?idd=".$row['id']." onclick=\"return confirm('Are you sure you want to delete this?')\" >Delete</a></td>";
                       
				}
				
			}
			
            
                            
                            
                                

                        }

                        echo "</table>";        //Close the table in HTML
                        
                                if($_SESSION['admin'] != 0)
                                {
                                    echo "<br><form action=\"addta.php\">
                                    <input class=\"btn btnx\" type=\"submit\" value=\"Add TA Offer\">
                                    </form>";
                                }
                                
                        mysql_close(); ?>



        </div>
    </div>

    <?php
	require('../footer.php');
?>