	
	<div id="container">
		<div id="sidebar">
			<div id="sidebar_header">
				<h3>REPOSITORY</h3>
			</div>
			
			<ul>
                <li><a href="seminar.php"><div class="options">Seminar</div></a></li>
                <li><a href="onprojects.php"><div class="options">Ongoing Project</div></a></li>
                <li><a href="all.php"><div class="options">Repository</div></a></li>
                                
                <?php if(isset($_SESSION['id'])&& ($_SESSION['admin']==1 || $_SESSION['admin']==5))
{?>
			        <li><a href="article.php"><div class="options">Add Article</div></a></li>
                <?php }
                
                if(isset($_SESSION['id'])&& ($_SESSION['admin']!=0))
{?>
			        <li><a href="addseminar.php"><div class="options">Add Seminar</div></a></li>
                <?php }

if(isset($_SESSION['id'])&& ($_SESSION['admin']==5))
{?>
			        <li><a href="delete.php"><div class="options">Delete Article</div></a></li>
<?php } ?>
            </ul>
		</div>
</div>