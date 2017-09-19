<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Change my Color</title>
  </head>
  <?php $color = ["red", "green","Aqua","BlueViolet","Brown","CadetBlue","Coral","DarkCyan","DarkOliveGreen", "DarkRed","DeepSkyBlue","DarkSlateGrey","GreenYellow","GoldenRod", "HotPink", "LightSlateGray", "Peru","RebeccaPurple","SlateBlue","SpringGreen","YellowGreen","Tan","Silver","MediumVioletRed", "MediumOrchid","Magenta"];
  $num1 = rand(0, count($color)-1);
  $num2 = rand(0, count($color)-1);
  $c1 = $color[$num1];
  $c2 = $color[$num2];
  ?>
  <style>
  body {
    background: red; /* For browsers that do not support gradients */
    background: -webkit-linear-gradient(<?php echo $c1.", ".$c2;?>); /* For Safari 5.1 to 6.0 */
    background: -o-linear-gradient(<?php echo $c1.", ".$c2;?>); /* For Opera 11.1 to 12.0 */
    background: -moz-linear-gradient(<?php echo $c1.", ".$c2;?>); /* For Firefox 3.6 to 15 */
    background: linear-gradient(<?php echo $c1.", ".$c2;?>);
    height: 100vh;
    /*background: <?php echo $color;?>;*/
  }
  h1 {
  }
  </style>
  <body>
    <h1>This page will change color each time.</h1>
  </body>
</html>
