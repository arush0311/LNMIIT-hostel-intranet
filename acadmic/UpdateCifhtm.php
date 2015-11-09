

<!DOCTYPE html>
<html lang="en">
<head>
  <style>
  #scrp1{
    border-radius: 5px;
    solid black;
    padding: 20px;
    width: 200px;
    height: 10px;
    background-color: #FFFFFF;
    }
    #scrp2{
    border-radius: 5px;
    width: 100px;
    height: 40px;
    }
    .ex{
    margin-left: 60px;
   }
   #rcorners2 {
    border-radius: 5px;
    padding: 10px;
    width: 100px;
    height: 30px;
    background-color: #FFFFFF;
    }
    #dropdown {
    border-radius: 5px;
    padding: 10px;
    width: 100px;
    height: 40px;
    background-color: #FFFFFF;
    }
   </style>
</head>
<body>
<div align="right"><a href="./rajeev.php">BACK</a></div>
<div class="container">
  <h2 align="center">CIF UPDATE</h2>
  <form role="form" action="UpdateCifph.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
      <h3><strong><label for="semester" class="ex">Semester:</label></strong></h3>
      <select autofocus class="ex" id="dropdown" name="semester">
      <option value="1st" id="rcorners" class="ex">1st sem</option>
      <option value="3rd">3rd sem</option>
      <option value="5th">5th sem</option>
      <option value="7th">7th sem</option>
      <option value="pg1st">Pg 1st sem</option>
      </select>
    </div>
    <div class="form-group">
      <h3><strong><label for="Code" class="ex">Course Code/Short Name:</label></strong></h3>
      <input type="text" class="ex" id="rcorners2" placeholder="Please Enter Short Form" name="code" style="width:25%; padding: 2px; border: 1px solid black">
    </div>
    <br>
    <input type="submit" class="ex" id="scrp2">
  </form>
</div>

</body>
</html>
