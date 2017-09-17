<?php
include('../php/getLinks.php');
?>
  	<div class="container">
	    <h1>Write code to check a String is palindrome or not?.</h1>
	    <p class="note">a word, line, verse, number, sentence, etc., reading the same backward as forward, as Madam, I'm Adam or Poor Dan is in a droop</p>
      <div class="phpOutput">
        <?php
        function fn_palindrome($palindrome) {
            $original = strtolower(preg_replace('/[^A-Za-z0-9\-]/', '',str_replace(' ','',$palindrome)));
            $ary = str_split($original);
            for ($i=0; $i < count($ary) ; $i++) {
              if ($ary[$i]!=$ary[count($ary)-$i-1]) {
                echo $i.": ".$ary[$i]." != ".$ary[count($ary)-$i-1];
                return 'Its not Palindrome';
              }
            }
            return 'Its a Palindrome';
        }

        $string = "A man, a plan, a canal, Panama";
        echo fn_palindrome($string);
  //    Another program to find palindrome;
        function check_plaindrome($string) {
          //remove all spaces
          $string = str_replace(' ', '', $string);

          //remove special characters
          $string = preg_replace('/[^A-Za-z0-9\-]/', '', $string);

          //change case to lower
          $string = strtolower($string);

          //reverse the string
          $reverse = strrev($string);

          if ($string == $reverse) {
              echo "<p>It is Palindrome</p>";
          }
          else {
              echo "</p>Not Palindrome</p>";
          }
      }

      $string = "A man, a plan, a canal, Panama";
      echo "<q>".$string."</q><br>";
      check_plaindrome($string);
        ?>
      </div>
      <div class="phpCode">
<?php
$code = '<?php
function fn_palindrome($palindrome) {
    $original = strtolower(preg_replace(\'/[^A-Za-z0-9\-]/\', \'\',str_replace(\' \',\'\',$palindrome)));
    $ary = str_split($original);
    for ($i=0; $i < count($ary) ; $i++) {
      if ($ary[$i]!=$ary[count($ary)-$i-1]) {
        echo $i.": ".$ary[$i]." != ".$ary[count($ary)-$i-1];
        return \'Its not Palindrome\';
      }
    }
    return \'Its a Palindrome\';
}

$string = "A man, a plan, a canal, Panama";
echo fn_palindrome($string);

//    Another program to find palindrome;

function check_plaindrome($string) {
  //remove all spaces
  $string = str_replace(\' \', \'\', $string);

  //remove special characters
  $string = preg_replace(\'/[^A-Za-z0-9\-]/\', \'\', $string);

  //change case to lower
  $string = strtolower($string);

  //reverse the string
  $reverse = strrev($string);

  if ($string == $reverse) {
      echo "<p>It is Palindrome</p>";
  }
  else {
      echo "</p>Not Palindrome</p>";
  }
}

$string = "A man, a plan, a canal, Panama";
echo "<q>".$string."</q><br>";
check_plaindrome($string);
?>';
echo highlight_string($code);
?>
      </div>
	</div>
  </body>
</html>
