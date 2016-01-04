<?php
class ImagickExtension extends ImagickBackend
{

    public function blur($radius, $sigma)
    {
        if (!$this->valid()) {
            return;
        }
        
        $new = clone $this;
        $new->blurImage($radius, $sigma);
        
        return $new;
    }

    public function colourTransparent($colour)
    {
        if (!$this->valid()) {
            return;
        }
        
        $new = clone $this;

        $new->setImageAlphaChannel(Imagick::ALPHACHANNEL_EXTRACT);
        $new->setImageBackgroundColor($colour);
        $new->setImageAlphaChannel(Imagick::ALPHACHANNEL_SHAPE);
        
        return $new;
    }

    public function colourOverlay($colour, $opacity)
    {
        if (!$this->valid()) {
            return;
        }
        
        $new = clone $this;
        $new->colorizeImage($colour, $opacity);
        
        return $new;
    }
}
