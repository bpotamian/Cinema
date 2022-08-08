<?php
include 'dbconnect.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-7" />
</head><body></body></html>
<?php 

$fname=$_POST['fname'];
$pwd = $_POST['pwd' ];
$name=$_POST['name'];
$lname = $_POST['lname' ];
$email=$_POST['email'];
$job=$_POST['job'];
$age=$_POST['age'];
$sql="select * from tbluser where username='".$name."'";
  $result = $conn->query($sql);
  if (!$result) die($conn->error);
  //if user already exists prompt for other username
if (!($result->num_rows==0))
    {
  $conn->close();   /* Close connection */
	?>
	<script language="javascript">
	window.alert("Ο χρήστης υπάρχει");
	window.location="register.php";
	</script>
<?php    }


$sql="insert into tbluser(username,lname,age,email,job,password,fname) values('".$name."','".$lname."',".$age.",'".$email."','".$job."','".$pwd."','".$fname."')";   
  $result = $conn->query($sql);
  $conn->close();   /* Close connection */
?>

	<script language="javascript">
	window.alert("Ο χρήστης προστέθηκε επιτυχώς");
	window.location="index.php";
	</script>

