<html>
<body>
<h2>Notices</h2>
</body>
</html>

<?php
 $directory='uploads';
 if($handle = opendir($directory.'/'))
 {
   while($file = readdir($handle))
   {
     if($file!='.' && $file!='..')
     {
      echo '<a href="'.$directory.'/'.$file.'">'.$file.'</a><br >';
     }
   }
 }
?>
