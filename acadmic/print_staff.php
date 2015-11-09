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
  $selectSQL = 'SELECT * FROM `staff`';//Enter the name of the table here...
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
                        <h1 class="body_title">All Staff Memebers</h1>
                        <thead>
                            <tr>
                                <!--<th>Staff_ID</th>-->
                                <th>First_Name</th>
                                
                                <th>Department</th>
                                <th>Email_Address</th>
                                <th>Contact_No</th>
                                <!--<th>Contact_Hrs</th>
      <th>Office_No</th>-->
                                
                                <th>Research_Area</th>
                                <th>Designation</th>
                                <!--<th>More_Information</th>-->
                            </tr>
                        </thead>
                        <tbody>
                            <?php
      if( mysql_num_rows( $selectRes )==0 ){
        echo '<tr><td colspan="4">No Rows Returned</td></tr>';
      }else{
        while( $row = mysql_fetch_assoc( $selectRes ) ){
        // print_r($row);
          //echo "<br><br>";
          /*$rowlength=count($row);
          for($x = 0; $x < $rowlength ; $x++)
          {
          echo $row[$x];
          echo "<br>";
          } */
          $fid=$row['Staff_ID'];
          echo "<tr><!--<td>{$row['Staff_ID']}</td>--><td><a href=\"
          http://www.lnmiit.ac.in/Employee_ProfileNew.aspx?nDeptID=$fid
          \" target=\"_blank\">
          <div>{$row['First_Name']}{$row['Last_Name']}</div>
          </a></td><td>{$row['Department']}</td><td>{$row['Email_Address']}</td><td>{$row['Contact_No']}</td><!--<td>{$row['Contact_Hrs']}</td><td>{$row['Office_No']}</td>--><td>{$row['Research_Area']}</td><td>{$row['Designation']}</td>
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