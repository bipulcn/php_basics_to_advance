<?php
ini_set('memory_limit', '-1');
$tmpn = "tmp";
$input = file_get_contents("php://input");
$json = json_decode($input);
// $email = $json->name;
$svnam = $_POST['name'];
print_r($_POST);
$nw = $_POST['width']; 
if(!empty($_FILES['image'])){
	$ext = pathinfo($_FILES['image']['name'],PATHINFO_EXTENSION);
    $image = $tmpn.'.'.$ext;
	move_uploaded_file($_FILES["image"]["tmp_name"], 'images/'.$image);
	// echo "Image uploaded successfully as ".$image;
	list($w, $h) = getimagesize('images/'.$image);

	$source = imagecreatefromjpeg( './images/'.$image );
	$rat = $h/$w;
	if($rat>0.618033988) {
		$rw = 0;
		$rh = $h - $w*0.618033988;
	}
	else {
		$rw = $w - $h*0.618033988;
		$rh = 0;
	}
	$nh = $nw*0.618033988;
	$dst1 = imagecreatetruecolor( $nw, $nh );
	if(imagecopyresampled($dst1, $source,0, 0, $rw/2, $rh/2, $nw, $nh, $w-$rw, $h-$rh))
    {
        // copy file
        if(imagejpeg($dst1,'./images/'.$svnam.'.'.$ext,85))
        {
            imagedestroy($dst1);
        }
    }

	echo "Upload Successful";
}else{
echo "Image Is Empty";
}

?>