<?php
class ImageExtension extends DataExtension {

	/**
	 * Blurs an image using the Imagick::blurImage() function
	 *
	 * @param $radius - The radius of the blur
	 * @param $sigma - The standard deviation of the blur
	 */
	public function BlurredImage($radius, $sigma) {
		return $this->owner->getFormattedImage('BlurredImage', $radius, $sigma);
	}

	public function generateBlurredImage(Image_Backend $backend, $radius, $sigma) {
		return $backend->blur($radius, $sigma);
	}

	/**
	 * Fully colours an image in a single colour, preserving any opacity
	 *
	 * @param $colour - A colour string to give the image
	 */
	public function ColourTransparentImage($colour) {
		return $this->owner->getFormattedImage('ColourTransparentImage', $colour);
	}

	public function generateColourTransparentImage(Image_Backend $backend, $colour) {
		return $backend->colourTransparent($colour);
	}

	/**
	 * Overlays a colour on top of an image, with a varying degree of opacity
	 *
	 * @param $colour - A colour string to give the image
	 * @param $opacity - How transparent the overlay should be, from 0.0 - fully transparent
	 *					 to 1.0 - a block colour
	 */
	public function ColourOverlayImage($colour, $opacity) {
		return $this->owner->getFormattedImage('ColourOverlayImage', $colour, $opacity);
	}

	public function generateColourOverlayImage(Image_Backend $backend, $colour, $opacity) {
		return $backend->colourOverlay($colour, $opacity);
	}

}
?>