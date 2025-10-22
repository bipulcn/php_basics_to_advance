<?php ini_set('display_errors', 1);?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <?php
  /**
   *
   */
  class CustomClass extends ArrayObject
  {
    public $items;
    function __construct($values)
    {
      $this->items = $values;
    }
    function displayAsTable() {
      $output = "<table><tr><th>Key</th><th>Value</th></tr>";
      foreach ($this->items as $key => $value) {
        $output .= "<tr><td>".$key."</td><td>".$value."</td></tr>";
      }
      $output .= "</table>";
      return $output;
    }
  }

  ?>
  <body>
    <div class="">
      <?php
        $aro = new CustomClass(array('first','second','third'));
        echo $aro->displayAsTable();
      ?>
    </div>
  </body>
</html>
