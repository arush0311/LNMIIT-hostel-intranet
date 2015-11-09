<?php
 error_reporting(0);
 # Init the MySQL Connection
  if( !( $db = mysql_connect( 'localhost' , 'intranet','user@123' ) ) )
    die( 'Failed to connect to MySQL Database Server - #'.mysql_errno().': '.mysql_error());
  if( !mysql_select_db( 'intranet' ) ) //Enter the name of database here....
    die( 'Connected to Server, but Failed to Connect to Database - #'.mysql_errno().': '.mysql_error());
  if(isset($_POST['title']) && isset($_POST['description']))
  {
    if(!empty($_POST['title']) && !empty($_POST['description']))
    {
         $title=$_POST['title'];
         $description=$_POST['description'];
         # Prepare the SELECT Query
         $selectSQL = "INSERT INTO notice VALUES('$title','$description')";
         //echo 'mysql_query( $selectSQL )';
         if (mysql_query($selectSQL))
         {
          echo "New record created successfully";
         }
         else
         {
            echo "Error: " . $selectSQL . "<br>" . mysqli_error($db);
         }
    mysqli_close($conn);

    }
    else
    {
      if(empty($_POST['title']))
      {
       echo 'Enter the Title'."<br>";
      }
      if(empty($_POST['description']))
      {
       echo 'Enter the Content'."<br>";
      }

    }
  }
  else
  {
  echo 'Not received the variables:';
  }


    ?>