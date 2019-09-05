<?php
$mail = $_REQUEST['mail'];
include "connection.php";
$qry = "SELECT * FROM `student` where `email` = '$mail'";
$result = mysqli_query($con,$qry);
$row = mysqli_fetch_assoc($result);
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
        <h2 class="text-center">Update Student</h2>
        </div>
      <div class="panel-body">
                    <form action="finalupdate.php" method="post">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter the Student Name" value="<?php echo $row['name'];?>">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter the E-mail Address" value="<?php echo $row['email'];?>" readonly>
                </div>
                <div class="form-group">
                    <label for="fname">Father Name:</label>
                    <input type="text" class="form-control" id="fname" name="fname" placeholder="Enter the Father Name" value="<?php echo $row['fname'];?>">
                </div>
                <div class="form-group">
                    <label for="pass">Password:</label>
                    <input type="password" class="form-control" id="pass" name="pass" placeholder="Enter the Password" value="<?php echo $row['pass'];?>">
                </div>
                <div class="form-group">
                    <label for="phone">Phone:</label>
                    <input type="text" class="form-control" id="pno" name="pno" placeholder="Enter the Phone Number" value="<?php echo $row['phone'];?>">
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
    $name = $_POST['name'];
    $email = $_POST['email'];
    $fname = $_POST['fname'];
    $pass = $_POST['pass'];
    $pno = $_POST['pno'];
    $qry = "UPDATE `student` SET `name`='$name',`fname`='$fname',`pass`='$pass',`phone`='$pno' WHERE `email`='$email'";
    $result = mysqli_query($con,$qry);
    if($result == true)
    {
        ?>
        <script>
            window.alert("DATA UPDATED");
            window.location.href="display.php";
            </script>
        
        <?php
    }
}
?>