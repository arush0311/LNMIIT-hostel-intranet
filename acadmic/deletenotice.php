      <?php
 error_reporting(0);
 # Init the MySQL Connection
  if( !( $db = mysql_connect( 'localhost' , 'intranet' , 'user@123' ) ) )
    die( 'Failed to connect to MySQL Database Server - #'.mysql_errno().': '.mysql_error());
  if( !mysql_select_db( 'intranet' ) ) //Enter the name of database here....
    die( 'Connected to Server, but Failed to Connect to Database - #'.mysql_errno().': '.mysql_error());

 # Prepare the SELECT Query
  $selectSQL = 'SELECT * FROM `notice`';//Enter the name of the table here...
 # Execute the SELECT Query
  if( !( $selectRes = mysql_query( $selectSQL ) ) ){
    echo 'Retrieval of data from Database Failed - #'.mysql_errno().': '.mysql_error();
  }else{
    ?>
    <html>
   <head>
   <style>
   .ex{
   margin-left: 40px;
   margin-top: 30px;
   margin-right: 180px;
   margin-bottom: 30px;
   }
   </style>
   </head>
    <body>
  <div class="ex">
<table border="2"><caption><strong>NOTICES</strong></caption>
  <thead>
    <tr>
      <th>Checkbox</th>
      <th>Title</th>
      <th>Content</th>
    </tr>
  </thead>
  <tbody>
    <?php
      if( mysql_num_rows( $selectRes )==0 ){
        echo '<tr><td colspan="4">No Rows Returned</td></tr>';
      }
      else
      {
        while( $row = mysql_fetch_assoc( $selectRes ) )
        {
          //print_r($row);
          echo "<tr><td><html><form><input type="checkbox" name="notice"></form></html></td><td>{$row['Title']}</td><td>{$row['Content']}</td></tr>\n";
        }
      }
    ?>
  </tbody>
</table>
</div>
</body>
</html>
    <?php
  }

?>