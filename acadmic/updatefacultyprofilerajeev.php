<!DOCTYPE html>
<html lang="en">
<head>
 <style>
    #rcorners2 {
    border-radius: 5px;
    padding: 10px;
    width: 100px;
    height: 30px;
    background-color: #FFFFFF;
    }
}
</style>
</head>
<body>
    <div align="right"><a href="./rajeev.php">BACK</a></div>
    <div class="container">
    <h2>Update</h2>
    <form role="form" name="form1" method="post" action="updatefacultyprofile.php">
    <feildset>
   <div class="form-group">
      <label for="id">Id:</label>
      <input type="text" class="form-control" id="rcorners2" placeholder="Please Enter Faculty Id" name="id" style="width:25%; padding: 2px; border: 1px solid black">
    </div>
    <br><br>
    <button type="submit" class="btn btn-default" name="update" id="rcorenrs2">Update</button>
    </feildset>
  </form>
</div>

</body>
</html>