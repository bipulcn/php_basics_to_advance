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
        <div class="col-lg-12"><h1 class="text-center">Basic PHP Document Structure</h1></div>
        <div class="col-md-8">
          <div class="">
            Here we are including PHP (embedded server-side scripting language) code on HTML page By adding &lt;?php ?&gt; tag. Every thin inside this tag will work as php code.<br><br>
            <?php
              echo "This line is printed by php code with echo keyword.<br>";
              $var_a = 5; // an variable name var_a was decleard and assigned in php.
              echo "<br>value of variable var_a is: ".$var_a;
             ?>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
