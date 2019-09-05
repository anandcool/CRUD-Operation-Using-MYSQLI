<?php session_start(); 
if(@$_SESSION['uid']){
    header('location:dashboard.php');
}
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
	background-image:url('school.png');
}
</style>
</head>
<body>
 
<div class="container">
    <br>
    <div class="panel panel-primary">
        <div class="panel-heading">
        <h2 class="text-center">Login</h2>
        </div>
      <div class="panel-body">
                    <form action="login.php" method="post">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter the E-mail Address">
                </div>
                <div class="form-group">
                    <label for="pass">Password:</label>
                    <input type="password" class="form-control" id="pass" name="pass" placeholder="Enter the Password">
                </div>

                
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </form>
      </div>
    </div>
</div>

</body>
</html>
<?php
if(isset($_POST['submit'])){
    include "connection.php";
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $qry = "SELECT * FROM `student` WHERE `email`= '$email' AND `pass` = '$pass'";
    $result = mysqli_query($con,$qry);
    $row =mysqli_num_rows($result);
    if(!$row){?>
        <script>
        window.alert("Username and password is not match");
        window.location.href="login.php";
        </script>
        <?php   
    }
    else{
        $data = mysqli_fetch_assoc($result);
        $id = $data['name'];
        $_SESSION['uid'] = $id;
        header('location:dashboard.php');
    }
}
?>