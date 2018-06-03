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
        <div class="col-lg-12"><h1 class="text-center">MySql Get Data Using <b>PDO</b> in PHP</h1></div>
        <div class="col-md-8"><br><br>
          <h3>Connection MySql get database current date and time.</h3>
          <?php
            $servername = "localhost";
            $username = "root";
            $password = "123";
            $database = "test";
            try {
              $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
              $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              echo "Connected successfully<br><br>";
              $sql = "SELECT now() dt";
              foreach ($conn->query($sql) as $row) {
                echo  "Current Date and Time From Database is: <b>".$row['dt']."</b><br>";
              }

              echo "<br>We can also collect Data in to an array<br><b>";

              $dt = $conn->query($sql)->fetch();
              print_r($dt);

              echo "</b>";
            }
            catch(PDOException $e)
            {
              echo "PDO: Connection failed: " . $e->getMessage();
            }

          ?>
          <br><br>
        </div>
      </div>
    </div>
  </body>
</html>
