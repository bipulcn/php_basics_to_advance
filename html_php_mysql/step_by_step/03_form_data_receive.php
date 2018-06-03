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
        // Receive Submited Data
        if (isset($_POST['submit'])) {
          $student_id = $_POST['std_id'];
          $first_name = $_POST['f_name'];
          $middle_name = $_POST['m_name'];
          $last_name = $_POST['l_name'];
          $street_number = $_POST['street_no'];
          $street_name = $_POST['street_name'];
          $city_name = $_POST['city_name'];
          $department_name = $_POST['dep_name'];
          $date_of_birth = $_POST['d_o_b'];
          $semester = $_POST['semester'];
          $year = $_POST['year'];
          echo "<h1 class='text-center'>Data Received from POST(global) Variable</h1>";
          echo "Student id: <b>".$student_id."</b><br>";
          echo "First Name: <b>".$first_name."</b><br>";
          echo "Middle Name: <b>".$middle_name."</b><br>";
          echo "Last Name: <b>".$last_name."</b><br>";
          echo "Street No: <b>".$street_number."</b><br>";
          echo "Street Name: <b>".$street_name."</b><br>";
          echo "City: <b>".$city_name."</b><br>";
          echo "Department Name: <b>".$department_name."</b><br>";
          echo "Date of Birth: <b>".$date_of_birth."</b><br>";
          echo "Semester: <b>".$semester."</b><br>";
          echo "Year: <b>".$year."</b><br>";
        }

        // var_dump($_POST);

        ?>
        </div>


        <div class="col-lg-12"><h1 class="text-center">Student Information Form</h1></div>
        <div class="col-md-8">
          <form class="" action="03_form_data_receive.php" method="post">
            <table class="table table-striped">
              <tr>
                <td>Student id:</td><td colspan="2"><input  class="form-control" type="text" name="std_id" /></td>
              </tr>
              <tr>
                <td rowspan="3">Name:</td><td>First Name:</td><td><input  class="form-control" type="text" name="f_name" /></td>
              </tr>
              <tr>
                <td>Middle Name:</td><td><input  class="form-control" type="text" name="m_name" /></td>
              </tr>
              <tr>
                <td>Last Name:</td><td><input  class="form-control" type="text" name="l_name" /></td>
              </tr>
              <tr>
                <td colspan="3"></td>
              </tr>
              <tr>
                <td rowspan="3">Present Address:</td><td>Street No:</td><td><input  class="form-control" type="text" name="street_no" /></td>
              </tr>
              <tr>
                <td>Street Name:</td><td><input  class="form-control" type="text" name="street_name" /></td>
              </tr>
              <tr>
                <td>City:</td><td><input  class="form-control" type="text" name="city_name" /></td>
              </tr>
              <tr>
                <td>Department Name:</td><td colspan="2"><input class="form-control" type="text" name="dep_name" /></td>
              </tr>
              <tr>
                <td>Date of Birth:</td><td colspan="2"><input class="form-control" type="date" name="d_o_b" value="2001-06-01" /></td>
              </tr>
              <tr>
                <td>Semester:</td><td colspan="2"><input  class="form-control" type="text" name="semester" /></td>
              </tr>
              <tr>
                <td>Year:</td><td colspan="2"><input  class="form-control" type="number" name="year" value='2018' /></td>
              </tr>
              <tr>
                <td></td><td colspan="2"><input type="submit" name="submit" value="Save" class="btn btn-primary"></td>
              </tr>
            </table>
          </form>
        </div>


      </div>
    </div>
  </body>
</html>
