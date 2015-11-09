<?php
error_reporting(0);
session_start();
$host="localhost";
$username="intranet";
$password="user@123";
$db_name="intranet";
$sem=$_POST['semester'];
$_SESSION['semester']=$sem;
$csf=$_POST['code'];
$selsem=$_POST['semester'];
$tbl_name="cif".$sem."sem";
$conn=mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");
$sql1="SELECT * FROM $tbl_name Where Course_Short_Form='$csf'";
if( !( $selectRes = mysql_query( $sql1 ) ) ){
    echo 'Retrieval of data from Database Failed - #'.mysql_errno().': '.mysql_error();
  }else{
    if( mysql_num_rows( $selectRes )==0 ){
        echo '<tr><td colspan="4">No Rows Returned</td></tr>';
      }else{
        $row = mysql_fetch_assoc( $selectRes );
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
  #scrp1{
    border-radius: 5px;
    solid black;
    padding: 20px;
    width: 200px;
    height: 10px;
    background-color: #FFFFFF;
    }
    #scrp2{
    border-radius: 5px;
    width: 100px;
    height: 40px;
    }
    .ex{
    margin-left: 60px;
   }
   #rcorners2 {
    border-radius: 5px;
    padding: 10px;
    width: 100px;
    height: 30px;
    background-color: #FFFFFF;
    }
    #dropdown {
    border-radius: 5px;
    padding: 10px;
    width: 100px;
    height: 40px;
    background-color: #FFFFFF;
    }
   </style>
</head>
<body>

<div class="container">
  <h2 align="center">CIF UPLOAD</h2>
  <form role="form" action="UpdateCifph1.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
      <h3><strong><label for="Code" class="ex">Course Code/Short Name:</label></strong></h3>
      <input type="text" class="ex" id="rcorners2" placeholder="Please Enter Short Form" name="code" style="width:25%; padding: 2px; border: 1px solid black" value="<?php echo $row['Course_Short_Form']?>">
    </div>
    <div class="form-group">
      <h3><strong><label for="Name" class="ex">Course Name:</label></strong></h3>
      <input type="text" class="ex" id="rcorners2" placeholder="Please Enter Course Name" name="cname" style="width:25%; padding: 2px; border: 1px solid black"  value="<?php echo $row['Course_Name']?>">
    </div>
    <div class="form-group">
      <h3><strong><label for="whom" class="ex">For Whom:</label></strong></h3>
      <input type="text" class="ex" id="rcorners2" placeholder="Please Enter Branch" name="whom" style="width:25%; padding: 2px; border: 1px solid black" title="eg.CSE,CCE Student" value="<?php echo $row['For_Whom']?>">
    </div>
    <div class="form-group">
      <h3><strong><label for="type" class="ex">Type Of Course:</label></strong></h3>
      <input type="text" class="ex" id="rcorners2" placeholder="Please Enter Type Of Course" name="type" style="width:25%; padding: 2px; border: 1px solid black" title="Elective or Core Course" value="<?php echo $row['Type_Of_Course']?>">
    </div>
    <div class="form-group">
      <h3><strong><label for="credits" class="ex">Credits:</label></strong></h3>
      <input type="text" class="ex" id="rcorners2" placeholder="Please Enter Course Credits" name="credits" style="width:25%; padding: 2px; border: 1px solid black" title="eg 2,3,4" value="<?php echo $row['Credits']?>">
    </div>
     <div>
     <h3><label class="ex"><strong>Previously Stored File Link:</strong></label></h3>
     <?php
     $directory='uploadcif';
          if($handle = opendir($directory.'/'))
          {
            $file="";
            while($file = readdir($handle))
            {
              if($file!='.' && $file!='..')
              {
                       //echo 'heloo'."<br>";
                       $length=strlen($file);
                        $offset=0;
                        $find='.';
                        $find_length=strlen($find);
                        while($string_position=strpos($file,$find,$offset))
                        {
                          $pos=$string_position;
                          $offset=$string_position+$find_length;
                         // echo $find.'found at'.$pos.'<br>';
                        }
                        //echo $file."<br>";
                        //echo $pos."<br>";
                        $file1=strtoupper(substr($file,0,$pos));
                        //echo $file."<br>";
                        if($file1 == strtoupper($csf))
                          {
                           $ciflink= $file;
                           //echo $ciflink."<br>";
                           break;
                          }
                          $ciflink="";
                          $file="";
              }
            }
          }
       echo "<a href=\"$directory\\$ciflink\" target=\"_blank\" class=\"ex\"><div>Download To View</div></a>";
     ?>
     </div>
    <h3><label class="ex"><strong>Choose A File To Change</strong></label></h3>
    <input type="file" name="file" class="ex"><br><br>
    <input type="submit" class="ex" id="scrp2" Value="Update">
  </form>
</div>

</body>

<?php
      }
}
?>
</html>