<?php
//	error_reporting(0);
  	@mysql_connect('localhost','intranet','user@123');
  	mysql_select_db('intranet');
  	echo mysql_error();
  	if(isset($_POST['apply']))
  	{
	    $name = $_POST['name'];
	    $rollno = $_POST['rollno'];
		$course = $_POST['course'];
		$descr = $_POST['description'];
		$faculty = $_POST['faculty'];
        $email = $_POST['emailid'];
	    $phone = $_POST['contact'];
		$gender = $_POST['gender'];
		$year = $_POST['year'];
		$branch = $_POST['branch'];
        $grade = $_POST['grade'];
		$cgpa = $_POST['cgpa'];
        $exp = nl2br($_POST['experience']);
        
        

		//$query ="INSERT INTO ta_applicants(`rollno`,`branch`,`exp`,`year`,`gender`,`emailid`,`phone`,`faculty`,`description`) VALUES (`$rollno`,`$branch`,`$exp`,`$year`,`$gender`,`$email`,`$phone`,`$faculty,`$descr`)";
        
        $query1="INSERT INTO ta_applicants(rollno,branch,exp,year,gender,emailid,grade,cgpa,phone,course,faculty,description)VALUES('$rollno','$branch','$exp','$year','$gender','$email','$grade','$cgpa','$phone','$course','$faculty','$descr')";
        
	    $query_run=mysql_query($query1);
	    echo mysql_error();

	  

	   header("Location: applyta.php");
	}
?>