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
        <div class="col-lg-12"><h1 class="text-center">Basic Form Data use in PHP</h1></div>
        <div class="col-md-8">
          <?php // This part of php code will receive the data submited by pressing che Check button
            if (isset($_POST['submit'])) {  // Checking if data was sent or not  Otherwise it will show an error.
              echo "Data Was Sent Through POST Method<br>";
              $name = $_POST['user_name'];
              echo "<h3>welcome ".$name."</h3>";
            }
            else echo "No Data was Submited.";
          ?>
        </div>
        <div class="col-md-8">
          <form class="" action="02_basic_form_data.php" method="post">
            <div class="form-group">
              <label class="control-label" for="email">Name:</label>
              <input type="text" name="user_name" class="form-control" placeholder="Enter your name">
            </div>
            <div class="form-group">
              <input type="submit" name="submit" value="Check" class="btn btn-primary">
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
