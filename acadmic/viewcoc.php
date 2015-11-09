<?php
require('../header.php');
require('sidebar.php');	
?>

<div class="main-content">
    <div id="contents">
    
        <div align="center">
            <h1 margin="100px">CODE OF CONDUCT</h1></div>
        <br>
        <br>
        <div class="ex">
	<li style="list-style-position:outside;list-style-type:square">
		<a href="./Notice regarding rules for Course Overload.pdf".pdf">Notice regarding rules for Course Overload</a></li>
            <!-- <?php
 $directory='uploadcoc';
 $count=0;
 if($handle = opendir($directory.'/'))
 {
   while($file = readdir($handle))
   {
     $count=$count+1;
     if($file!='.' && $file!='..')
     {
      echo $count-2;
      echo ').';
      echo '<a href="'.$directory.'/'.$file.'">'.$file.'</a><br >';
     }
   }
 }
?> -->
        </div>
    

    </div>
    
    <?php
	
    ?>

</div> 
    
<?php
	require('../footer.php');
	
?>