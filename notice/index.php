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
$sql = 'DELETE FROM notice WHERE id='.$n;

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

  error_reporting(0);
  session_start();
  mysql_connect('localhost','intranet','user@123');
  mysql_select_db('intranet');

require('../header.php');
?>

        <link rel="stylesheet" type="text/css" href="grid/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="grid/dataTables.bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="grid/jquery.dataTables.css" />

        <script type="text/javascript" src="grid/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="grid/dataTables.bootstrap.js"></script>
        <script type="text/javascript" src="grid/jquery.dataTables.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function () {
                var table = $('#example').DataTable();

                // Sort by column 1 and then re-draw
                table
                    .order([0, 'desc'])
                    .draw();
            });
        </script>

        <div class="content1">

            <table id="example" class="display" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Title</th>
                        <th>Posted By</th>
                        <th>Attention</th>
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
                </thead>

                <tbody>

                    <?php

            if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==1 )
			{
				if($_SESSION['admin'] != 0)
				{
					$query="SELECT * FROM `notice` WHERE visibility=2 OR visibility=-1  order by id desc";
				}
				else if(($_SESSION['admin'] == 0) || ($_SESSION['admin'] == 6))
				{
					$query="SELECT * FROM `notice` WHERE visibility=1 OR visibility=-1 order by id desc";
				}
			}
			else{
                $query="SELECT * FROM `notice` WHERE visibility=-1 order by id desc";
            }

            $query_run=mysql_query($query);
            mysql_error();

            while ($row = mysql_fetch_array($query_run)) {
                    $phpdate = strtotime( $row['date'] );
                    $date = date( 'd F Y', $phpdate );
            ?>
                        <tr>
                            <td>
                                <?php echo $date; ?>
                            </td>
                            <td>
                                <a href="./showNotice.php?id=<?php echo $row['id']; ?>">
                                    <?php echo $row['title']; ?>
                                </a>
                            </td>
                            <td>
                                <?php echo $row['user']; ?>
                            </td>
                            <td>
                                <?php echo $row['target']; ?>
                            </td>
                            <?php

            if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==1 )
			{
				if($_SESSION['admin'] == 6 )
				{   
                      //  echo '<td><input type="submit" name="deleteItem" value="'.$row['id'].'" /></td>"';
                        echo "<td><a href=index.php?idd=".$row['id']." onclick=\"return confirm('Are you sure you want to delete this notice?')\" >Delete</a></td>";
                       
				}
				
			}
			
            ?>
                        </tr>


                        <?php

            }



        ?>

                </tbody>
            </table>
            <!--<button><a href="add_notice.php">Add a Notice</a></button>-->
            <?php
		if($_SESSION['admin'] != 0)
		{
			echo "<form action=\"add_notice.php\">
    <input class=\"btn btnx\" type=\"submit\" value=\"Add a notice\">
</form>
            ";
		}
	?>
                <br>
                <br>
                <br>
                <br>
                <br>
        </div>
        <?php
require('../footer.php');
?>
            </body>


            </html>