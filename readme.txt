##Image Steam
I will also call it the imagebin. 
*Live Demo: * http://thisagora.com/bin/

Pretty much its just folder with an index.php with a basic uploader. Files that are uploaded immediatly go underneath in a steam like fasion. This could be optimised, that is the challenge for you brave soul.

Thank you, hope you like it.

I am using this as an alternative download to my forum. It also it a lot of fun to make dedecated websites to specific types of images.

This code only uses html, css and php. No javascript :)

#How To Use
I supplied a foldes called *imagebin*. Drop this folder onto your domain and link to it.

Here is an explaination for the files inside:
- index.php
	+ contains a uploader, and a display function that pulls images from the */imagebin/images* folder.
- loadall.php
	+ this is the code that loads all of the images from */imagebin/images* in order of the most recent is at the top.
- upload.php
	+ this file is called when the forum is submitted. It takes png, jpg, jpeg, and gif files and puts them as the same name into the folder images. Edit this if you want to restrict the images being uploaded and where you want them to go. 


Thank you for using this!