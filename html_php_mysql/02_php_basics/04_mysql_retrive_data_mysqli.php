<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Php Basic Structure</title>
    <link rel="stylesheet" href="../boot/bootstrap.css">
  </head>
  <body><br><br>
    <div class="container">
      <div class="row justify-content-md-center">
        <div class="col-lg-12"><h1 class="text-center">MySql Get Data Using <b>MySqli</b> in PHP</h1></div>
        <div class="col-md-8"><br><br>
          <h3>Connection MySql get database current date and time.</h3>
          <?php
            $servername = "localhost";
            $username = "root";
            $password = "123";

            // Create connection
            $db = mysqli_connect($servername, $username, $password);
            if (!$db) die("mysqli: Connection failed: " . mysqli_connect_error());
            else echo "Connected successfully<br><br>";

            $query = mysqli_query($db, "SELECT now() dt");
            while($row = mysqli_fetch_assoc($query)) {
                echo "Current Date and Time From Database is: <b>" . $row["dt"]. "</b><br>";
            }

          ?>
          <br><br>
        </div>
      </div>
    </div>
  </body>
</html>
