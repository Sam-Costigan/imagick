<?php

if(class_exists('Imagick')){
	Image::set_backend('ImagickExtension');
}