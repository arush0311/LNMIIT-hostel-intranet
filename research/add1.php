

<?php
	require('../header.php');
	require('sidebar.php');
	if(isset($_SESSION['id']))
{
?> <?php
 if(isset($_COOKIE['msg']))echo "<p style='color:red'>* ".$_COOKIE['msg'];
 ?>

<div id="contents">
 	<h1 class="body_title">Add Article</h1>
 	<div class="links">
 		<ul>



 			<li><a href="article.php">Add Publication, Thesis or Book</a></li><br>

			<?php 
if(($_SESSION['admin']!=0))
{?>
			 <li><a href="addseminar.php"> Add Seminar</a></li><br>
<?php } ?>
  		</ul>
 	</div>
</div>

<?php
	require('../footer.php');
?>
<?php
}
else
{header("location:add1.php");}
?>

