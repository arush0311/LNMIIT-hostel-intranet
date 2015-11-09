<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <style>
    #rcorners2 {
    border-radius: 5px;
    padding: 20px;
    width: 200px;
    height: 5px;
    background-color: #FFFFFF;
    }
    #rcorners3 {
    border-radius: 5px;
    width: 200px;
    height: 40px;
    }
    .ex {
    margin-left: 60px;
   }
}
</style>
</head>
<body>

<div class="container">
  <h2 align="center">Upload one page calender</h2>
  <form role="form" action="uploadonepagecalendarph.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="fileToUpload" class="ex" id="rcorners3"><br><br>
    <input type="submit" class="ex" id="rcorners3" value="Upload" name="submit">
  </form>
</div>

</body>
</html>
