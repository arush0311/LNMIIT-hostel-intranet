<html>
<body>
<h1>CODE OF A CONDUCT</h1>
</body>
</html>
<?php
 $directory='uploadcoc';
 if($handle = opendir($directory.'/'))
 {
   while($file = readdir($handle))
   {
     if($file!='.' && $file!='..')
     {
      echo '<a href="./Notice regarding rules for Course Overload.pdf">'.$file.'</a><br >';
     }
   }
 }
?>

