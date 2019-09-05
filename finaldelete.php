<?php
$mail = $_REQUEST['mail'];
include "connection.php";
$qry = "DELETE FROM `student` where `email` = '$mail'";
$result = mysqli_query($con,$qry);
if($result == true){
?>
<script>
window.alert("Data Deleted");
window.location.href="delete.php";
</script>
<?php
}
?>