
<html>
  <body>
    <?php

      $conn = new mysqli("localhost", "root", "");

      if ($conn->connect_error) 
        die("Couldn't connect to DB: " . $conn->connect_error);

      $sql = "CREATE DATABASE movies_db";

      if ($conn->query($sql))
        echo "DB created successfully.";
      else
        echo "Error in creating DB: " . $conn->error;

      $conn->close();
    ?>
  </body>
</html>
