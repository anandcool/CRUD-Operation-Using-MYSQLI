<!DOCTYPE html>
<html lang="en">
<head>
  <title>CRUD Operation</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
        <style>
  a:hover{
	  background-color: black;
  }
  .add{
	  background-color:#d9534f;
	  color:white;
	  font-size:30px;
  }
  .display{
	  background-color:#5cb85c;
	  color:white ;
	  font-size:30px;	  
  }
  .update{
	  background-color:#5bc0de;
	  color:white;
	  font-size:30px;	  
  }
  .delete{
	  	  background-color:#DF691A;
	  color:white ;
	  font-size:30px;
  }
  body{
	  background-color:#2B3E50;
	  color:white;
  }
  
  </style>
      </style>
</head>
<body>
<div class="container">
<h2 class="text-center">Simple CRUD Operation in php</h2>
<hr>
    <br>
    <div class="list-group">
<a href="addstudent.php" class="btn btn-primary btn-block btn-lg add">ADD STUDENT</a><br>
<a href="display.php" class="btn btn-success btn-block btn-lg display">DISPLAY STUDENT</a><br>
<a href="update.php" class="btn btn-warning btn-block btn-lg update">UPDATE STUDENT</a><br>
<a href="delete.php" class="btn btn-danger btn-block btn-lg delete">DELETE STUDENT</a><br>
<a href="login.php" class="btn btn-danger btn-block btn-lg delete">LOGIN</a><br>
</div>
</div>

</body>
</html>
