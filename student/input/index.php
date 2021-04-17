<!DOCTYPE html>
<html lang="en">
<head>
  <title>New Student Data</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Add New Student</h2>
  <div class="text-right">
    <a href="../">Home</a>
</div>
  <form method="POST" action="../../controller/input.php">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" placeholder="Enter Name" name="name">
    </div>
    <div class="form-group">
      <label for="tpnumber">TP Number:</label>
      <input type="number" class="form-control" placeholder="Enter TP Number" name="tpnumber">
    </div>
    <button type="submit" name="newbutton" value="submit" class="btn btn-default">Submit</button>
  </form>
  <?php 
  if(isset($_GET['message'])){
          if($_GET['message'] == "success"){
                echo "<h4>SUKSES BRO HAHAHAHA</h4>";
          }else if ($_GET['message'] == "specifydata") {
                echo "<h4>KOK KOSONG MAS?</h4>";
          } else {
                echo "<h4>FAIL COK CUPUU HAHAHA</h4>";
          }
  }
  ?>
</div>

</body>
</html>
