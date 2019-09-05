<?php
include "connection.php";
$qry = "SELECT * FROM `student`";
$result = mysqli_query($con,$qry);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
  body{
	background-color:#2B3E50;
	color :white;
}
</style>
</head>
<body>
<div class="container">
<h1 class="text-center" style="color:white">Update Students</h1>
<table class="table table-condensed">
<tr>
<th>Name</th>
<th>E-mail</th>
<th>Father Name</th>
<th>Password</th>
<th>Phone Number</th>
<th>Update</th>
</tr>
<?php
while($row = mysqli_fetch_assoc($result)){
?>
<tr>
<td><?php echo $row['name'];?></td>
<td><?php echo $row['email'];?></td>
<td><?php echo $row['fname'];?></td>
<td><?php echo $row['pass'];?></td>
<td><?php echo $row['phone'];?></td>
<td><a href="finalupdate.php?mail=<?php echo $row['email'];?>" class="btn btn-primary">Update</a></td>
</tr>
<?php 
}
?>
</table>
</div>
</body>
</html>
