<?php
$dirname = "images/";
$images = glob($dirname."*.{png,jpg,PNG,JPG,gif,GIF,jpeg,JPEG}", GLOB_BRACE);
usort($images, create_function('$a,$b', 'return filemtime($b) - filemtime($a);'));
foreach($images as $image) {
echo '<img class="img" src="'.$image.'" /><br />';
}