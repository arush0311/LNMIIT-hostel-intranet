<?php
require('../header.php');
require('sidebar.php');
?>


    
    

    <?php
 error_reporting(0);
 # Init the MySQL Connection
  if( !( $db = mysql_connect( 'localhost' , 'intranet' , 'user@123' ) ) )
    die( 'Failed to connect to MySQL Database Server - #'.mysql_errno().': '.mysql_error());
  if( !mysql_select_db( 'intranet' ) ) //Enter the name of database here....
    die( 'Connected to Server, but Failed to Connect to Database - #'.mysql_errno().': '.mysql_error());

 # Prepare the SELECT Query
if($_GET["fac"]==cse)
{
  $selectSQL = 'SELECT * FROM `cse_faculty`';//Enter the name of the table here...}
    $branch='CSE';
}
else if($_GET["fac"]==ece)
{
  $selectSQL = 'SELECT * FROM `ece_faculty`';//Enter the name of the table here...}
    $branch='ECE';
}

    else if($_GET["fac"]==hss)
{
  $selectSQL = 'SELECT * FROM `hss_faculty`';//Enter the name of the table here...}
        $branch='HSS';
    
}
    else if($_GET["fac"]==maths)
{
  $selectSQL = 'SELECT * FROM `maths_faculty`';//Enter the name of the table here...}
        $branch='Maths';
    
}
    else if($_GET["fac"]==mme)
{
  $selectSQL = 'SELECT * FROM `mme_faculty`';//Enter the name of the table here...}
        $branch='MME';
    
}
    else if($_GET["fac"]==physics)
{
  $selectSQL = 'SELECT * FROM `physics_faculty`';//Enter the name of the table here...}
        $branch='Physics';
    
}

 # Execute the SELECT Query
  if( !( $selectRes = mysql_query( $selectSQL ) ) ){
    echo 'Retrieval of data from Database Failed - #'.mysql_errno().': '.mysql_error();
  }else{
    ?>
        <html>

        <body>

            <div id="contents">
                <div class="ex">
                    <table>
                        <h1 class="body_title"><?php echo"$branch "; ?>Faculty</h1>
                        <thead>
                            <tr>
                                <!--<th>Faculty_ID</th>-->
                                <th>First Name</th>
                                
                               
                                <th>Email Address</th>
                                <th>Contact/Ext. No</th>                              
                                <th>Office No</th>
                                <th>Research Area</th>
                                <!--<th>More_Information</th>-->
                            </tr>
                        </thead>
                        <tbody>
                            <?php
      if( mysql_num_rows( $selectRes )==0 ){
        echo '<tr><td colspan="4">No Rows Returned</td></tr>';
      }else{
        while( $row = mysql_fetch_assoc( $selectRes ) ){
          //print_r($row);
          //echo "<br><br>";
          /*$rowlength=count($row);
          for($x = 0; $x < $rowlength ; $x++)
          {
          echo $row[$x];
          echo "<br>";
          } */
          $fid=$row['Faculty_ID'];
          echo "<tr>
	<td><a href=\"http://www.lnmiit.ac.in/Employee_ProfileNew.aspx?nDeptID=$fid\" target=\"_blank\">
          <div>{$row['First_Name']} {$row['Last_Name']}
	</div>
          </a></td>
	<td>{$row['Email_Address']}</td><td>{$row['Contact_No']} {$row['Extension_No']}</td><td>{$row['Office_No']}</td><td>{$row['Research_Area']}</td>
          
          </tr>\n";
        }
      }
    ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </body>

        </html>
        <?php
  }

?>
            <?php
	require('../footer.php');
?>