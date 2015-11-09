<?php
error_reporting(0);

session_start();


if(isset($_SESSION['loggedin']) != 1){
  //Show 403 Forbidden page
  echo "Access Denied";

}else{

  if($_SESSION['admin'] != 0){

    require('../header.php');

    ?>
    
    <div id="contents">

        <div class="page-header">
            <h1 class="body_title">Add a notice</h1>
        </div>

        <!-- Registration form - START -->

        <div class="container">
            <div class="row">
                <form role="form" action="upload.php" enctype="multipart/form-data" method="POST">
                    <div class="col-lg-6" >
                        <div class="form-group">
                            <label for="InputName">Enter Title</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="title" id="title" placeholder="Enter Title" required>
                                <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                            </div>
                        </div>
<br>
                        <div class="form-group">
                            <label for="InputMessage">Enter Notice</label>
                            <div class="input-group">
                                <textarea name="notice" id="notice" class="form-control" rows="5" required></textarea>
                                <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                            </div>
                        </div>
<br>
                        <div class="form-group">
                            <label for="InputName">Target Community</label>
                            <div class="input-group">
                               <select class="select form-control" name="target">
                                    <option value="student">Student</option>
                                    <option value="faculty">Faculty</option>
                                    <option value="everyone">Everyone</option>
                                </select>
                            </div>
                        </div>
<br>
                        <div class="form-group">
                            <label for="InputName">Visible to</label>
                            <div class="input-group">
                                <select class="select form-control" name="visibility">
                                    <option value="1">Student</option>
                                    <option value="2">Faculty</option>
                                    <option value="-1">Everyone</option>
                                </select>
                            </div>
                        </div>
                        <input type="hidden" name="name" id="name" value="<?php echo $_SESSION['name']; ?>">
                        <br>
                        <div class="form-group">
                            <label for="InputMessage">Attachment</label>
                            <div class="input-group">
                                <input type="file" name="fileToUpload" />
                            </div>
                        </div><br>
                        <input type="submit" name="addnotice" id="addnotice" value="Submit" class="btn btnx pull-right">
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
    echo "you have no autherization to add notice<br>";
	echo "<a href='$link'>GO back</a>";
	

	}

    
}
require('../footer.php');
?>