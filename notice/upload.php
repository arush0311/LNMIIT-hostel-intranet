<?php
//	error_reporting(0);
  	@mysql_connect('localhost','intranet','user@123');
  	mysql_select_db('intranet');
  	echo mysql_error();
  	if(isset($_POST['addnotice']))
  	{
	    $topic = $_POST['title'];
	    $notice = nl2br($_POST['notice']);
		$user = $_POST['name'];
		$target = $_POST['target'];
		$visibilty = $_POST['visibility'];

		$query = "INSERT INTO `notice`(`title`, `description`, `user`,`target` ,`visibility`) VALUES ('$topic','$notice','$user','$target',$visibilty)";
	    $query_run=mysql_query($query);
	    echo mysql_error();

	    $query1="SELECT `id` FROM `notice` order by id desc";
        $query_run1=mysql_query($query1);
        mysql_error();

        $row1 = mysql_fetch_assoc($query_run1);

        $name_file = $row1['id'];

		$target_dir = "uploads/";
		$target_file = $target_dir.basename($_FILES["fileToUpload"]["name"]);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

/*		if (file_exists($target_file)) {

			$uploadOk = 1;
		}
*/
		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
		    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
		    if($check !== false) {
		        $uploadOk = 1;
                echo "done";
		    } else {
		        echo "File is not an image.";
		        $uploadOk = 0;
		    }
		}

		$target_file1 = "uploads/".$name_file.'.'.$imageFileType;

		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
		    echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
		    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file1)) {
		    	$attachment = "./uploads/".$name_file.'.'.$imageFileType;
                echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
                
		    } else {
		    	$attachment = NULL;
                echo "Sorry, there was an error uploading your file.";
                echo $_FILES['fileToUpload']['error'];
		    }
		}

		$query = "UPDATE `notice` SET `document_path`='$attachment' WHERE `id`='$name_file'";
		$query_run=mysql_query($query);
        mysql_error();

		header("Location: ./index.php");
	}
?>