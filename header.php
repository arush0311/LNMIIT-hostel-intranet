<!DOCTYPE html>


<?php
	session_start();
	mysql_connect('','','');
	mysql_select_db('');
	error_reporting(E_ALL);
	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  $data = mysql_real_escape_string($data);
	  return $data;
	}
?>



<html>
	<head>
		<title>LNMIIT INTRANET</title>
		<link rel="stylesheet" href="../style.css" type="text/css">
		<link rel="stylesheet" type="text/css" href="../modal.css">
		<link rel="stylesheet" type="text/css" href="style_local.css">
		<link rel="shortcut icon" href="http://www.lusip.lnmiit.ac.in/images/favicon.ico" type="image/icon">
		<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
		<script type="text/javascript" src="../jquery.js"></script>
		<script type="text/javascript">
			$(function pop(){

			var appendthis =  ("<div class='modal-overlay js-modal-close'></div>");

			  $('a[data-modal-id]').click(function(e) {
			    e.preventDefault();
			    $("body").append(appendthis);
			    $(".modal-overlay").fadeTo(500, 0.7);
			    //$(".js-modalbox").fadeIn(500);
			    var modalBox = $(this).attr('data-modal-id');
			    $('#'+modalBox).fadeIn($(this).data());
			  });  
			  
			  
			$(".js-modal-close, .modal-overlay").click(function() {
			  $(".modal-box, .modal-overlay").fadeOut(500, function() {
			    $(".modal-overlay").remove();
			  });
			});
			 
			$(window).resize(function() {
			  $(".modal-box").css({
			    top: ($(window).height() - $(".modal-box").outerHeight()) / 2,
			    left: ($(window).width() - $(".modal-box").outerWidth()) / 2
			  });
			});
			 
			$(window).resize();
			 
			});
		</script>
	</head>
<body>
	



	<div id="header">
			<ul id="navigation">
				<li class="logodiv">
					<a href="../home.php">
					<img src="../temp_logo.png" class="logo"></a>
				</li>
				<li>
					<center>
					<a href="../home.php">Home</a>
					</center>
				</li>

				<li>
					<center>
					<a href="../acadmic/index.php">Academics</a>
					</center>
				</li>
				<li><center>
					<a href="../research/Research.php">Research</a></center>
				</li>

				<li>
					<center>
					<a href="../notice/index.php">Notice Board</a>
					</center>
				</li>
				<li>
					<center>
						<a href="../campus/campus.php">Campus</a>
					</center>
				</li>
				
				<li style="">
					<center>
			<?php
				if(isset($_POST['logout']))
				{
					unset($_SESSION['id']);
					unset($_SESSION['username']);
					unset($_SESSION['depart_id']);
					unset($_SESSION['admin']);
					unset($_SESSION['name']);
                    unset($_SESSION['loggedin']);
					session_destroy();
					header('Location: /index.php');
				}
			  	if(isset($_POST['login']))
			  	{
					$_SESSION['login']=$_POST['login'];
			  		$username=test_input($_POST['username']);
			  		$password=test_input($_POST['password']);
					$query="SELECT `id`,`depart_id`,`name`,`admin`,`designation` FROM `login_info` WHERE `username`= '$username' AND `password` = '$password'";
			  		$query_run=mysql_query($query);
			  		mysql_error();
			  		$rows=mysql_num_rows($query_run);
					if($rows==1)
			  		{
			  			$row=mysql_fetch_assoc($query_run);
			  			$_SESSION['username']=$username;
			  			$_SESSION['id']=$row['id'];
			  			$_SESSION['depart_id']=$row['depart_id'];
			  			$_SESSION['admin']=$row['admin'];
			  			$_SESSION['name']=$row['name'];
						$_SESSION['designation']=$row['designation'];
                        $_SESSION['loggedin'] = 1;
                                                if(isset($_SESSION['id']) && isset($_SESSION['designation']) && ($_SESSION['designation']=='admin'||$_SESSION['designation']=='faculty')){
                                                      if($_SESSION['designation']=='admin'){
                                                                        header('Location: ../home.php');
                                                                        exit();
                                                                        }else if($_SESSION['designation']=='faculty'){
                                                                          header('Location: ../home.php');
                                                                          exit();
                                                                          }
                                                }
			  		}
			  		else
			  		{
			  			$wrong_message = "<center><font color='#2c4066'>Wrong username or password.<br>Please Try Again.</font></center>";
			  		}
			  	}
			  	
			?>
			<?php
				if(isset($_SESSION['id']))
				{
					echo "<div style='margin-top:35px;padding-right:22px;font-size:15px;'><font color='#ffffff' >".ucwords($_SESSION['name'])."</font><form method='post'><input type=submit name='logout' value=Logout /></form></div>";
				}
				else
				{
			?>
				<a class="js-open-modal" href="#" data-modal-id="popup" id="pop"><img src="../lock.png" id="login"></a>
			<?php
				}
			?>
				</center>
			</li>
			</ul>	
	</div>

	<?php
		if(isset($wrong_message))
		{
			echo $wrong_message;
		}
	?>

	<div id="popup" class="modal-box">  
	  <header>
	    <a href="#" class="js-modal-close close">X</a>
	    <h3 style="color:#365c5a">Login</h3>
	  </header>
	  <div class="modal-body" style="color:#365c5a">
	  	<form name="login" method="post" action=>



	  		Username<br>
	    	<input name="username" placeholder="Username" type="text" class="tb8"><br><br>
	    	Password<br>
	    	<input name="password" placeholder="Password" type="password" class="tb8"><br><br>
	    	<input type="submit" name="login" class="btn" value="Login">
			<table>
			<tr>
				<td><a href="../password_recovery/forgot_password.php"><br>Forgot Password?</a></td>
			</tr></table>
		</form>
	  </div>

	  <footer>
	    <a href="#" class="js-modal-close"><input type="submit" class="btn" value="Close"></a>
	  </footer>
	</div>
	<div >
		<?php
			if(isset($_SESSION['id']))
			{
				echo '<a href="../password_recovery/change_password.php"><button class="btn change_password" >Change Password</button></a>';
			}
		?>
	</div>




	
