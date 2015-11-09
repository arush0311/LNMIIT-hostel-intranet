<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
    <strong><h1 align="center" >INSERT FACULTY PAGE</h1></strong>
    <form role="form" name="form1" method="post" action="inserfacultyph.php">
    <feildset>
     <div class="form-group">
      <h3><strong><label for="department">Department:</label></strong></h3>
      <input type="text" class="form-control" id="rcorners2" placeholder="Enter Department" name="department" style="width:25%; padding: 2px; border: 1px solid black" title="cse,ece,physics,mme,hss">
    </div>
    <br>
    <div class="form-group">
      <h3><strong><label for="facultyid">Faculty Id:</label></strong></h3>
      <input type="text" class="form-control" id="rcorners2" placeholder="Enter FacultyId" name="id" style="width:25%; padding: 2px; border: 1px solid black">
    </div>
    <br>
    <div class="form-group">
      <h3><strong><label for="facultyname">First Name:</label></strong></h3>
      <input type="text" class="form-control" id="rcorners2" placeholder="Enter First Name" name="fname" style="width:25%; padding: 2px; border: 1px solid black" title="Enter Name(First letter capital)">
    </div>
    <br>
    <div class="form-group">
      <h3><strong><label for="facultyname">Last Name:</label></h3></strong>
      <input type="text" class="form-control" id="rcorners2" placeholder="Enter Last Name" name="lname" style="width:25%; padding: 2px; border: 1px solid black" title="Enter Last Name">
    </div>
    <br>
    <div class="form-group">
      <h3><strong><label for="email">Email Id:</label></h3></strong>
      <input type="text" class="form-control" id="rcorners2" placeholder="Enter Email Id" name="emailid" style="width:25%; padding: 2px; border: 1px solid black">
    </div>
    <br>
    <div class="form-group">
      <h3><strong><label for="contact">Contact Number:</label></h3></strong>
      <input type="text" class="form-control" id="rcorners2" placeholder="Enter Contact Number" name="contactnumber" style="width:25%; padding: 2px; border: 1px solid black">
    </div>
    <br>
    <div class="form-group">
      <h3><strong><label for="contacthrs">Contact Hrs:</label></h3></strong>
      <input type="text" class="form-control" id="rcorners2" placeholder="Enter Contact Hrs" name="contacthrs" style="width:25%; padding: 2px; border: 1px solid black">
    </div>
    <br>
    <div class="form-group">
      <h3><strong><label for="officenumber">Office Number:</label></h3></strong>
      <input type="text" class="form-control" id="rcorners2" placeholder="Enter Office Number" name="officenumber" style="width:25%; padding: 2px; border: 1px solid black">
    </div>
    <br>
    <div class="form-group">
      <h3><strong><label for="extensionnumber">Extension Number:</label></h3></strong>
      <input type="text" class="form-control" id="rcorners2" placeholder="Enter Extension Number" name="extensionnumber" style="width:25%; padding: 2px; border: 1px solid black">
    </div>
    <br>
    <div class="form-group">
      <h3><strong><label for="researcharea">Research Area:</label></h3></strong>
      <input type="text" class="form-control" id="rcorners2" placeholder="Enter Research Area" name="researcharea" style="width:25%; padding: 2px; border: 1px solid black">
    </div>
    <br>
    <button type="submit" class="btn btn-default" name="insert" id="rcorners2"><b>Insert</b></button>
    <br>
    </feildset>
  </form>
</div>

</body>
</html>