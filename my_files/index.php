
<?php
session_start();
include 'dbconnect.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Ηλεκτρονική Ταινιοθήκη</title>
<meta name="keywords" content="Ταινίες, πληροφορίες για ταινίες" />
<meta name="description" content="Ιστοσελίδα με πληροφορίες για ταινία" />
<link href="style.css" rel="stylesheet" type="text/css" />



</head>
<body>

<div id="ergasia_wrapper">

	<div id="ergasia_header">
    
        <div id="ergasia_menu" class="ddsmoothmenu">
            <ul>
              	<li><a href="index.php" class="selected">Αρχική</a></li>
          		<li><a href="register.php">Εγγραφή</a></li>
				<li><a href="login.php">Είσοδος</a></li>
            </ul>
            <br style="clear: left" />
        </div> <!-- end of ergasia_menu -->
        
    </div> <!-- end of header -->

    
    <div id="ergasia_main">
    	<div class="col_fw">
        	<div class="col_w660 float_l">
            	<h2>Ηλεκτρονική Ταινιοθήκη</h2>
                <div class="cleaner h20"></div>
                <p>Η σελίδα περιέχει μια λίστα από ταινίες για τις οποίες μπορείτε να δείτε πληροφορίες πατώντας πάνω σε έναν από τους τίτλους. Για το σχολιασμό και τη βαθμολογηση θα πρέπει να είστε εξουσιοδοτημένος χρήστης. Για εγγραφή πατήστε στην επιλογή Εγγραφή.
				</p>
				<h4>Ταινίες</h4>
                <div class="cleaner h20"></div>
                <p>
				<?php

//show all movies
			  $sql = "SELECT * FROM tblmovie";
			  $result = $conn->query($sql);
			  if (!$result) die($conn->error);

			  while($row = $result->fetch_array(MYSQLI_ASSOC)) {
				echo "<a href='movie.php?movieid=".$row['movieid']."' /><h5>" .$row['title'] ."</h5></a><br>";
				echo "<a href='movie.php?movieid=".$row['movieid']."' /><img src='./movieimages/" .$row['image'] ."' width='250'/></a><br>";
				echo "<hr>";
			  }

			  $result->close(); /* Free buffers/memory */
			 
?>
				</p>
                <div class="cleaner h20"></div>

            </div>
        	<div class="col_w300 float_l">
			<h4>Κατηγορία Ταινίας</h4>
			<FORM name="categoryform" action="category.php" method="post" >
			<table><tr><td>
			<select name="category" id="category" >
			<?php
			//show drop down with categories
			$sql2 = "SELECT * FROM tblcategory";
			  $result2 = $conn->query($sql2);
			  if (!$result2) die($conn->error);

			  while($row = $result2->fetch_array(MYSQLI_ASSOC)) {
				echo "<option value='".$row['categoryid']."'>".$row['categoryname'] ."</option>";
			  }

			  $result2->close(); /* Free buffers/memory */
			  $conn->close();   /* Close connection */
			  ?>
			  </select>
			  </td>
			  </tr>
			  <tr><td>
			  <input type="submit" value="Αναζήτηση"/>
			
			  </td>
			  </tr>
			  </table>
			  </form>
			</div>
            <div class="cleaner"></div>
		</div>

        <div class="cleaner"></div>
        </div>
    </div>
    
    <div class="cleaner"></div>

<div id="ergasia_footer_wrapper">
    <div id="ergasia_footer">
        Copyright © 2016  <a href="#" target="_parent">Ηλεκτρονική Ταινιοθήκη</a> | 
        Designed by <a href="#" target="_parent">Ηλεκτρονική Ταινιοθήκη</a>
        <div class="cleaner"></div>
    </div>
</div> 
  
</body>
</html>