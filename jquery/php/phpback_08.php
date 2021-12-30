<?php
$post = file_get_contents('php://input'); // its an important line to specify the post data retival.
$json = json_decode($post); // decoding the json data in $json variable.
$dta = $json->name;
echo "it Just received data <br><q>".$dta."</q> <br>by post.";
?>