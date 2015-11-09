<?php
	require('../header.php');
	require('sidebar2.php');

$year="";

if(!empty($_POST['target_year'])) {
    foreach($_POST['target_year'] as $check) {
            $year.=$check." "; //echoes the value set in the HTML form for each checked checkbox.
                         //so, if I were to check 1, 3, and 5 it would echo value 1, value 3, value 5.
                         
    }
}


    if(isset($_POST['adta']))
  	{
        $course = $_POST['course'];
	    // $target_year = $_POST['target_year'];
		$description = nl2br($_POST['description']);
		$pg_ta_require = $_POST['pg_ta_require'];
        $ug_ta_require = $_POST['ug_ta_require'];
		$hours = $_POST['hours'];
        
        $type = $_POST['type'];
        
        $query = "INSERT INTO `requireta`(`course`,  `description`,`num_ta_pg`,`num_ta_ug` ,`type`,`hours`) VALUES               ('$course','$description','$pg_ta_require','$ug_ta_require','$type','$hours')";
        $query_run=mysql_query($query);
	    echo mysql_error();
    }
    header("Location: showta.php");
	

?>