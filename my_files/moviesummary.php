<?php
session_start();
include 'dbconnect.php';
if((isset($_REQUEST['movieid']))&&(!empty($_REQUEST['movieid'])))
$movieid=$_REQUEST['movieid'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-7" />
<title>Ηλεκτρονική Ταινιοθήκη</title>
<meta name="keywords" content="Ταινίες, πληροφορίες για ταινίες" />
<meta name="description" content="Ιστοσελίδα με πληροφορίες για ταινία" />

</head>
<body>

                <p>
				<?php


			  $sql = "SELECT * FROM tblmovie where  tblmovie.movieid=$movieid";
			  $result = $conn->query($sql);
			  if (!$result) die($conn->error);

			  while($row = $result->fetch_array(MYSQLI_ASSOC)) {

				echo "<img src='./movieimages/" .$row['image'] ."' width='50'/><br>";
				echo "<h5>Περίληψη:" .$row['summary'] ."</h5><br>";
			  }
			  $result->close(); /* Free buffers/memory */

?>

</body>
</html>