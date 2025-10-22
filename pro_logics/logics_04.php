<?php ini_set('display_errors', 1);?>
<?php
include('../php/getLinks.php');
?>
  	<div class="container">
	    <h1>Print all permutation of String both iterative and Recursive way?.</h1>
	    <p class="note"></p>
      <div class="phpOutput">
        <?php
          $ary = array();
          $ary[0] = "hello world";
          $ary[1] = 100;
          $ary[2] = 40;
          $ary[3] = 'test';
          $ary[4] = 10034;
          echo "<pre>";
          // var_dump($ary);
          echo "</pre>";
        ?>
        <h3><?= $ary[0]; ?></h3>
        <?php
          for ($i=0; $i < sizeof($ary); $i++) {
            echo $ary[$i]."<br>";
          }
          foreach ($ary as $key => $value) {
            echo $key."= ".$value."<br>";
          }
        ?>

        <hr>

        <?php
        $obj = new stdClass;
        $obj->item1 = "this is test";

        var_dump($ary);
        echo "<br>";
        var_dump($obj);
        echo "<br>";
        ?>
      </div>
      <div class="phpCode">
<?php
$code = '';
echo highlight_string($code, true);
?>
      </div>
	</div>
  </body>
</html>
