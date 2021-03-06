 ______                                    __            __       
/      |                                  /  |          /  |      
$$$$$$/  _____  ____    ______    ______  $$/   _______ $$ |   __ 
  $$ |  /     \/    \  /      \  /      \ /  | /       |$$ |  /  |
  $$ |  $$$$$$ $$$$  | $$$$$$  |/$$$$$$  |$$ |/$$$$$$$/ $$ |_/$$/ 
  $$ |  $$ | $$ | $$ | /    $$ |$$ |  $$ |$$ |$$ |      $$   $$<  
 _$$ |_ $$ | $$ | $$ |/$$$$$$$ |$$ \__$$ |$$ |$$ \_____ $$$$$$  \ 
/ $$   |$$ | $$ | $$ |$$    $$ |$$    $$ |$$ |$$       |$$ | $$  |
$$$$$$/ $$/  $$/  $$/  $$$$$$$/  $$$$$$$ |$$/  $$$$$$$/ $$/   $$/ 
                                /  \__$$ |                        
                                $$    $$/                         
                                 $$$$$$/                          

## Imagick Extension for SilverStripe

Requires a SilverStripe 3.* install and [PHP Imagick](http://www.imagemagick.org/script/api.php#php) configured for your PHP install. 

On ubuntu, this was as easy as:
```
sudo apt-get install php5-imagick
sudo php5enmod imagick
```
followed by restarting apache.

Once it has been added, you will have access to the following additional Image functions:

 * BlurredImage($radius, $sigma) 
	* Blurs an image using the Imagick::blurImage() function
	* @param $radius - The radius of the blur
	* @param $sigma - The standard deviation of the blur
 * ColourTransparentImage($colour)
 	* Fully colours an image in a single colour, preserving any opacity
 	* @param $colour - A colour string to give the image
 * ColourOverlayImage($colour, $opacity)
 	* Overlays a colour on top of an image, with a varying degree of opacity
 	* @param $colour - A colour string to give the image
 	* How transparent the overlay should be, from 0.0 - fully transparent to 1.0 - a block colour

NOTE: Currently, the $colour parameter only supports strings being passed, eg. "red", "blue", "green" will work, but "#ff0000", "#00ff00" and "#0000ff" will not.
