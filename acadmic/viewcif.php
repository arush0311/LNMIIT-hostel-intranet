<html>
<body>
<div align="right"><a href="./rajeev.php">BACK</a></div>
<h2>CIF</h2>
</body>
</html>

<?php
 $directory='uploadcif';
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
