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

        <div class="col-lg-12">
        <?php
          $servername = "localhost";
          $username = "root";
          $password = "123";
          $database = "test";
          $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

          $query = "SELECT * FROM student_info";
          // run query
          foreach($conn->query($query) as $row) {
            echo "<br>Student id: <b>".$row['sid']."</b><br>";
            echo "Student Name: <b>".$row['fname']." ".$row['mname']." ".$row['lname']."</b><br>";
            echo "Address: <b>".$row['street_no'].", ".$row['str_name']." ".$row['city']."</b><br>";
            echo "Department Name: <b>".$row['department']."</b><br>";
            echo "Date of Birth: <b>".$row['dob']."</b><br>";
            echo "Semester: <b>".$row['semester']."</b><br>";
            echo "Year: <b>".$row['year']."</b><br>";
            echo "<hr><br>";
          }

        ?>
        </div>

      </div>
    </div>
  </body>
</html>
