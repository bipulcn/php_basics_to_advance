<!DOCTYPE html>
<?php ini_set('display_errors', 1);?>
<html>
  <head>
    <meta charset="utf-8">
    <title>First Dynamics</title>
  </head>
  <body>
    <h1>Simple php use to make a page dynamic. </h1>
    <p>Here we are going to see different message on page refresh.</p>
    <?php
    $var = 12320;
    $var2 = "23423";
    $va = 2.033;
    $a = $var/$va;
    echo $a."<br>";

    print "Hello world ".($var+$var2)."<br>";
    for($b=2; $b <= 100; $b++)
    {
      $l=0;
      for($c=2; $c <= $b/2; $c++)
      {
        if($b%$c==0)
        {
          $l=1;
        }

      }
      if($l==0)
      echo $b."<br>";
    }
    ?>
    <?php
    $ary = ["The most difficult thing is the decision to act, the rest is merely tenacity. The fears are paper tigers. You can do anything you decide to do. You can act to change and control your life; and the procedure, the process is its own reward.",
    "Believe you can and you're halfway there.", "The pessimist complains about the wind; the optimist expects it to change; the realist adjusts the sails.",
    "The future belongs to those who believe in the beauty of their dreams.", "The best and most beautiful things in the world cannot be seen or even touched - they must be felt with the heart.",
    "Keep love in your heart. A life without it is like a sunless garden when the flowers are dead.",
    "It is during our darkest moments that we must focus to see the light.",
    "Try to be a rainbow in someone's cloud.", "Find a place inside where there's joy, and the joy will burn out the pain.",
    "Don't judge each day by the harvest you reap but by the seeds that you plant.",
    "The only thing necessary for the triumph of evil is for good men to do nothing.",
    "One of the most beautiful qualities of true friendship is to understand and to be understood.",
    "Where there is love there is life.",
    "Love is composed of a single soul inhabiting two bodies.",
    "Do not go where the path may lead, go instead where there is no path and leave a trail.",
    "Success is not final, failure is not fatal: it is the courage to continue that counts."];
    $num = rand(0, count($ary)-1);
    echo "<h4><q>".$ary[$num]."</q></h4>";
     ?>
  </body>
</html>
