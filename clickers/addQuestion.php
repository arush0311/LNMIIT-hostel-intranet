<?php

//load and connect to MySQL database stuff
require("config.inc.php");

if (!empty($_POST)) {
	//initial query
	$query = "INSERT INTO questions ( t_username,question,op1,op2,op3,op4 ,otp) VALUES ( :user, :que, :o1,:o2,:o3,:o4,:otp ) ";

    //Update query
    $query_params = array(
        ':user' => $_POST['username'],
        ':que' => $_POST['question'],
       ':o1' => $_POST['op1'],
       ':o2' => $_POST['op2'],
       ':o3' => $_POST['op3'],
       ':o4' => $_POST['op4'],
       ':otp' => $_POST['otp']);
       
  
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
        $response["message"] = "Database Error. Couldn't add post!";
        die(json_encode($response));
    }

    $response["success"] = 1;
    $response["message"] = "Question Successfully Added!";
    echo json_encode($response);
   
} else {
?>
		<h1>Add Question</h1> 
		<form action="addQuestion.php" method="post"> 
		    Username:<br /> 
		    <input type="text" name="username" placeholder="username" /> 
		    <br /><br /> 
		    Question:<br /> 
		    <input type="text" name="question" placeholder="question" /> 
		    <br /><br />
			 <br /><br /> 
		    option 1:<br /> 
		    <input type="text" name="op1" placeholder="op1" /> 
		    <br /><br />
			 <br /><br /> 
		    option 2:<br /> 
		    <input type="text" name="op2" placeholder="op2" /> 
		    <br /><br />
			<br /><br /> 
		    option 3:<br /> 
		    <input type="text" name="op3" placeholder="op3" /> 
		    <br /><br />
			<br /><br /> 
		    option 4:<br /> 
		    <input type="text" name="op4" placeholder="op4" /> 
		    <br /><br />
			otp:<br /> 
		    <input type="text" name="otp"  /> 
		    <br /><br />
		    <input type="submit" value="Add Question" /> 
		</form> 
	<?php
}

?> 
