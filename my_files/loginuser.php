
<?php
session_start();
include 'dbconnect.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-7" />
</head><body></body></html>
<?php 

$pwd = $_POST['pwd' ];
$name=$_POST['name'];

$sql="select * from tbluser where username='".$name."'";
  $result = $conn->query($sql);
  if (!$result) die($conn->error);
  //if user doesnt exist
if ($result->num_rows==0)
    {
  $conn->close();   /* Close connection */
	?>
	<script language="javascript">
	window.alert("Ο χρήστης δεν υπάρχει");
	window.location="index.php";
	</script>
<?php    }
else
{
//else use session variable currentuser
  while($row = $result->fetch_array(MYSQLI_ASSOC)) {
$_SESSION['currentuser']=$row['userid'];
  }
  $conn->close();   /* Close connection */
  }
?>

	<script language="javascript">
	window.alert("Ο χρήστης εκανε login επιτυχώς");
	window.location="index.php";
	</script>

