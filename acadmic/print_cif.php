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


if($_GET["sem"]==sem1)
{
  $selectSQL = 'SELECT * FROM `cif1stsem`';//Enter the name of the table here...}
    $year='1st Year';
}
else if($_GET["sem"]==sem3)
{
  $selectSQL = 'SELECT * FROM `cif3rdsem`';//Enter the name of the table here...}
    $year='2nd Year';
}

    else if($_GET["sem"]==sem5)
{
  $selectSQL = 'SELECT * FROM `cif5thsem`';//Enter the name of the table here...}
        $year='3rd Year';
    
}
    else if($_GET["sem"]==sem7)
{
  $selectSQL = 'SELECT * FROM `cif7thsem`';//Enter the name of the table here...}
        $year='4th Year';
    
}
    else if($_GET["sem"]==pg1st)
{
  $selectSQL = 'SELECT * FROM `cifpg1stsem`';//Enter the name of the table here...}
        $year='PG 1st Year';
    
}
    else if($_GET["sem"]==pg2nd)
{
  $selectSQL = 'SELECT * FROM `cifpg2ndsem`';//Enter the name of the table here...}
        $year='PG 2nd Year';
    
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
                        <h1 class="body_title"><?php echo"$year "; ?>Course Information</h1>
                        <thead>
                            <tr>

                                <th>Course Name</th>
                                <th>For</th>
                                <th>Type Of Course</th>
                                <th>Credits</th>
                                <th>More Information</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
      if( mysql_num_rows( $selectRes )==0 ){
        echo '<tr><td colspan="4">No Rows Returned</td></tr>';
      }else{


        while( $row1 = mysql_fetch_assoc( $selectRes ) ){
         //print_r($row);
          //echo "<br><br>";
          /*$rowlength=count($row);
          for($x = 0; $x < $rowlength ; $x++)
          {
          echo $row[$x];
          echo "<br>";
          } */
          $csf=$row1['Course_Short_Form'];
        // echo $csf.'1'."<br>";
          $directory='uploadcif';
          if($handle = opendir($directory.'/'))
          {
            $file="";
            while($file = readdir($handle))
            {
              if($file!='.' && $file!='..')
              {
                       //echo 'heloo'."<br>";
                       $length=strlen($file);
                        $offset=0;
                        $find='.';
                        $find_length=strlen($find);
                        while($string_position=strpos($file,$find,$offset))
                        {
                          $pos=$string_position;
                          $offset=$string_position+$find_length;
                         // echo $find.'found at'.$pos.'<br>';
                        }
                        //echo $file."<br>";
                        //echo $pos."<br>";
                        $file1=substr($file,0,$pos);
                        //echo $file."<br>";
                        if($file1 == $row1['Course_Short_Form'])
                          {
                           $ciflink= $file;
                           //echo $ciflink."<br>";
                           break;
                          }
                          $ciflink="";
                          $file="";
              }
            }
          }

          echo "<tr><td>{$row1['Course_Name']}</td><td>{$row1['For_Whom']}</td><td>{$row1['Type_Of_Course']}</td><td>{$row1['Credits']}</td>
          <td>
          <a href=\"$directory\\$ciflink\"><div>Download</div></a>
          </td>
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
	require('../footer.php');
?>