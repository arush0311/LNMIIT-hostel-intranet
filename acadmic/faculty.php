<?php
	require('../header.php');
    require('./sidebar.php');
?>
    <?php
if(!isset($_SESSION['login']) && !isset($_SESSION['username']) && !isset($_SESSION['depart_id']) && !isset($_SESSION['designation'])){
echo 'Please Login TO Continue'."<br>";
}else{
$usrname=($_SESSION['username']);
$mid=($_SESSION['depart_id']);
?>
        <!DOCTYPE html>
        <html>

        <body>
           
           <div id="contents">
            <div class="header">

                <div class="container">
                    <h2></h2>
                    <br>
                    <div align="center"><img src="./images/<?php echo $usrname?><?php echo $mid ?>.jpg"> </div>

                    <div align="center">
                        <button type="button" class="btn btn-info" onclick="window.location.href='./updatefacultyprofile.php'" id="rcorners2">Update Profile Info</button>
                        <br>
                        <br>
                        <button type="button" class="btn btn-info" id="rcorners2" onclick="window.location.href='./insertnoteshtm.php'">Insert Notes</button>
                        <br>
                        <br>
                        <button type="button" class="btn btn-info" onclick="window.location.href='../notice/'" id="rcorners2">Add notice</button>
                    </div>

                </div>

            </div></div>
        </body>
        <?php
}
?>

        </html>
        <?php
	require('../footer.php');
?>