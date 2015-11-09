
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
  #scrp1{
    border-radius: 5px;
    solid black;
    padding: 20px;
    height: 30px;
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
   </style>
</head>
<body>
 <div align="right"><a href="./faculty.php">BACK</a></div>
<div class="container">
  <h2 align="center">ADD NOTICE</h2>
  <form role="form" name="form1" method="post" action="addnoticeph.php">
    <div class="form-group">
      <h3><label for="username" class="ex" ><strong>Title:</strong></label></h3>
      <input type="text" class="ex" id="scrp1" placeholder="Enter title" name="title" style="width:25%; padding: 2px; border: 1px solid black">
    </div><br>
    <div class="form-group">
      <h3><label for="content" class="ex"><strong>Content:</strong></label><h3>
      <textarea cols="50" rows="4" class="ex" id="scrp1" placeholder="Enter content" name="description" style="width:35%; padding: 2px; border: 1px solid black"></textarea>
    </div>
    <button type="submit" class="ex" id="scrp2">Submit</button>
  </form>
</div>

</body>
</html>
