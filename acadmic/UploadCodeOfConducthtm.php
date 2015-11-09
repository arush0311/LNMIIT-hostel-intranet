
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
    width: 100px;
    height: 40px;
    }
    .ex {
    margin-left: 60px;
   }
}
</style>
</head>
<body>
 <div align="right"><a href="./rajeev.php">BACK</a></div>
<div class="container">
  <h2 align="center">Upload Code Of Conduct</h2>
  <form role="form" action="UploadCodeOfConductph.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
      <h3><label for="text" class="ex"><strong>Title:</strong></label></h3>
      <input type="text" class="ex" id="rcorners2" placeholder="Enter Title" name="title"><br><br>
    </div>
    <input type="file" name="fileToUpload" id="rcorners2" class="ex"><br><br>
    <input type="submit" class="ex" id="rcorners3" name="submit" value="Upload">
  </form>
</div>

</body>
</html>
