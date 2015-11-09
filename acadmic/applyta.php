<?php
	require('../header.php');
	require('sidebar2.php');
?>

    <div class="main-content">
        <div id="contents">

            
            
            <?php if(isset($_SESSION['id'])&& (($_SESSION['admin']==0) || ($_SESSION['admin']==6)) )
{?>
                <h2 class="body_title">Apply for TASHIP</h2>
                <p><font color="red">Note : You Can apply for Maximum of 2 courses.</font></p>
		 <?php
            
                        $query = "SELECT * FROM requireta"; 
                        $result = mysql_query($query);

                        echo "<table>";         // start a table tag in the HTML
                        ?>
                        <tr>
                        <th>S.No</th>
                        <th>Course</th>
                        <th>Target Year</th>
                        <th>Description</th>
                        <th>TAs Required</th>
                        <th>Name of Faculty</th>
			<th>Apply</th>
                    </tr>
                        <?php
                        while($row = mysql_fetch_array($result))
                        {   
                           
                
                    ?>
                    <?php
                                echo "<tr><td>" . $row['id'] . "</td><td>" . $row['course'] . "</td><td>" . $row['target_year'] . "</td>
                                        <td>" . $row['description'] . "</td><td>" . $row['num_ta'] . "</td><td>" . $row['name_faculty'] . "</td><td><a href=applynow.php?idd=".$row['id'].">Apply</a></td>                                         </tr>";  
                        }

                        echo "</table>";        //Close the table in HTML

                        mysql_close(); 
             ?>
                <?php }

else
{?>
			        <h2>Please login to continue.</h2>
<?php } ?>
            
            
            



        </div>
    </div>

    <?php
	require('../footer.php');
?>