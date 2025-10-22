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
        <div class="col-lg-12"><h1 class="text-center">MySql connection Using <b>MySqli</b> or <b>PDO</b> in PHP<br> User One of them to connect mysql</h1></div>
        <div class="col-md-8"><br><br>
          <h3>Connection MySql Through MySQLi Procedural</h3>
          <?php
            $servername = "localhost";
            $username = "root";
            $password = "123";

            // Create connection
            $conn = mysqli_connect($servername, $username, $password);

            // Check connection
            if (!$conn) {
              die("mysqli: Connection failed: " . mysqli_connect_error());
            }
            else
              echo "Connected successfully";
            mysqli_close($conn);
          ?>
          <br><br>
          <h3>Connection MySql Through PDO (Object Oriended Database Connection)</h3>
          <?php
            $servername = "localhost";
            $username = "root";
            $password = "123";
            $database = "test";
            try {
              //  setup database connection through initiating PDO object
              $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
              // set the PDO error mode to exception
              $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              echo "Connected successfully";
            }
            catch(PDOException $e)
            {
              echo "PDO: Connection failed: " . $e->getMessage();
            }
          ?>
        </div>
      </div>
    </div>
  </body>
</html>
