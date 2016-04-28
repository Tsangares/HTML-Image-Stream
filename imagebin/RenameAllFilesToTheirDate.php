<?php
function renameAll(){
	$dir = "images";
	$dirname = "images/";
	$images = glob($dirname."*.{png,jpg,PNG,JPG,gif,GIF,jpeg,JPEG}", GLOB_BRACE);
	usort($images, create_function('$a,$b', 'return filemtime($b) - filemtime($a);'));
	foreach($images as $image) {
		echo "changed ".$image;	
		$newName = pathinfo($image, PATHINFO_DIRNAME)."/".date("ymdHis", filectime($image)).".".pathinfo($image, PATHINFO_EXTENSION);
		echo " to".$newName ."\n";
		rename($image, $newName);
		
	}
}
renameAll();
?>