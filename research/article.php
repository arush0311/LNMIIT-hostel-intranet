<?php

require('../header.php');
require('sidebar.php');
if(isset($_SESSION['id']))
{
?>

    <div id="contents">

        <?php
 if(isset($_COOKIE['msg']))echo "<p style='color:red'>* ".$_COOKIE['msg'];
 ?>
            <div class="dropmenu">
               
                <form role="form" action="article.php" method="POST" enctype="multipart/form-data">
                   <div class="form-group">
                    Authors' name (separated by comma):                    
                    <input type="text" class="form-control" name="name">
                    <br> 
                    
                    Title:                    
                    <input type="text" class="form-control" name="title">
                    <br> 
                    
                    Publication(CONFERENCE):
                    <input type="text" class="form-control" name="publication">
                    <br> 
                    
                    Branch:
                    <select name="branch" class="form-control">
                        <option>---SELECT---</option>

                        <option value="cse">CSE</option>
                        <option value="ece">ECE</option>
                        <option value="cce">CCE</option>
                        <option value="mme">MME</option>
                        <option value="maths">MATHS</option>
                        <option value="phy">PHYSICS</option>
                    </select>
                    <br> Type of Article:
                    <br>
                    <select name="type" class="form-control">
                        <option>---SELECT---</option>
                        <option value="book">BOOK</option>
                        <option value="thesis">PG THESIS</option>
			<option value="btp">BTP REPORT</option>
                        <option value="publication">CONFERENCE PAPER</option>
			<option value="publication">JOURNAL PAPER</option>
                    </select>
                    <br> Keywords:
                    <br>
                    <input type="text" class="form-control" name="keywords">
                    <br> Publication year:
                    <br>
                    <input type="text" class="form-control" name="year">
                    <br> Abstract:
                    <br>
                    <textarea name="abstract" class="form-control" rows="5" cols="80"> </textarea>
                    <br>
                    <input type="hidden" class="form-control" name='MAX_FILE_SIZE' value="10000000"> Select a file to upload:
                    <input type="file" class="form-control" name="userfile" id="userfile" />
                    <br>

                    <input type="submit" class="form-control btnx"  value="Submit Form" name="submit">
                    </div>
                </form>
            
            </div>


	<?php
 

 
// include db connect class
require_once __DIR__ . '/db_connect.php';
 
// connecting to db
$db = new DB_CONNECT();

	$auth=$_POST['name'];
	$authors=explode(",",$auth);
	$i = count($authors);
	$typ=$_POST['type'];
	$dept=$_POST['branch'];
	$date=$_POST['year'];
	$file=$_POST['userfile'];
	$title=$_POST['title'];
	$abstract=nl2br($_POST['abstract']);
	$publication=$_POST['publication'];
	$keywords=$_POST['keywords'];

//if( (isset($_POST['name']) and isset($_POST['title'])) and (isset( $_POST['branch']) and isset($_POST['type'])) and (isset($_POST['year'])))
//if( empty($auth) || empty($title) || empty($dept) || empty($typ) || empty($date) || empty($file) )

if(!empty($auth))
//and isset($_POST['title'])) and (isset( $_POST['branch']) and isset($_POST['type'])) and (isset($_POST['year']) and isset($_POST['file'])))
{
	//
	
	$select="insert into r_data (author, branch, type, title, issuedate, abstract, pdf, publication, keywords) VALUES('$auth','$dept', '$typ', '$title', '$date', '$abstract', '$file', '$publication', '$keywords')";
	$result=mysql_query($select) or die(mysql_error());
	//$result=mysql_query("INSERT INTO 'r_data'('author', 'branch', 'type', 'title', 'issuedate', 'abstract', 'pdf', 'publication', 'keywords') VALUES('$auth','$dept', '$typ', '$title', '$date', '$abstract', '$file', '$publication', '$keywords')") or die(mysql_error());
	
	//$result1=mysql_query("INSERT INTO Author (name) VALUES('$authors[0]')") or die(mysql_error());
	//$j=1;
	while($i>1)
	{
		$results=mysql_query("INSERT INTO Author (name) VALUES('$authors[i]')") or die(mysql_error());
		$i=$i-1;
		//$j=$j+1;
	}
	
	if(!$result )
            {
               die('Could not enter data: ' . mysql_error());
            }
	else{
            
            echo "Entered data successfully\n";}

}
else
{
	echo "Please fill required fields!";
}


?>


    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <?php
require('footer.php');
?>
        <?php
}
?>





