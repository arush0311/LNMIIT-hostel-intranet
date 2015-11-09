<?php
error_reporting(0);

session_start();


if(isset($_SESSION['loggedin']) != 1){
  //Show 403 Forbidden page
  echo "Access Denied";

}else{

  if(($_SESSION['admin']==0) || ($_SESSION['admin']==6))
  {

    require('../header.php');
      require('sidebar2.php');

      $roll=$_SESSION['username'];
      //$query="SELECT `id`,`year`,`Degreename`,`studname`,'Emailid','Studentmobile','Fathermobile' FROM `campus_student_info` WHERE `Rollno` = '$roll'";
      $query="SELECT * FROM `campus_student_info` WHERE `Rollno` = '$roll'";
      $query_run=mysql_query($query);
      mysql_error();
      $rows=mysql_num_rows($query_run);
      
      
      $row=mysql_fetch_assoc($query_run);
			  			
      $idd=$_GET["idd"];
      
      $query1="SELECT * FROM `requireta` WHERE `id` = '$idd'";
      $query_run1=mysql_query($query1);
      mysql_error();
      $rows1=mysql_num_rows($query_run1);
      $row1=mysql_fetch_assoc($query_run1);
    ?>

    <div id="contents">

        <div class="page-header">
            <h1 class="body_title">Apply for TASHIP</h1>
        </div>

        <!-- Registration form - START -->
        
    

        <div class="container">
            <div class="row">
                <form role="form" action="apply.php" onsubmit="return confirm('Are you sure?');" enctype="multipart/form-data" method="POST">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="InputName">Name</label>
                            <div class="input-group">
                                <b><?php echo    $row['Studname'];?></b>
                            </div>
                        </div>
                        <br>
                        
                        <input type="hidden" name="name" id="name" value="<?php echo $row['Studname']; ?>">
                         

                        <div class="form-group">
                            <label for="InputRoll">Roll No.</label>
                            <div class="input-group">
                                <b><?php echo    $row['Rollno'];?></b>
                            </div>
                        </div>
                        
                        <br>
                        
                        <input type="hidden" name="rollno" id="rollno" value="<?php echo $row['Rollno']; ?>">
                        
                        
                        
                         <div class="form-group">
                            <label for="Applying for" >Applying for</label>
                            <div class="input-group">
                                <i><b>Course Name : </i></b><b><?php echo    $row1['course'];?></b><br>
                                <i><b>Faculty : </i></b><b><?php echo    $row1['name_faculty'];?></b><br>
                                <i><b>Description : </i></b><b><?php echo    $row1['description'];?></b><br>
                            </div>
                        </div>
                        <br>
                        
                        
                        
                        <input type="hidden" name="course" id="course" value="<?php echo $row1['course']; ?>">
                        
                        <input type="hidden" name="description" id="description" value="<?php echo $row1['description']; ?>">
                        
                        <input type="hidden" name="faculty" id="faculty" value="<?php echo $row1['name_faculty']; ?>">
                        
                        <div class="form-group">
                            <label for="InputEmail">Email Id</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="emailid" id="emailid" value="<?php echo $row['Emailid'];?>" required>
                                <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                            </div>
                        </div>
                        <br>

                        <div class="form-group">
                            <label for="InputNumber">Contact Number</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="contact" value="<?php echo $row['Studentmobile'];?>" id="title" required>
                                <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                            </div>
                        </div>
                        <br>


                        <div class="form-group">
                            <label for="InputSex">Gender</label>
                            <div class="input-group">
                                <select class="select form-control" name="gender">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                        </div>

                       

                        <br>


                        <div class="form-group">
                            <label for="InputYear">Year</label>
                            <div class="input-group">
                                <select class="select form-control" name="year">
                                    <option value="1st Year UG">1st Year UG</option>
                                    <option value="2nd Year UG">2nd Year UG</option>
                                    <option value="3rd Year UG">3rd Year UG</option>
                                    <option value="4th Year UG">4th Year UG</option>
                                    <option value="1st Year PG">1st Year PG</option>
                                    <option value="2nd Year PG">2nd Year PG</option>
                                    <option value=">PhD">PhD</option>
                                </select>
                            </div>
                        </div>

                        <br>


                        <div class="form-group">
                            <label for="Inputbranch">Branch</label>
                            <div class="input-group">
                                <select class="select form-control" name="branch">
                                    <option value="CSE">Computer Science & Engineering</option>
                                    <option value="ECE">Electronics & Communication Engineering</option>
                                    <option value="CCE">Communication & Computer Engineering</option>
                                    <option value="MME">Mechanical-Mechatronics Engineering</option>
                                    <option value="ME">Mechanical Engineering</option>

                                </select>
                            </div>
                        </div>
                        
                        <br>
                        
                        <div class="form-group">
                            <label for="InputSex">Grade</label>
                            <div class="input-group">
                                <select class="select form-control" name="grade">
                                    <option value="A">A</option>
                                    <option value="AB">AB</option>
                                    <option value="B">B</option>
                                </select>
                            </div>
                        </div>
                        
                        <br>
                        <div class="form-group">
                            <label for="InputNumber">CGPA </label>
                            <div class="input-group">
                                <textarea rows="1" cols=""  class="form-control" name="cgpa"  id="experience" required></textarea>
                                <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                            </div>
                        </div>
                        <br>
                        

                        <div class="form-group">
                            <label for="InputNumber">Experience</label>
                            <div class="input-group">
                                <textarea rows="5" cols=""  class="form-control" name="experience"  id="experience"></textarea>
                                <span class="input-group-addon"></span>
                            </div>
                        </div>

                        

                        <input type="hidden" name="name" id="name" value="<?php echo $_SESSION['name']; ?>">
                        <br>

                        <input type="submit" name="apply" id="apply" value="Apply" class="btn btnx pull-right">
                    </div>
                </form>

            </div>
        </div>
        <!-- Registration form - END -->

    </div>

    </body>

    <meta name="viewport" content="width=device-width, initial-scale=1">


    <?php

  }else{
    // Show 403 Forbidden access
	$link = "index.php";
    echo "you have no autherization<br>";
	echo "<a href='$link'>GO back</a>";
	

	}

    
}
require('../footer.php');
?>