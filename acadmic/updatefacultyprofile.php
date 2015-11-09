<?php
session_start();
$host="localhost";
$username="intranet";
$password="user@123";
$db_name="intranet";
//$tbl_name="ece_faculty";
if(isset($_POST['id']) && !empty($_POST['id'])){
   $myid=$_POST['id'];
}
else{
  $myid=$_SESSION['depart_id'];
}
//echo $myid;
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

//$sql="SELECT * FROM $tbl_name WHERE Faculty_ID='$myid'";
$sql="SELECT * FROM(SELECT * FROM cse_faculty UNION SELECT * FROM ece_faculty UNION SELECT * FROM hss_faculty UNION SELECT * FROM maths_faculty UNION SELECT * FROM mme_faculty UNION SELECT * FROM physics_faculty) AS X WHERE Faculty_ID='$myid'";
if( !( $selectRes = mysql_query( $sql ) ) ){
    echo 'Retrieval of data from Database Failed - #'.mysql_errno().': '.mysql_error();
  }else{
    if( mysql_num_rows( $selectRes )==0 ){
        echo '<tr><td colspan="4">No Rows Returned</td></tr>';
      }else{
        $row = mysql_fetch_assoc( $selectRes );
       // echo $row['Faculty_ID'];
        //print_r($row);
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
   <style>
    #rcorners2 {
    border-radius: 5px;
    padding: 20px;
    width: 250px;
    height:35px;
    background-color: #FFFFFF;
    }
    #rcorners3 {
    border-radius: 5px;
    width: 100px;
    height: 40px;
    }
    .ex {
    margin-left: 60px;
   }
</style>
</head>
<body>
 <div align="right"><a href="./faculty.php">BACK</a></div>
    <div class="container">
    <h2 align="center">UPDATE</h2>
    <form role="form" name="form1" method="post" action="updatprofile.php">
    <feildset>
     <div class="form-group">
      <label for="department" class="ex"><strong>Department:</strong></label><br>
      <input type="text" class="ex" id="rcorners2" placeholder="Enter Department" name="department" style="width:25%; padding: 2px; border: 1px solid black" value="<?php echo $row['Department']?>" title="cse,ece,physics,mme,hss">
    </div>
     <br>
    <div class="form-group">
      <label for="facultyname" class="ex"><strong>First Name:</strong></label><br>
      <input type="text" class="ex" id="rcorners2" placeholder="Enter First Name" name="fname" style="width:25%; padding: 2px; border: 1px solid black" title="Enter Name(First letter capital)" value="<?php echo $row['First_Name']?>">
    </div>
    <br>
    <div class="form-group">
      <label for="facultyname" class="ex"><strong>Last Name:</strong></label><br>
      <input type="text" class="ex" id="rcorners2" placeholder="Enter Last Name" name="lname" style="width:25%; padding: 2px; border: 1px solid black" title="Enter Last Name" value="<?php echo $row['Last_Name']?>">
    </div>
    <br>
    <div class="form-group">
      <label for="email" class="ex"><strong>Email Id:</strong></label><br>
      <input type="text" class="ex" id="rcorners2" placeholder="Enter Email Id" name="emailid" style="width:25%; padding: 2px; border: 1px solid black" value="<?php echo $row['Email_Address']?>">
    </div>
    <br>
    <div class="form-group">
      <label for="contact" class="ex"><strong>Contact Number:</strong></label><br>
      <input type="text" class="ex" id="rcorners2" placeholder="Enter Contact Number" name="contactnumber" style="width:25%; padding: 2px; border: 1px solid black" value="<?php echo $row['Contact_No']?>">
    </div>
    <br>
    <div class="form-group">
      <label for="contacthrs" class="ex"><strong>Contact Hrs:</strong></label><br>
      <input type="text" class="ex" id="rcorners2" placeholder="Enter Contact Hrs" name="contacthrs" style="width:25%; padding: 2px; border: 1px solid black" value="<?php echo $row['Contact_Hrs']?>">
    </div>
    <br>
    <div class="form-group">
      <label for="officenumber" class="ex"><strong>Office Number:</strong></label><br>
      <input type="text" class="ex" id="rcorners2" placeholder="Enter Office Number" name="officenumber" style="width:25%; padding: 2px; border: 1px solid black" value="<?php echo $row['Office_No']?>">
    </div>
    <br>
    <div class="form-group">
      <label for="extensionnumber" class="ex"><strong>Extension Number:</strong></label><br>
      <input type="text" class="ex" id="rcorners2" placeholder="Enter Extension Number" name="extensionnumber" style="width:25%; padding: 2px; border: 1px solid black" value="<?php echo $row['Extension_No']?>">
    </div>
    <br>
    <div class="form-group">
      <label for="researcharea" class="ex"><strong>Research Area:</strong></label><br>
      <input type="text" class="ex" id="rcorners2" placeholder="Enter Research Area" name="researcharea" style="width:25%; padding: 2px; border: 1px solid black" value="<?php echo $row['Research_Area']?>">
    </div>
    <br>
    <button type="submit" class="ex" name="update">Update</button>
    </feildset>
  </form>
</div>

</body>
<?php
  }
}

?>
</html>
                                      