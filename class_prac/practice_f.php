<?php
include('../php/getLinks.php');
?>
  	<div class="container">
	    <h1>Basic Page Structure.</h1>
	    <p class="note">Note about the learning section.</p>
      <div class="phpOutput">
        <?php
        ?>
      </div>
      <div class="phpCode">
<?php
$code = '';
echo highlight_string($code);
?>
      </div>
	</div>

  </body>
</html>
