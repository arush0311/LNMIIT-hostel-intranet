<?php
	require('../header.php');
?>
<div id="contents">
	<h1 class="body_title">Forgot Password</h1>
	<?php
		if(isset($_GET['token']) and isset($_GET['username']))
		{
			$changed = 0;
			$token=test_input($_GET['token']);
			$username=test_input($_GET['username']);
			$query = "SELECT `username` FROM `forgot_password` WHERE `username` = '$username' AND `token` = '$token'";
			$query_run = mysql_query($query);
			if(mysql_num_rows($query_run)==1)
			{	
				if(isset($_POST['submit']))
				{	
					
					$newpassword = test_input($_POST['newpassword']);
					$repeatnewpassword = test_input($_POST['repeatnewpassword']);
					if($newpassword==$repeatnewpassword)
					{
						$query = "UPDATE `login_info` SET `password` = '$newpassword' WHERE `username` = '$username'";
						$query_run = mysql_query($query);
						$changed = 1;
					}
					else{
						echo "The Two Password Dont Match.Please try Again";

					}
				}
				if($changed==1)
				{
					$query = "DELETE FROM `forgot_password` WHERE `username` = '$username' AND `token` = '$token'";
					$query_run = mysql_query($query);
					echo "PASSWORD CHANGED SUCCESSFULLY";
				}


				if($changed==0)
				{
					echo '
					<form method="post">
					<table>
						<tr><td>NEW PASSWORD :</td><td><input type="text" name="newpassword"></td></tr>
						<tr><td>REPEAT NEW PASSWORD :</td><td><input type="text" name="repeatnewpassword"></td></tr>
						<tr><td></td><td><input type="submit" name="submit" value="submit"></td></tr>
					</table>
					</form>';
				}
			}
			else{
				echo "THE LINK IS EXPIRED";
			}
		}
		else{


			echo "THE LINK IS EXPIRED";

		}
	?>
</div>
<?php
	require('../footer.php');
?>