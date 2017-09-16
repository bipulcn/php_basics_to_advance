<?php
include('../php/getLinks.php');
?>
  	<div class="container">
	    <h1>Condition state ment</h1>
	    <p class="note">Here we will cover the basic of Condition statement.</p>
      <div class="phpOutput">
        <?php
        $a = true;
        $b = false;
        if ($a) {
          echo "Its showing because its true Condition";
        }
        if($b) {
          echo "This part will not be printed";
        }
        else {
          echo "This part going to be displayed on the screen";
        }
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
