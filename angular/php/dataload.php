<?php
$data = file_get_contents("php://input");
$json = json_decode($data);
session_start();
$s_id = session_id();
$sec = $json->part;
// print_r($json);
// echo $sec."<br><b>hello world</b> This is from external<br> php <br>".$s_id;
if($sec==1) echo "This for the part one value. <b>Its working</b><br>SEssion id is: <b>".$s_id."<b>";
if($sec==2) echo "This for the part Two value.It is loading on page load";
if($sec==3) echo "This for the part Three value.It is loading on Clicking the tag";
?>