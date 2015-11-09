<?php
	require('../header.php');
	require('sidebar2.php');
?>

    <div class="main-content">
        <div id="contents">
            <h2 class="body_title">Result</h2>
            <?php
                        
                    $query = "SELECT * FROM ta_applicants WHERE approval='1' "; 
                    $result = mysql_query($query);
                    $rows=mysql_num_rows($result);
                    mysql_error();
                    
                    
                    echo "<table>";         // start a table tag in the HTML
                    ?>
                <tr>
                    <th>S.No</th>
                    <th>Name</th>
                    <th>Roll No.</th>
                    <th>Branch</th>
                    <th>Course Name</th>
                    <th>Faculty</th>
                    <th>Description</th>
                    <th>Status</th>
                    
                </tr>
                <?php
                        while($row = mysql_fetch_array($result))
                        {   

                    ?>
                    <?php
                                $rollnum = $row['rollno'];
                                $query1 = "SELECT Studname FROM campus_student_info WHERE Rollno = '$rollnum' ";
                                $result1 = mysql_query($query1);
                                $rows1 = mysql_num_rows($result1);
                                mysql_error();
                                $row1 = mysql_fetch_array($result1); 
                                echo "<tr><td>" . $row['id'] . "</td> <td>" . $row1['Studname'] . "</td><td>" . $row['rollno'] . "</td>
                                <td>" . $row['branch'] . "</td><td>" . $row['course'] . "</td><td>" . $row['faculty'] . "</td>
                                <td>" . $row['description'] . "</td>
                                <td>Approved</td> </tr>";  
                                

                        }

                        echo "</table>";        //Close the table in HTML
                        
                        mysql_close(); ?>

        </div>
        <?php
	
?>
    </div>
    <?php
	require('../footer.php');
?>