
<?php
session_start();
include 'dbconnect.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-7" />
</head>
<body></body></html>
<?php 

$mark=$_POST['mark'];
$movieid=$_POST['movieid'];
$sql="insert into tblmark(userid,movieid,mark) values(".$_SESSION['currentuser'].",".$movieid.",".$mark.")";   

  $result = $conn->query($sql);
  $conn->close();   /* Close connection */
?>

	<script language="javascript">
	window.alert("O βαθμός προστέθηκε επιτυχώς");
	window.location="index.php";
	</script>

