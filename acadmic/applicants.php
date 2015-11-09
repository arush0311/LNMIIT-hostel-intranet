<?php
if($_GET["no"]!=''){

$dbhost = 'localhost';
$dbuser = 'intranet';
$dbpass = 'user@123';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);

$n=(int)$_GET["no"];

if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
$sql = 'DELETE FROM ta_applicants WHERE id='.$n;

mysql_select_db('intranet');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not delete data: ' . mysql_error());
}
}

mysql_close($conn);
    
    if($_GET["yes"]!=''){

$dbhost = 'localhost';
$dbuser = 'intranet';
$dbpass = 'user@123';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);

$n=(int)$_GET["yes"];

if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
$sql = 'UPDATE ta_applicants SET approval=1 where id='.$n;

mysql_select_db('intranet');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not update data: ' . mysql_error());
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
        <h2 class="body_title">Applicants</h2>
        <?php
            
                        $query = "SELECT * FROM ta_applicants WHERE approval = 0"; 
                        $result = mysql_query($query);

                                 echo "<table><tr>
                        <th>S.No</th>
                        <th>Name</th>
                        <th>Roll no</th>
                        <th>Gender</th>
                        <th>Branch</th>
                        <th>Grade</th>
                        <th>CGPA</th>
                        <th>Experience</th>
                        <th>Email Id</th>
                        <th>Contact</th>
                        <th>Course Name</th>
                        <th>Faculty</th>
                        <th>Description</th>
                        <th>Status</th>
                    </tr>"; // start a table tag in the HTML
                        ?>
                        
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
                            
                                echo "<tr><td>" . $row['id'] . "</td><td>". $row1['Studname'] ."</td><td>" . $row['rollno'] . "</td><td>" . $row['gender'] . "</td><td>" . $row['branch'] . "</td><td>" . $row['grade'] . "</td><td>" . $row['cgpa'] . "</td>
                                        <td>" . $row['exp'] . "</td><td>" . $row['emailid'] . "</td><td>" . $row['phone'] . "</td><td>" . $row['course'] . "</td><td>" . $row['faculty'] . "</td><td>" . $row['description'] . "</td><td><a href=applicants.php?yes=" . $row['id'] ." onclick=\"return confirm('Are you sure you want to approve this applicant?')\" >Approve</a> <a href=applicants.php?no=" . $row['id'] ." onclick=\"return confirm('Are you sure you want to reject this applicant?')\" >Reject</a>  </td> </tr>";  
                                
                          
                            

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