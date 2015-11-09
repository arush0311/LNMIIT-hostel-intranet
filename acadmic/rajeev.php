<?php
	require('../header.php');
require('sidebar.php');
?>
    <?php
if(!isset($_SESSION['login']) && !($_SESSION['designation']=='admin')){
  echo '<div id="contents">Please Login To Continue'."<br></div>";
}else{
?>
        <!DOCTYPE html>
        <html>

        <body>
            <div id="contents">
                <div class="container">
                    <h2></h2>
                    <br>
                    <div align="center"><img src=".\images\rajeev.jpg"></div>
                    <div align="center">
                        <button type="button" class="btn btn-info" onclick="window.location.href='./UploadCodeOfConducthtm.php'" id="rcorners2"><strong>Upload Code Of Conduct</strong></button>
                       
                        <br>
                        <br>
                        <button type="button" class="btn btn-info" onclick="window.location.href='./UploadCifhtm.php'" id="rcorners2"><strong>Upload Cif</strong></button>
                        <button type="button" class="btn btn-info" onclick="window.location.href='./UpdateCifhtm.php'" id="rcorners2"><strong>Update Cif</strong></button>
                        <button type="button" class="btn btn-info" onclick="window.location.href='./deletecifhtm.php'" id="rcorners2"><strong>Delete Cif</strong></button>
                        <button type="button" class="btn btn-info" onclick="window.location.href='./viewcif.php'" id="rcorners2"><strong>View Cif</strong></button>
                        <br>
                        <br>
                        <button type="button" class="btn btn-info" onclick="window.location.href='./inserfaculty.php'" id="rcorners2"><strong>Insert Faculty</strong></button>
                        <button type="button" class="btn btn-info" onclick="window.location.href='./updatefacultyprofilerajeev.php'" id="rcorners2"><strong>Update Faculty</strong></button>
                        <button type="button" class="btn btn-info" onclick="window.location.href='./deletefaculty.php'" id="rcorners2"><strong>Delete Faculty</strong></button>
                        <br>
                        <br>
                        <button type="button" class="btn btn-info" onclick="window.location.href='./uploadonepagecalendar.php'" id="rcorners2"><strong>Upload One Page Calendar</strong></button>
                        <br>
                        <br>
                        
                        
                    </div>
                </div>
            </div>
        </body>
        <?php
}
?>

        </html>
        <?php
	require('../footer.php');
?>