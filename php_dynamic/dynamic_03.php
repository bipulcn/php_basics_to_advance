<!DOCTYPE html>
<?php ini_set('display_errors', 1);?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Person information</title>
  </head>
  <body>
    <h1>person informations.<div> test data </div></h1>
    <?php
 $inf = '{"one": {"John":20,"Harry":30,"Dave":40,"Tony":50}, "two":{"John":20,"Harry":30,"Dave":40,"Tony":50}}';
 $job = json_decode($inf);
 var_dump($job);
 foreach ($job as $v) {
   echo '<br>';
   var_dump($v);
   var_dump($v->John);
 }
 echo "<br><br>";
$info = array(
  array("name"=>'Ms Adele Worth', 'address'=>'London, Alaska','phone'=>"(559) 463-5804",'dob'=>"February 12, 1970 "),
  array("name"=>'Mr Henderson Chavez', "address"=>'Maunaloa, Northwest Territories', "phone"=>'(867) 176-2822',"dob"=>'December 9, 1948'),
  array("name"=>'Ms Clare Fishman', "address"=>'Unalakleet, Indiana', "phone"=>'(574) 482-3973',"dob"=>'December 11, 1946'),
  array("name"=>'Ms Eirian Burton', "address"=>'Kaihon Kug, North Dakota', "phone"=>'(701) 007-4445',"dob"=>'May 12, 1995'),
  array("name"=>'Mr Binyamin Berner', "address"=>'Usibelli, Missouri', "phone"=>'(314) 906-7028',"dob"=>'November 30, 1984'),
  array("name"=>'Mr Rezse Torrez', "address"=>'Lazy Mountain, North Carolina', "phone"=>'(910) 162-5734',"dob"=>'January 4, 1988'),
  array("name"=>'Mr Motega Dantzler', "address"=>'Caviness, California', "phone"=>'(661) 423-9874',"dob"=>'October 20, 1982'),
  array("name"=>'Mr Oddvar Kazmierczak', "address"=>'Dillingham, Ohio', "phone"=>'(740) 233-4405',"dob"=>'December 27, 1964'),
  array("name"=>'Ms Latoya Dematteo', "address"=>'The String, West Virginia', "phone"=>'(304) 072-7161',"dob"=>'March 28, 1971'),
  array("name"=>'Ms Norna Utley', "address"=>'Nisqually, Ohio', "phone"=>'(513) 753-0951',"dob"=>'July 11, 1975'),
  array("name"=>'Mr Abe Osburn', "address"=>'Clackamas, Missouri', "phone"=>'(314) 131-3005',"dob"=>'February 10, 1954'),
  array("name"=>'Mr Noble Gunnels', "address"=>'Show Low, California', "phone"=>'(559) 403-4804',"dob"=>'July 12, 1977')
);

    for ($i=0; $i < count($info); $i++) {
      echo '<div class="persons">';
      echo "<h3>".$info[$i]['name']."</h3>";
      echo "<p>Address: ".$info[$i]['address']."<br>Phone: ".$info[$i]['phone']."<br>Date of Birth: ".$info[$i]['dob'];
      echo "</p>";
      echo '</div>';
    }


    ?>
  </body>
</html>
