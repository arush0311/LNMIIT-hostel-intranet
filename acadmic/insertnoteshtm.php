
<!DOCTYPE html>
<html lang="en">
<head>
  <style>
    #rcorners2 {
    border-radius: 5px;
    padding: 20px;
    width: 250px;
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
   <div align="right"><a href="./faculty.php">BACK</a></div> 
<div class="container">
  <h2 align="center">Insert Notes</h2>
  <form role="form" action="insertnotesph.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
      <h3><label for="text" class="ex"><strong>Year:</strong></label></h3>
      <input type="text" class="ex" id="rcorners2" placeholder="Enter Year(Intended For)" name="year"><br><br>
    </div>
    <div class="form-group">
      <h3><label for="text" class="ex"><strong>Department:</strong></label></h3>
      <input type="text" class="ex" id="rcorners2" placeholder="Enter Department Name(Intended For)" name="department"><br><br>
    </div>    
    <input type="file" name="file" id="rcorners2" class="ex"><br><br>
    <button type="submit" class="ex" id="rcorners3"><strong>SUBMIT</strong></button>
  </form>
</div>

</body>
</html>
