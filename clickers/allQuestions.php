<?php


require("config.inc.php");




//initial query
if(!empty($_POST))
{
$user = $_POST['username'];
$otp = $_POST['otp'];
$query = "Select * FROM questions where q_id not in (select q_id from responses where post_user="."'".$user."'".") and otp="."'".$otp."'";
		 
//execute query
try {
    $result   = $db->query($query);
    

}
catch (PDOException $ex) {
   $response["success"] = 0;
   $response["message"] = "Database Error!";
    die(json_encode($response));
}

// Finally, we can retrieve all of the found rows into an array using fetchAll 
$rows = $result->fetchAll();


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
}
else
{ ?>
	<form action="allQuestions.php" method="post">
	username:
	<input type = "text" name="username" />
	<input type = "text" name="otp" />
	<input type="submit" value="Submit"/>
	</form>
	<?php
	
	
	
}

?>
