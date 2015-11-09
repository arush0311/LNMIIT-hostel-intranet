<?php

//load and connect to MySQL database stuff
require("config.inc.php");

if (!empty($_POST)) {
    //gets user's info based off of a username.
    $query = " 
            SELECT 
                q_id
            FROM questions 
            WHERE 
                otp = :otp 
        ";
    
    $query_params = array(
        ':otp' => $_POST['otp']
    );
    
    try {
        $stmt   = $db->prepare($query);
        $result = $stmt->execute($query_params);
    }
    catch (PDOException $ex) {
        // For testing, you could use a die and message. 
        //die("Failed to run query: " . $ex->getMessage());
        
        //or just use this use this one to product JSON data:
        $response["success"] = 0;
        $response["message"] = "Database Error1. Please Try Again!";
        die(json_encode($response));
        
    }
    
    //This will be the variable to determine whether or not the user's information is correct.
    //we initialize it as false.
        $otp_ok=false;
    //fetching all the rows from the query
    $row = $stmt->fetch();
    if ($row) {
        //if we encrypted the password, we would unencrypt it here, but in our case we just
        //compare the two passwords
        $response["success"] = 1;
        $response["message"] = "OTP Verification successful!";
        die(json_encode($response));
    }
    
    else {
        $response["success"] = 0;
        $response["message"] = "Invalid OTP !";
        die(json_encode($response));
    }
    
} else {
?>
		<h1>OTP</h1> 
		<form action="verifyOtp.php" method="post"> 
		    OTP:<br /> 
		    <input type="text" name="otp" placeholder="otp" /> 
		    <br /><br /> 
		   
		    <input type="submit" value="Proceed" /> 
		</form> 
		<a href="teacherSignup.php">Register</a>
	<?php
}

?> 

