<?php

/*
Our "config.inc.php" file connects to database every time we include or require
it within a php script.  Since we want this script to add a new user to our db,
we will be talking with our database, and therefore,
let's require the connection to happen:
*/
require("config.inc.php");
if (!empty($_POST)) {
//initial query
$query = "Select * FROM questions where t_username=:user";
$query_params = array(':user' => $_POST['username']   );

//execute query
try {
    $stmt   = $db->prepare($query);
    $result = $stmt->execute($query_params);
}
catch (PDOException $ex) {
    $response["success"] = 0;
    $response["message"] = "Database Error!";
    die(json_encode($response));
}

// Finally, we can retrieve all of the found rows into an array using fetchAll 
$rows = $stmt->fetchAll();


if ($rows) {
    $response["success"] = 1;
    $response["message"] = "Post Available!";
    $response["posts"]   = array();
    
    foreach ($rows as $row) {
        $post             = array();
		$post["question_id"]  = $row["q_id"];
        $post["username"] = $row["t_username"];
        $post["question"]    = $row["question"];
		$post["option1"]    = $row["op1"];
        $post["option2"]    = $row["op2"];
        $post["option3"]    = $row["op3"];
        $post["option4"]    = $row["op4"];
        $post["totalvotes"]    = $row["total_votes"];
		$post["option1votes"]    = $row["op1_votes"];
		$post["option2votes"]    = $row["op2_votes"];
		$post["option3votes"]    = $row["op3_votes"];
		$post["option4votes"]    = $row["op4_votes"];
		$post["otpque"] = $row["otp"];
        
        //update our repsonse JSON data
        array_push($response["posts"], $post);
    }
    
    // echoing JSON response
    echo json_encode($response);
    
    
} else {
    $response["success"] = 0;
    $response["message"] = "No Post Available!";
    die(json_encode($response));
}

} else {
?>
		<h1>Submit</h1> 
		<form action="teacherQuestion.php" method="post"> 
		    Username:<br /> 
		    <input type="text" name="username" placeholder="username" /> 
		   
		    <br /><br /> 
		    <input type="submit" value="Submit" /> 
		</form> 
		
	<?php
}
