<?php
  require('../header.php');
  require('sidebar.php');
?>
<div class="main-content">
    <div id="contents">
         <?php
         $directory='onepagecalender';
         $handle=opendir($directory.'/');
         while($file=readdir($handle))
         {
           if($file!='.' && $file!='..')
           {
            echo "<img class=\"calender\"src=\"$directory/$file\">";
           }
         }

         ?>
    </div>
    <?php
	
?>
</div>


<?php
	require('../footer.php');
?>