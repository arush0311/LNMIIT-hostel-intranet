<?php
require('../header.php');
require('sidebar.php');
?>

<div class="main-content">
    <div id="contents">

    
        <h1 align="center">NOTES</h1>

        <div class="ex">
            <?php
 $directory='Notes';
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
?>
        </div>
    
    </div>
    <?php
	
	
?>
</div>
   
<?php
	require('../footer.php');
	
?>