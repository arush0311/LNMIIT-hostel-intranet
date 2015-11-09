<?php
	require('../header.php');
?>
<?php
  if(isset($_POST['submit']) and @$_POST['username'])
  {
      $token = md5(uniqid(mt_rand(), true));
      $roll_no=test_input($_POST['username']);
      $query="SELECT `Emailid` FROM `login_info` WHERE `username`='$roll_no'";
      $query_run=mysql_query($query);
      if(mysql_num_rows($query_run)==1)
      {
        $row=mysql_fetch_assoc($query_run);
        $email=$row['Emailid'];


        require '../campus/PHPMailer/PHPMailerAutoload.php';
      
        $mail = new PHPMailer;
      
        $mail->isSMTP();                                    
        $mail->Host = 'smtp.gmail.com'; 
        $mail->SMTPAuth = true;                                 
        $mail->Username = 'intranet.lnmiit@gmail.com';                            
        $mail->Password = 'information.lnmiit';                        
        $mail->SMTPSecure = 'tls';                            
      
        $mail->From = 'noreply@gmail.com';  
        $mail->FromName = 'INTRANET LNMIIT';
        $mail->addAddress($email, $roll_no); 
      
        $mail->addReplyTo('intranet.lnmiit@gmail.com', 'intranet lnmiit');
        $mail->WordWrap = 50;                                
        $mail->isHTML(true);                                  
      
        $mail->Subject = 'password reset link for '.$roll_no;
        $mail->Body    = '<b>Hi '.$roll_no.',</b><div><font color="black"><br>Click <a href="http://intranet.lnmiit.ac.in/password_recovery/recover.php?token='.$token.'&username='.$roll_no.'">here</a> reset your password<br> <br/>
          </font>
          </div>';
      
        if(!$mail->send()) {
          echo '<b><center>Your password reset link Couldnot be  sent to your e-mail address.ERROR..</center></b>';
          exit;
        }
        else{
          echo '<b><center>Your password reset link sent to your e-mail address</center></b>';
        }
        $query = "INSERT INTO `forgot_password` (`id`, `username`, `token`) VALUES (NULL, '$roll_no', '$token')";
        $query_run = mysql_query($query);
      }
    else{
      echo "Invalid Username";
    }


    }
?>
<div id="contents"><b>
  <h1 class="body_title">Forgot Password</h1>
	
	<div class="form links">
  		<form method="post" name="forgot_password" action="forgot_password.php">
  		<table>
    		<tr><td>Username:</td><td><input type="text" name="username" /></td></tr>
    		<tr><td></td><td><input type="submit" name="submit" value="submit"></td></tr>
   		</table>
  		</form>
	</div>
</div>
<?php
	require('../footer.php');
?>
