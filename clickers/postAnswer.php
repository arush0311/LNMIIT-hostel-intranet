<?php

require("config.inc.php");

if (!empty($_POST)) {
	//initial query
	$query = "INSERT INTO responses ( post_user,q_id,ans) VALUES ( :user, :que_id, :ans ) ";
	

    //Update query
    $query_params = array(
        ':user' => $_POST['username'],
        ':que_id' => $_POST['question_id'],
       ':ans' => $_POST['answer']);
		echo $_POST['answer'];
	//execute query
    try {
        $stmt   = $db->prepare($query);
        $result = $stmt->execute($query_params);
    }
    catch (PDOException $ex) {
        // For testing, you could use a die and message. 
        //die("Failed to run query: " . $ex->getMessage());
        
        //or just use this use this one:
        $response["success"] = 0;
        $response["message"] = "Database Error. Couldn't post answer!";
        die(json_encode($response));
    }

    $response["success"] = 1;
    $response["message"] = "Response recorded Successfully!";
    echo json_encode($response);
   
} else {
?>
				<h1>Answer of a Question</h1> 
		<form action="postAnswer.php" method="post"> 
		Username:<br>
		<input type="text" name="username" /> 
		    <br /><br /> 
		    Q_ID:<br /> 
		    <input type="text" name="question_id" /> 
		    <br /><br /> 
			<input type="text" name="answer" /> 
		    <br /><br /> 
		    <input type="submit" value="Submit" /> 
		</form> 
	<?php
}

?> 
