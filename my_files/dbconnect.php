
<html>
  <body>
    <?php

  $conn = new mysqli("localhost", "root", "", "movies_db");

      if ($conn->connect_error)
        die($conn->connect_error);

		mysqli_set_charset($conn,"greek");

    ?>
  </body>
</hml>
